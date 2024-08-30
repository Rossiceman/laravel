<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class S2 extends Model
{
    public $timestamps = false;
    protected $table = "s2";
    protected $primaryKey = "id";
    protected $fillable = [
        "id",
        "s1",
        "s2_name",
        "seq",
        "types",
        "newLine",
        "active",
        "s2_pre",
        "col",
        "len",
        "events"
    ];

    public function getList()
    {
        $list = self::whereNull("active")->orderby("s1", "ASC")->orderby("seq", "ASC")->get();
        return $list;
    }
}
