<?php

namespace App\Http\Controllers;

use App\Models\S1;
use App\Models\S2;
use App\Models\Scontent;
use Illuminate\Http\Request;

class TableController extends Controller
{
    public function add()
    {
        $s1 = (new S1())->getList();
        $s2 = (new S2())->getList();

        return view("admin.table.add", compact("s1", "s2"));
    }

    public function insert()
    {
        $input = request()->all();

        $s1 = (new S1())->getList();
        $s2 = (new S2())->getList();
        $y1 = array();

        foreach($s1 as $data1)
        {
            foreach($s2 as $data2)
            {
                if ($data2->s1 != $data1->id) continue;
                
                if ($data2->types == "R")
                {
                    if (!empty($input["s" . $data1->id]))
                    {
                        if (in_array($data1->id, $y1)) continue;

                        $cont = new Scontent();
                        $cont->s1 = $data1->id;
                        $cont->s2 = $input["s" . $data1->id];
                        $cont->userId = session()->get("manager");
                        $cont->save();

                        array_push($y1, $data1->id);
                    }
                }

                if ($data2->types == "C")
                {
                    if (!empty($input["s" . $data2->id]))
                    {
                        echo($input["s" . $data2->id]."<br/>");
                    }
                }

                if ($data2->types == "X")
                {
                    if (!empty($input["s" . $data2->id]))
                    {
                        echo($input["s" . $data2->id]."<br/>");
                    }
                }
            }
        }
    }
}
