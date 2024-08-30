<?php

namespace App\Models\About;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AboutTitle extends Model
{
    public $timestamps = false;
    protected $table = "about_title";
    protected $primaryKey = "id";
    protected $fillable = [
        "id",
        "lan",
        "typeId",
        "title",
        "content"
    ];

    public function getList()
    {
        $list = DB::table("about_title AS a")
        ->selectRaw("a.*, b.title AS typeName")
        ->join("about_type AS b", "a.typeId", "b.id")
        ->get();

        return $list;
    }

}
