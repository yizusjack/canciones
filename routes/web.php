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

/*Route::get('/canciones', function () {
    $canciones=[];
    $canciones[0]=['nombre'=>'Astronomy', 'artista'=>'Conan Gray'];
    $canciones[1]=['nombre'=>'Style', 'artista'=>'Taylor Swift'];
    $canciones[2]=['nombre'=>'Pop!', 'artista'=>'Adanna Duru'];
    
    //dd($canciones);
    //return view('canciones')->with(['canciones' => $canciones]);
    return view('canciones', compact('canciones'));
});

Route::get('/canciones/{id}', function ($id) {
    $canciones=[];
    $canciones[0]=['nombre'=>'Astronomy', 'artista'=>'Conan Gray'];
    $canciones[1]=['nombre'=>'Style', 'artista'=>'Taylor Swift'];
    $canciones[2]=['nombre'=>'Pop!', 'artista'=>'Adanna Duru'];

    $cancion=$canciones[$id];

    return view('detalleCancion', compact('cancion'));
});*/

Route::get('/canciones/{id?}', function ($id = null) {
    $canciones=[];
    $canciones[0]=['nombre'=>'Astronomy', 'artista'=>'Conan Gray'];
    $canciones[1]=['nombre'=>'Style', 'artista'=>'Taylor Swift'];
    $canciones[2]=['nombre'=>'Pop!', 'artista'=>'Adanna Duru'];
    
    if(!is_null($id)){
        $cancion=$canciones[$id];
    } else{
        $cancion = null;
    }

    return view('canciones', compact('canciones', 'cancion'));
});