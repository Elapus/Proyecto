<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SimondiceController extends Controller
{    
    public function index(){
        return view ('/Simondice');
    }
                
    public function crearSecuencia(){
        $color = array();
        $arraycol = array(1,2,3,4,5,6);
        $color[]= $arraycol[rand(0,5)];
    return response()->json(['color'=>$color]);

    //=> de js secuencia -> guarda en variable php array
    //array es recorrido por for -> js
    }
    
    // public function procesarSecuencia(){
    // } 
}
 //arreglo vacio
        
        
        // if ($color <= 10) {
            //     for ($color=0; $color<1 ; $color++) { 
                //         print_r($color);
                //     }
                // }else{
                    //     print_r($color);
                    // }