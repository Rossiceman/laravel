<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = false;
    protected $table = "product";
    protected $primaryKey = "id";
    protected $fillable = [
        "id",
        "layer1",
        "layer2",
        "layer3",
        "itemName",
        "title",
        "home",
        "content",
        "createTime"
    ];

    public function getList()
    {
        $list = self::get();

        return $list;
    }
}
