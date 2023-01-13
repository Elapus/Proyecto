<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FactorialController extends Controller
{
    public function index(){
        return view ('factorial');
    }
    public function factcre(Request $request){
        $valor=$request->factorial;
        $resultado=$this->final($valor);
        return view ('/factorial',['valor'=>$valor],['resultado'=>$resultado]);
    }

    public function final($valor){
        if ($valor>0) {
           $resultado = $valor *$this->final($valor -1);
        }else{
            $resultado =1;
        }
        return $resultado;
    }

}
