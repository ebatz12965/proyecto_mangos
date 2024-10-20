<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\PruebaController;
use App\Http\Controllers\ContactoController;

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

Route::get('/ruta-mostrar-pedidos', [PedidoController::class, 'index']);
Route::get('/pedido', [PedidoController::class, 'create'])->name('pedido.create');
Route::post('/pedido', [PedidoController::class, 'store'])->name('pedido.store');


Route::post('/prueba', [\App\Http\Controllers\PruebaController::class, 'prueba'])->name('prueba');


Route::post('/ruta-para-guardar-pedido', [PruebaController::class, 'store']);
Route::get('/ruta-para-mostrar-pedido', [PruebaController::class, 'index']);
Route::get('/pruebas/{id}/edit', [PruebaController::class, 'edit']);
Route::put('/pruebas/{id}', [PruebaController::class, 'update']);
Route::delete('/pruebas/{id}', [PruebaController::class, 'destroy']);
Route::get('/pruebas/{id}', [PruebaController::class, 'show']);

Route::post('/guardar-contacto', [ContactoController::class, 'store']);
