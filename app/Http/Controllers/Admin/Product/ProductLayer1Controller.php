<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Product\Layer1;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductLayer1Controller extends Controller
{
    public function list()
    {
        $list = (new Layer1())->getList();

        return view("admin.product.layer1.list", compact("list"));
    }

    public function add()
    {
        return view("admin.product.layer1.add");
    }

    public function insert(Request $req)
    {
        $store = new Layer1();
        $store->layer1_name = $req->layer1_name;
        $store->save();

        Session::flash("message", "已新增");
        return redirect("/admin/product/layer1/list");
    }

    public function edit(Request $req)
    {
        $layer1 = Layer1::find($req->id);
        return view("admin.product.layer1.edit", compact("layer1"));
    }

    public function update(Request $req)
    {
        $layer1 = Layer1::find($req->id);
        $layer1->layer1_name = $req->layer1_name;
        $layer1->update();

        Session::flash("message", "已修改");
        return redirect("/admin/product/layer1/list");
    }

    public function delete(Request $req)
    {
        Layer1::find($req->id)->delete();
    }
}
