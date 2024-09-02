<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index(){
        

        return view('home',[
            "title" => 'home'
        ]);
    }
    public function plus(Request $request){

        $a = $request->param;
        $b = 3;
        $total = $a + $b;
        $peee = $a * 9;
        if(isset($a)){

        }
        return view('plus',[
            "title" => 'home',
            "total" => $total,
            "hasil"=> $peee,
        ]);
    }
}
