<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\News\News;
use App\Models\News\NewsType;
use Illuminate\Http\Request;

class FrontNewsController extends Controller
{
    public function list(Request $req)
    {
        // 取得所有消息類別
        $types = NewsType::get();
        // 取得所有年份
        $year = (new News())->getYearList();

        return view("front.news.list", compact("types", "year"));
    }

    public function getNews(Request $req)
    {
        // 依查詢條件取得最新消息
        $list = (new News())->getDataList($req->year, $req->typeId);

        return view("front.news.news", compact("list"));
    }

    public function detail(Request $req)
    {
        $news = News::find($req->id);

        return view("front.news.detail", compact("news"));
    }
}
