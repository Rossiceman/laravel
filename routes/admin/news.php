<?php

use App\Http\Controllers\Admin\News\NewsController;
use App\Http\Controllers\Admin\News\NewsTypeController;
use Illuminate\Support\Facades\Route;

//get:超連結
//POST:表單，新增資料、修改資料
//Any:所有的方法都可以,不用管是用get或post
//put跟patch:都是用來修改

//"middleware" => "manager載入符合條件才進入後台
//前面先打frefix叫前置詞，後面打admin/new 下面所有的list,add..就不用再加上admin/news
Route::group(["middleware" => "manager", "prefix" => "admin/news"], function () {
    Route::get("list", [NewsController::class, "list"]);
    Route::get("add", [NewsController::class, "add"]);
    Route::post("insert", [NewsController::class, "insert"]);
    Route::get("edit/{id}", [NewsController::class, "edit"]);
    Route::post("update", [NewsController::class, "update"]);
    Route::post("delete", [NewsController::class, "delete"]);
    Route::get("export", [NewsController::class, "export"]);
    Route::get("word/{id}", [NewsController::class, "word"]);
    Route::get("pdf/{id}", [NewsController::class, "pdf"]);

    Route::group(["prefix" => "type"], function () {
        Route::get("list", [NewsTypeController::class, "list"]);
        Route::get("add", [NewsTypeController::class, "add"]);
        Route::post("insert", [NewsTypeController::class, "insert"]);
        Route::get("edit/{id}", [NewsTypeController::class, "edit"]);
        Route::post("update", [NewsTypeController::class, "update"]);
        Route::post("delete", [NewsTypeController::class, "delete"]);
    });
});