<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSpec extends Model
{
    public $timestamps = false;
    protected $table = "Product_spec";
    protected $primaryKey = "id";
    protected $fillable = [
        "id",
        "productId",
        "spec",
        "content",
        "createTime"
    ];

    public function getList()
    {
        $list = self::get();

        return $list;
    }
}
