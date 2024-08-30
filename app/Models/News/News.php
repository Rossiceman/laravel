<?php

namespace App\Models\News;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class News extends Model
{
    public $timestamps = false;
    protected $table = "news";
    protected $primaryKey = "id";
    protected $fillable = [
        "id",
        // 類別代碼
        "typeId",
        "title", // 標題
        "subTitle", // 次標題
        "dates", // 日期
        "content", // 內容
        "photo", // 圖檔
        "createTime" // 建立時間
    ];

    public function getList()
    {
        // select a.*, b.title as types FROM news a INNER JOIN news_type b ON a.typeId = b.id limit 10
        $list = DB::table("news AS a")
            ->selectRaw("a.*, b.title as types")
            ->join("news_type AS b", "a.typeId", "b.id")
            ->paginate(10);

        return $list;
    }

    public function getYearList()
    {
        $list = self::selectRaw("YEAR(dates) AS year")->distinct()->get();

        return $list;
    }

    public function getDataList($year, $typeId)
    {
        // where 1 = 1 一定成立
        // 在尚未選年份或類別前, where 1 = 1 即表示全部
        $sql = self::whereRaw("1=1");
        // $sql = DB::table("news");

        // 如果有選年份
        if (!empty($year))
        {
            // 查詢條件加上年份 whereYear =  select * from news where YEAR(dates) = 年
            $sql->whereYear("dates", $year);
        }

        // 如果有選類別
        if(!empty($typeId))
        {
            // 查詢條件加上類別
            $sql->where("typeId", $typeId);
        }

        // 將查詢條件依日期新舊排序後,設定給list
        $list = $sql->orderby("dates", "DESC")->get();

        // 回傳查詢結果
        return $list;
    }
}
