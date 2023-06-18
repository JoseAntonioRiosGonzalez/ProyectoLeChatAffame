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
    return view('inicio');
});

Route::get('/menu', function () {
    return view('menu');
});

Route::get('/calidad', function () {
    return view('calidad');
});

Route::get('/resenas', function () {
    return view('resenas');
});

Route::get('/reservas', function () {
    return view('reservas');
});

Route::get('/plantilla', function () {
    return view('plantilla');
});