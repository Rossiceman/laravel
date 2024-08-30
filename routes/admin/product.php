<?php

use App\Http\Controllers\Admin\Product\ProductLayer1Controller;
use App\Http\Controllers\Admin\Product\StoreController;
use Illuminate\Support\Facades\Route;

Route::group(["middleware" => "manager", "prefix" => "admin/product"], function(){
    /*
    Route::get("list", [NewsController::class, "list"]);
    Route::get("add", [NewsController::class, "add"]);
    Route::post("insert", [NewsController::class, "insert"]);
    Route::get("edit/{id}", [NewsController::class, "edit"]);
    Route::post("update", [NewsController::class, "update"]);
    Route::post("delete", [NewsController::class, "delete"]);
    Route::get("export", [NewsController::class, "export"]);
    Route::get("word/{id}", [NewsController::class, "word"]);
    */

    Route::group(["prefix" => "store"], function(){
        Route::get("list", [StoreController::class, "list"]);
        Route::get("add", [StoreController::class, "add"]);
        Route::post("insert", [StoreController::class, "insert"]);
        Route::get("edit/{id}", [StoreController::class, "edit"]);
        Route::post("update", [StoreController::class, "update"]);
        Route::post("delete", [StoreController::class, "delete"]);
    });

    Route::group(["prefix" => "layer1"], function(){
        Route::get("list", [ProductLayer1Controller::class, "list"]);
        Route::get("add", [ProductLayer1Controller::class, "add"]);
        Route::post("insert", [ProductLayer1Controller::class, "insert"]);
        Route::get("edit/{id}", [ProductLayer1Controller::class, "edit"]);
        Route::post("update", [ProductLayer1Controller::class, "update"]);
        Route::post("delete", [ProductLayer1Controller::class, "delete"]);
    });
});