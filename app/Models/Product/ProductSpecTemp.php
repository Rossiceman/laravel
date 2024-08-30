<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSpecTemp extends Model
{
    public $timestamps = false;
    protected $table = "Product_spec_temp";
    protected $primaryKey = "id";
    protected $fillable = [
        "id",
        "layer1",
        "seq",
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
