<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layer1 extends Model
{
    public $timestamps = false;
    protected $table = "product_layer1";
    protected $primaryKey = "id";
    protected $fillable = [
        "id",
        "layer1_name"
    ];

    public function getList()
    {
        $list = self::paginate(20);

        return $list;
    }
}
