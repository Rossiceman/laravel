<?php

namespace App\Exports;

use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExportNews implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $list = DB::table("news AS a")
        ->selectRaw("b.title as types, a.title, a.subTitle, a.dates, a.content")
        ->join("news_type AS b", "a.typeId", "b.id")
        ->get();

        return $list;
    }

    public function headings(): array{
        return[
            "類別",
            "標題",
            "大標題",
            "日期",
            "內容"
        ];
    }
}
