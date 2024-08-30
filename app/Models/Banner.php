<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Banner extends Model
{
   public $timestamps = false;
   protected $table = "banner";
   protected $primarKey = "id";
   protected $fillable = [
    "id",
    "apId",
    "paths",
    "photo",
    "createTime"
   ];

   public function getList()
   {
       $list = DB::table("banner AS a")
               ->selectRaw("a.*,b.ap_name, b.url")
               ->join("ap AS b", "a.apId", "b.id")
               ->where("b.len", session()->get("lan"))
               ->get();

               return $list;
   }
}
