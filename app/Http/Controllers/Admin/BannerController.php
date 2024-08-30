<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Photo\Upload;
use App\Models\Ap;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BannerController extends Controller
{
    public function list()
    {
        // 暫時設定語系為中文
        // TODO 改為自動取得
        session()->put("lan", "1");

        $list = (new Banner())->getList();

        return view("admin.banner.list", compact("list"));
    }

    public function add()
    {
        $list = (new Ap())->getList();

        return view("admin.banner.add", compact("list"));
    }

    public function insert(Request $req)
    {
        $banner = new Banner();
        // 如果有上傳圖
        if (!empty($req->photo))
        {
            // 取得上傳後的檔名
            $fileName = (new Upload())->uploadPhoto($req->photo, "images/banner", false, "", "", true, 200, 50);
            $banner->photo = $fileName;
        }

        // 應用程式代碼
        $banner->apId = $req->apId;
        $banner->save();

        Session::flash("message", "已新增");
        return redirect("/banner/list");
    }
}
