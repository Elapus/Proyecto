<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DibujarController extends Controller
{
    public function index(){
        return view ('Dibujar');
    }
}
