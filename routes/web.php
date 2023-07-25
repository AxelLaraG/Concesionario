<?php

use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\coche_Controller;
use App\Http\Controllers\Reparaciones_Controller;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\MecanicosController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\VentasController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::resource('Coche', coche_Controller::class);
Route::resource('Reparaciones', Reparaciones_Controller::class);
Route::resource('roles', RolesController::class);
Route::resource('usuarios', UsuarioController::class);
Route::resource('mecanicos', MecanicosController::class);
Route::resource('clientes', ClienteController::class);
Route::resource('ventas', VentasController::class);

Route::get('/', function () {
    return view('welcome');
});
