<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Product\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class StoreController extends Controller
{
    public function list()
    {
        $list = Store::get();

        return view("admin.product.store.list", compact("list"));
    }

    public function add()
    {
        return view("admin.product.store.add");
    }

    public function insert(Request $req)
    {
        $store = new Store();
        $store->title = $req->title;
        $store->save();

        Session::flash("message", "已新增");
        return redirect("/admin/product/store/list");
    }

    public function edit(Request $req)
    {
        $store = Store::find($req->id);
        return view("admin.product.store.edit", compact("store"));
    }

    public function update(Request $req)
    {
        $store = Store::find($req->id);
        $store->title = $req->title;
        $store->update();

        Session::flash("message", "已修改");
        return redirect("/admin/product/store/list");
    }

    public function delete(Request $req)
    {
        Store::find($req->id)->delete();
    }
}
