<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\About\AboutItem;
use App\Models\About\AboutTitle;
use Illuminate\Http\Request;

class FrontAboutController extends Controller
{
    public function list()
    {
        $title = AboutTitle::get();
        $about = (new AboutItem())->getList(2);
        $advance = (new AboutItem())->getList(3);


        return view("front.about.list",compact("title","about","advance"));
    }
}
