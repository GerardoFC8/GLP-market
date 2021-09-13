<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\ServiciosController;
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
    return view('index');
});
Route::resource('/', ProductosController::class);

Route::get('/contacto', function () {
    return view('layout.contacto');
});



Route::get('/productos', function () {
    return view('productos');
});
Route::resource('/productos', ServiciosController::class);


Route::get('/detalles', function () {
    return view('productos_detalle');
});
Route::resource('/detalles', ServiciosController::class);