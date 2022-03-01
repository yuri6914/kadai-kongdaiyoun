<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Circle extends Controller
{
    function CircleA(Request $request){       
        $num = $request->input('number'); 
        $result = 3.14 * ($num*$num);
        return $result;

    }
}
