<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Cube extends Controller
{
    public function cube(Request $request){
        $num = $request->input('number'); 
        $result = pow($num,3);
        return $result;
    }
}
