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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/canciones', function () {
    $canciones=[];
    $canciones[0]=['nombre'=>'Astronomy', 'artista'=>'Conan Gray'];
    $canciones[1]=['nombre'=>'Style', 'artista'=>'Taylor Swift'];
    $canciones[2]=['nombre'=>'Pop!', 'artista'=>'Adanna Duru'];
    
    //dd($canciones);
    return view('canciones')->with(['canciones' => $canciones]);
});