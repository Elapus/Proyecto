<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FactorialController extends Controller
{
    public function index(){
        return view ('factorial');
    }

}
