<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    public $timestamps = false;
    protected $table = "Product_store";
    protected $primaryKey = "id";
    protected $fillable = [
        "id",
        "title"
    ];
}
