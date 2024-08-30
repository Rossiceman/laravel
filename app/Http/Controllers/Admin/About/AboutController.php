<?php

namespace App\Http\Controllers\Admin\About;

use App\Http\Controllers\Controller;
use App\Models\About\AboutItem;
use App\Models\Admin\Photo\Upload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AboutController extends Controller
{
    public function list(Request $req)
    {
        $typeId = $req->typeId;
        $list = (new AboutItem())->getList($typeId);
        $title = "關於我們";
        if ($req->type == "3")
        {
            $title = "優勢";

        }
        session()->put("aboutTitle",$title);
        return view("admin.about.about.list", compact("list","typeId"));
    }

    public function add(Request $req)
    {
        $typeId = $req->typeId;
        return view("admin.about.about.add",compact("typeId"));
    }

    public function insert(Request $req)
    {
        $item = new AboutItem();
        // 如果上傳圖
        if (!empty($req->photo))
        {
            // 取得上傳後的檔名
            $fileName = (new Upload())->uploadPhoto($req->photo, "images/about", false, "", "", true, 100, 100);
            $item->photo = $fileName;
        }

        // 類別代碼: 2.關於 3.優勢
        $item->typeId = $req->typeId;
        // 標題
        $item->item_name = $req->itemName;
        // 內容:2024.08.07 14:00 XX單位 某某某申請變更，申請單編號30678
        $item->content = $req->content;  
        $item->save();

        Session::flash("message", "已新增");
        return redirect("/admin/about/about/list/". $req->typeId);
    }

    public function edit(Request $req)
    {
        $typeId = $req->typeId;
        $item = AboutItem::find($req->id);
        return view("admin.about.about.edit", compact("item","typeId"));
    }

    public function update(Request $req)
    {
        $photo = $req->photo;
        $item = AboutItem::find($req->id);
        //如果有更換圖檔
        if (!empty($photo)) 
        {
            $fileName = (new Upload())->uploadPhoto($req->photo, "images/about", false, "", "", true, 100, 100);
            if (!empty($item->photo)) 
            {
                @unlink("images/about/" . $item->photo);
            }
            //圖檔設定新的檔名
            $item->photo = $fileName;
        }



        $item->item_name = $req->itemName;
        $item->content = $req->content;
        $item->update();

        Session::flash("message", "已修改");
        return redirect("/admin/about/about/list/". $req->typeId);
    }

    public function delete(Request $req)
    {
        $id =$req->id;
        if(!empty($id) && sizeof($id)>0){
            foreach ($id as $ids){
                $item = AboutItem::find($ids);
                if (!empty($item->photo)) 
                {
                    @unlink("images/about/" . $item->photo);
                    @unlink("images/about/S/" . $item->photo);
                    if(file_exists("images/about/M/" .$item->photo))
                {
                    @unlink("images/about/M/" .$item->photo);
                }
                }
                
                $item->delete();
            }
        }
        Session::flash("message", "已刪除");
        return redirect("/admin/about/about/list/" .$req->typeId);
    }

    public function saveImg()
    {
        $times = explode(" ",microtime());
        $fileName = session()->get("manager")."_". $times[1];
        $data = $_REQUEST["data"];
        $photo = explode("base64",$data);
        file_put_contents("images/about/" .$fileName .".png", base64_decode($photo[1]));
    }
}
