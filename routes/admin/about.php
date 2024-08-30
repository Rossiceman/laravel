<?php

use App\Http\Controllers\Admin\About\AboutController;
use App\Http\Controllers\Admin\About\AboutEventController;
use App\Http\Controllers\Admin\About\AboutTitleController;
use Illuminate\Support\Facades\Route;

//get:超連結
//POST:表單，新增資料、修改資料
//Any:所有的方法都可以,不用管是用get或post
//put跟patch:都是用來修改

//"middleware" => "manager載入符合條件才進入後台
//前面先打frefix叫前置詞，後面打admin/new 下面所有的list,add..就不用再加上admin/news
Route::group(["middleware" => "manager", "prefix" => "admin/about"], function(){
    Route::group(["prefix" => "title"], function(){
        Route::get("list", [AboutTitleController::class, "list"]);
        Route::get("add", [AboutTitleController::class, "add"]);
        Route::post("insert", [AboutTitleController::class, "insert"]);
        Route::get("edit/{id}", [AboutTitleController::class, "edit"]);
        Route::post("update", [AboutTitleController::class, "update"]);
        Route::post("delete", [AboutTitleController::class, "delete"]);
    });
    Route::group(["prefix" => "about"], function(){
        Route::get("list/{typeId}", [AboutController::class, "list"]);
        Route::get("add/{typeId}", [AboutController::class, "add"]);
        Route::post("insert", [AboutController::class, "insert"]);
        Route::get("edit/{typeId}/{id}", [AboutController::class, "edit"]);
        Route::post("update", [AboutController::class, "update"]);
        Route::post("delete", [AboutController::class, "delete"]);
        Route::post("saveImg", [AboutController::class, "saveImg"]);
    });

    Route::group(["prefix" => "event"], function(){
        Route::get("list", [AboutEventController::class, "list"]);
        Route::get("add", [AboutEventController::class, "add"]);
        Route::post("insert", [AboutEventController::class, "insert"]);
        Route::get("edit/{id}", [AboutEventController::class, "edit"]);
        Route::post("update", [AboutEventController::class, "update"]);
        Route::post("delete", [AboutEventController::class, "delete"]);
    });
});