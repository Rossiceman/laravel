<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductPhoto extends Model
{
    public $timestamps = false;
    protected $table = "product_photo";
    protected $primaryKey = "id";
    protected $fillable = [
        "id",
        "productId",
        "photo",
        "active",
        "createTime"
    ];

    public function getList()
    {
        $list = self::get();

        return $list;
    }
}
