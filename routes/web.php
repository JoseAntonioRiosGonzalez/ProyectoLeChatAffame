<?php

use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ReseñaController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\MenuController;
use App\Models\Usuario;
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

// Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');


Route::post('/inicio', [UsuarioController::class, 'inicio'])->name("inicio");
Route::get('/inicio', [UsuarioController::class, 'inicio'])->name("inicio");
Route::post('/registro', [UsuarioController::class, 'registrar'])->name("registrar");

Route::get('/plantilla', [UsuarioController::class, 'plantilla'])->name("plantilla");

Route::get('/reseñas',  [ReseñaController::class, 'reseñas'])->name('reseñas');
Route::post('/reseñas', [ReseñaController::class, 'guardarReseña'])->name('reseñaGuardar');

Route::get('/reservas',  [ReservaController::class, 'reservas'])->name('reservas');
Route::post('/reservas',  [ReservaController::class, 'comprobarMesas'])->name('comprobarMesas');
Route::post('/reservas/reservar',  [ReservaController::class, 'insertarReserva'])->name('insertarReserva');
Route::post('/reservas/promocion',  [ReservaController::class, 'promocion'])->name('promocion');
Route::get('/reservas/insertarPromocion',  [ReservaController::class, 'insertarPromocion'])->name('insertarPromocion');
Route::post('/reservas/insertarPromocion',  [ReservaController::class, 'insertarPromo'])->name('insertarPromo');
Route::get('/reservas/insertarPromocion/borrar/{idPro}',  [ReservaController::class, 'borrarPromo'])->name('borrarPromo');

Route::get('/menu', [UsuarioController::class, 'menu'])->name("menu");
Route::get('/calidad', [UsuarioController::class, 'calidad'])->name("calidad");
Route::get('/calidad', [UsuarioController::class, 'calidad'])->name("calidad");



Route::get('/logout', function(){
    return view("welcome");
})->name('logout');


Route::get('/registro', function () {
    return view('registro');
})->name('registro');


Route::post('/logout', 'AuthController@logout')->name('logout');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
