<?php

use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\coche_Controller;
use App\Http\Controllers\ReparacionesController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\MecanicosController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\VentasController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;

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

Route::middleware('web')->group(function () {

    if (!auth()->check()) {
        Route::get('/', [LoginController::class, 'getLogin']);
    }

    Route::get('login', [LoginController::class, 'getLogin'])->name('login');
    Route::post('login', [LoginController::class, 'Login']);

    Route::get('register', [UsuarioController::class, 'create']);
    Route::post('register', [RegisterController::class, 'store']);


});


Route::middleware('auth')->group(function () {

    //Route::post('logout', [LoginController::class, 'Logout']);
    Route::post('logout', function (Request $request) {
        Auth::logout();
        return view('Auth.login');
    });


    Route::resource('Coche', coche_Controller::class);
    Route::resource('Reparaciones', ReparacionesController::class);
    Route::resource('roles', RolesController::class);
    Route::resource('usuarios', UsuarioController::class);
    Route::resource('mecanicos', MecanicosController::class);
    Route::resource('clientes', ClienteController::class);
    Route::resource('ventas', VentasController::class);

});

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
