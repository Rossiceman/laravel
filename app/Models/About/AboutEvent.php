<?php

namespace App\Models\About;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutEvent extends Model
{
    public $timestamps = false;
    protected $table = "about_event";
    protected $primaryKey = "id";
    protected $fillable = [
        "id",
        "dates",
        "content",
        "createTime"
    ];
}
