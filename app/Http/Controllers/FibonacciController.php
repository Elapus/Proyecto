<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FibonacciController extends Controller
{
    public function index(){
        return view ('fibonacci');
    }
    public function fibocre(Request $request){
        $a = 0;
        $b = 1;
        $c = 0;
        $i = 1;
        $fibonacci =$request->fibonacci;
        $resultado = '';
        while ($i <= $fibonacci){
            $resultado .= $c.",";
            $c = $a+$b;
            $a = $b;
            $b = $c;
            $i++;
        }
        return view ('fibonacci', ['fibonacci'=>$resultado]);
    }
}
