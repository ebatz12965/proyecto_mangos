<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PedidoController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {return view('home');});

Route::get('/contact', function () {return view('/contact');});

Route::get('/prueba', function () {return view('/layouts/layout2');});

Route::get('/mangos', function () {return view('/mangos');});

Route::get('/process', function () {return view('/process');});

Route::get('/prueba', function () {return view('/pedido/prueba');});

Route::get('/pedido', [PedidoController::class, 'create'])->name('pedido.create');



Route::post('/prueba', [\App\Http\Controllers\PruebaController::class, 'prueba'])->name('prueba');


Route::post('/ruta-para-guardar-pedido', [\App\Http\Controllers\PruebaController::class, 'store']);
Route::get('/ruta-para-mostrar-pedido', [\App\Http\Controllers\PruebaController::class, 'index']);
Route::get('/pruebas/{id}/edit', [\App\Http\Controllers\PruebaController::class, 'edit']);
Route::put('/pruebas/{id}', [\App\Http\Controllers\PruebaController::class, 'update']);
Route::delete('/pruebas/{id}', [\App\Http\Controllers\PruebaController::class, 'destroy']);
Route::get('/pruebas/{id}', [\App\Http\Controllers\PruebaController::class, 'show']);

