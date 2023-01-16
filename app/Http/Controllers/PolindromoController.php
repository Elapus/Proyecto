<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PolindromoController extends Controller
{
    public function index(){
        return view('polindromo');
    }
    public function polcre(Request $request){
        $palabra = $request->palindromo;
        $polindroma = strrev($palabra);
        if ($palabra == $polindroma)
                $respuesta="es palindroma";
        else{
                $respuesta="no es palindroma";
        }                
        return view('polindromo', ['respuesta'=>$respuesta], ['palabra'=>$palabra]);
    }
    
}
