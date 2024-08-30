<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\TableController;
use Illuminate\Support\Facades\Route;

//get:超連結
//POST:表單，新增資料、修改資料
//Any:所有的方法都可以,不用管是用get或post
//put跟patch:都是用來修改

Route::group(["prefix" => "table"], function(){
    Route::get("add", [TableController::class, "add"]);
    Route::post("insert", [TableController::class, "insert"]);
});
