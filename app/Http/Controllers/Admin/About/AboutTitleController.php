<?php

namespace App\Http\Controllers\Admin\About;

use App\Http\Controllers\Controller;
use App\Models\About\AboutTitle;
use App\Models\About\AboutType;
use App\Models\Member;
use App\Models\MemberEdu;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AboutTitleController extends Controller
{
    public function list()
    {
        $list = (new AboutTitle())->getList();
        return view("admin.about.title.list",compact("list"));

        // DB::beginTransaction();
        // try{
        //     $member = new Member();
        //     $member->userName = "name1";
        //     $member->tel = "123";
        //     $member->save();

        //     $edu= new MemberEdu();
        //     $edu->memberId = $member->id;
        //     $edu->degree="大學";
        //     $edu->save();
            
           
        //     DB::commit();
        // }catch(Exception $e){
        //     DB::rollBack();
        //     throw $e;
        //     exit;
        // }
    }

    public function add()
    {
        // 取得可以新增的類別
        $list = (new AboutType())->getList();
        return view("admin.about.title.add",compact("list"));
    }

    public function insert(Request $req)
    {
        // 內容
        $content = $req->content;
        // 如果輸入有內容
        if (!empty($content))
        {
            // 將輸入框的換行(\n)轉換成網面的換行(<br\>)
            $content = str_replace("\n","<br/>",$content);
        }

        $title = new AboutTitle();
        // 類別
        $title->typeId = $req->typeId;
        // 標題
        $title->title = $req->title;
        // 內容
        $title->content = $content;
        $title->save();

        Session::flash("message","已新增");
        return redirect("/admin/about/title/list");
    }

    public function edit(Request $req)
    {
        $about = AboutTitle::find($req->id);
        return view("admin.about.title.edit",compact("about"));
    }

    public function update(Request $req)
    {
        $content = $req->content;
        if (!empty($content))
        {
            $content = str_replace("\n","<br/>",$content);
        }

        $about = AboutTitle::find($req->id);
        $about->title = $req->title;
        $about->content = $content;
        $about->update();

        Session::flash("message","已修改");
        return redirect("/admin/about/title/list");
    }

    public function delete(Request $req)
    {
        if (!empty($req->id))
        {
            foreach($req->id as $id)
            {
                $about = AboutTitle::find($id);
                $about->delete();
            }
        }

        Session::flash("message","已刪除");
        return redirect("/admin/about/title/list");
    }
}
