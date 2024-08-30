<?php

namespace App\Models\News;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsType extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "news_type";
    protected $primarKey = "id";
    protected $fillable = [
        "id",
        "title",
    ];

    public function delItem($id)
    {
        self::where("id",$id)->delete();
    }
        
    
}
