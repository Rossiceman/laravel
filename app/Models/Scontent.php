<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scontent extends Model
{
    public $timestamps = false;
   protected $table ="s_content";
   protected $primaryKey ="id";
   protected $fillable = [
    "id",
    "s1",
    "s2",
    "content",
    "userId",
    "createTime"
   ];
}
