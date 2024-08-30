<?php

namespace App\Http\Controllers\Admin\About;

use App\Http\Controllers\Controller;
use App\Models\About\AboutEvent;
use App\Models\About\AboutTitle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AboutEventController extends Controller
{
    public function list()
    {
        $list = AboutEvent::get();
        return view("admin.about.events.list", compact("list"));
    }

    public function add()
    {
        return view("admin.about.events.add");
    }

    public function insert(Request $req)
    {
        $title = new AboutEvent();
        // 日期
        $title->dates = $req->dates;
        // 內容
        $title->content = $req->content;
        $title->save();

        Session::flash("message", "已新增");
        return redirect("/admin/about/event/list");
    }

    public function edit(Request $req)
    {
        $about = AboutTitle::find($req->id);
        return view("admin.about.title.edit", compact("about"));
    }

    public function update(Request $req)
    {
        // 內容
        $content = $req->content;
        // 如果有輸入內容
        if (!empty($content))
        {
            // 將輸入框的換行(\n)轉換為網頁的換行(<br/>)
            $content = str_replace("\n", "<br/>", $content);
        }

        $about = AboutTitle::find($req->id);
        $about->title = $req->title;
        $about->content = $content;
        $about->update();

        Session::flash("message", "已修改");
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

        Session::flash("message", "已刪除");
        return redirect("/admin/about/title/list");
    }
}
