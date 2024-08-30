<?php

namespace App\Models\About;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutItem extends Model
{
    public $timestamps = false;
    protected $table = "about_item";
    protected $primaryKey = "id";
    protected $fillable = [
        "id",
        "typeId",
        "item_name",
        "content",
        "photo"
    ];

    public function getList($typeId)
    {
        $list = self::where("typeId", $typeId)->get();
        return $list;
    }
}
