<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layer3 extends Model
{
    public $timestamps = false;
    protected $table = "product_layer3";
    protected $primaryKey = "id";
    protected $fillable = [
        "id",
        "layer2",
        "layer3_name"
    ];

    public function getList()
    {
        $list = self::get();

        return $list;
    }
}
