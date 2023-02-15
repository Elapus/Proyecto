<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GranjaController extends Controller
{
    public function index(){
        return view('/Granja');
    }
}
