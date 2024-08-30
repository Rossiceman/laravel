<?php

namespace App\Http\Controllers\Admin\News;

use App\Exports\ExportNews;
use App\Http\Controllers\Controller;
use App\Models\News\News;
use App\Models\News\NewsType;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Facades\Excel;
use PhpOffice\PhpWord\TemplateProcessor;
use PhpOffice\PhpWord\Writer\PDF;
use TCPDF;

class NewsController extends Controller
{
    public function list()
    {
        $list = (new News())->getList();

        return view("admin.news.list", compact("list"));
    }

    public function add()
    {
        $times = explode(" ", microtime());
        // strftime:將時間序列轉換為日期時間格式
        $time = strftime("%Y-%m-%d-%H-%M-%S-", $times[1]);
        echo($times[1]."<br>");
        //echo(str_replace("0.", "", $times[0])."<br>");
        // substr:取字串
        // substr($times[0], 2, 6)：由times[0]中的文字,由第3位數開始,取6位數
        // $t2 = substr($times[0], 2, 6);
        // echo($time. $t2 . ".jpg");
        // exit;
        $list = NewsType::get();
        return view("admin.news.add", compact("list"));
    }

    public function insert(Request $req)
    {
        $photo = $req->photo;

        $times = explode(" ", microtime());
        // extension:副檔案
        $fileName = $times[1] . "." . $photo->extension();

        if (!file_exists("images")) {
            // 4:讀取  2:寫入  1:執行
            // 第一個7:擁有者  第二個7:群組  第三個7:公開
            mkdir("images", 0777);
        }

        if (!file_exists("images/news")) {
            mkdir("images/news", 0777);
        }

        $photo->move("images/news", $fileName);

        $news = new News();
        $news->typeId = $req->typeId;
        $news->title = $req->title;
        $news->subTitle = $req->subTitle;
        $news->dates = $req->dates;
        $news->content = $req->content;
        $news->photo = $fileName;
        $news->save();

        Session::flash("message", "已新增");
        return redirect("/admin/news/list");
    }

    public function edit(Request $req)
    {
        $list = NewsType::get();
        $news = News::find($req->id);
        return view("admin.news.edit", compact("news", "list"));
    }

    public function update(Request $req)
    {
        // 上傳圖檔
        $photo = $req->photo;
        // 將微秒以空格做分割
        $times = explode(" ", microtime());
        // extension:副檔案
        // 檔名以時間序列來命名
        $fileName = $times[1] . "." . $photo->extension();
        // 將上傳圖檔由暫存區移至public/images/news資料夾下
        $photo->move("images/news", $fileName);
        // 取得要修改的最新消息
        $news = News::find($req->id);
        // 如果原本有圖檔
        if (!empty($news->photo)) {
            // 從public/images/news 資料夾中將圖檔刪除
            @unlink("images/news/" . $news->photo);
        }
        // 消息類別
        $news->typeId = $req->typeId;
        // 大標題
        $news->title = $req->title;
        // 次標題
        $news->subTitle = $req->subTitle;
        // 日期
        $news->dates = $req->dates;
        // 內容
        $news->content = $req->content;
        // 上傳圖檔的檔名
        $news->photo = $fileName;
        $news->update();

        Session::flash("message", "已修改");
        return redirect("/admin/news/list");
    }

    public function delete(Request $req)
    {
        $ids = $req->id;
        foreach ($ids as $id) {
            $news = News::find($id);
            if (!empty($news->photo)) {
                @unlink("images/news/" . $news->photo);
            }
            $news->delete();
        }

        Session::flash("message", "已刪除");
        return redirect("/admin/news/list");
    }

    public function export()
    {
        /*
            1.composer require maatwebsite/excel
            2.composer.json "require"的版本1.3改成 "maatwebsite/excel": "^3.1",
            3.在終端機 composer update
            4.config/app.php providers 加上 Maatwebsite\Excel\ExcelServiceProvider::class,
            5.config/app.php aliases 加上  'Excel' => Maatwebsite\Excel\Facades\Excel::class,
            6.新增匯出檔案 php artisan make:export ExportNews
        */

        return Excel::download(new ExportNews, "最新消息.xlsx");
    }

    public function word(Request $req)
    {
        $news=News::find($req->id);
        $temp = new TemplateProcessor("temp/news.docx");
        $temp->setValue("types","");
        $temp->setValue("title",$news->title);
        $temp->setValue("subtitle", $news->subTitle);
        $temp->setValue("dates",$news->dates);

        $content = $news->content;
        // 將html 的換行(<br/>),改為word的換行(<w:br/>)
        $content= str_replace("<br/>","<w:br/>",$content);
        $content= str_replace("<p>","<w:br/>",$content);
        $content= str_replace("</p>","",$content);

        $temp->setValue("content",$content);
        $temp->setImageValue("photo", "images/news/". $news->photo);

        header("Content->type: application/vnd.ms-word");
        header("Content-Disposition: attachment;filename=" . $news->title .".docx");
        header("Cache-Control: max-age=0");
        $temp->saveAs("php://output");
    }

    public function pdf(Request $req)
    {
        $news = News::find($req->id);
        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true,"");
        // 設定標題
        $pdf->setTitle("最新消息");
        // 設定檔頭字型
        $pdf->setHeaderFont(array(PDF_FONT_NAME_MAIN, "", PDF_FONT_SIZE_DATA));
        // 設定邊界
        $pdf->setMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_TOP);
        $pdf->setHeaderMargin(0);
        $pdf->setFooterMargin(0);
        $pdf->setPrintFooter(false);
        $pdf->setAutoPageBreak(true, PDF_MARGIN_BOTTOM);
        $pdf->setPrintHeader(false);

        // 
    }
}
