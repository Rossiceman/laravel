<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ap extends Model
{
    public $timestamps = false;
    protected $table = "ap";
    protected $primarKey = "id";
    protected $fillable = [
     "id",
     "len",
     "ap_name",
     "url",
     "drops",
     "seq",
     "active"
    ];

    public function getList()
    {
        $list = self::where("len", session()->get("lan"))
        ->where("active","Y")->orderby("seq", "ASC")->get();
        
        return $list;
    }
}
