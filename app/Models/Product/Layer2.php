<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layer2 extends Model
{
    public $timestamps = false;
    protected $table = "product_layer2";
    protected $primaryKey = "id";
    protected $fillable = [
        "id",
        "layer1_name",
        "layer2_name"
    ];

    public function getList()
    {
        $list = self::get();

        return $list;
    }
}
