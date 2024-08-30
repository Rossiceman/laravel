<?php

namespace App\Http\Controllers\Admin\News;

use App\Http\Controllers\Controller;
use App\Models\News\NewsType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class NewsTypeController extends Controller
{
     /**
     * 最新消息類別
     * 
     * @param String userId
     * @param String pwd
     * @return xxx
     */
    public function list()
    {
        $list = NewsType::get();
        return view("admin.news.type.list",compact("list"));
    }    

    public function add()
    {
        return view("admin.news.type.add");
    }

    public function insert(Request $req)
    {
        $type = new NewsType();
        $type->title = $req->title;
        $type->save();

        Session::flash("message","已新增");
        return redirect("/admin/news/type/list");
    }

    public function edit(Request $req)
    {
        $type = NewsType::find($req->id);
        return view("admin.news.type.edit",compact("type"));
    }

    public function update(Request $req)
    {
        $type = NewsType::find($req->id);
        $type->title = $req->title;
        $type->update();

        Session::flash("message","已修改");
        return redirect("/admin/news/type/list");
    }
    
    public function delete(Request $req)
    {
        (new NewsType())->delItem($req->id);

        Session::flash("message","已刪除");
        return redirect("/admin/news/type/list");
    }
    
}
