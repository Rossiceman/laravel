<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class S1 extends Model
{
    public $timestamps = false;
    protected $table = "s1";
    protected $primaryKey = "id";
    protected $fillable = [
        "id",
        "s1_name",
        "seq",
        "active"
    ];

    public function getList()
    {
        $list = self::whereNull("active")->orderby("seq", "ASC")->get();
        return $list;
    }
}
