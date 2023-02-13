<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/','InicioController@index')->name('inicio');

Route::get('/fiboc','FibonacciController@index')->name('fibonacci');

Route::get('/fact','FactorialController@index')->name('factorial');

Route::get('/poli','PolindromoController@index')->name('polindromo');

Route::get('/simon','SimondiceController@index')->name('simondice');

Route::get('/dibujar', 'DibujarController@index')->name('dibujar');
