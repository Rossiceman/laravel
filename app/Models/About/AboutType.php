<?php

namespace App\Models\About;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AboutType extends Model
{
    public $timestamps = false;
    protected $table = "about_type";
    protected $primaryKey = "id";
    protected $fillable = [
        "id",
        "title",
        "items"
        
    ];

    public function getList()
    {
        $list = DB::table("about_type")
        ->selectRaw("*")
        ->whereNotIn("id",function($query){
            $query->select("typeId")->from("about_title");
        })->get();
        return $list;
    }
}
