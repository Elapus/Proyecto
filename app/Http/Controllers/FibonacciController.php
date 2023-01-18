<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FibonacciController extends Controller
{
    public function index(){
        return view ('fibonacci');
    }
    public function fibocre(Request $request){
        $fibonacci=$request->fibonacci;
        $resultado=$this->proceso($fibonacci);
    
        return view ('fibonacci', ['fibonacci'=>$resultado]);
    }
    public function proceso($fibonacci){
      for ($i=0; $i < $fibonacci ; $i++) { 
        $resultado=$this->recur($i).",";
        echo $resultado;
      }
    }
    public function recur($fibonacci){($fibonacci == 0 or $fibonacci == 1) ? $resultado=$fibonacci: $resultado=$this->recur($fibonacci -1)+$this->recur($fibonacci-2);
        return $resultado;
    }
}
    
//$a = 0;
//$b = 1;
//$c = 0;
//$i = 1;
//while ($i <= $fibonacci){
    //    $resultado .= $c.",";
    //    $c = $a+$b;
    //    $a = $b;
    //    $b = $c;
    //    $i++;
    //}