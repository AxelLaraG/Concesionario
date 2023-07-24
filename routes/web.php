<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\coche_Controller;
use App\Http\Controllers\Reparaciones_Controller;

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

Route::get('/', function () {
    return view('welcome');
});
