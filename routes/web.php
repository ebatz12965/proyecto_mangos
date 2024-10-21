<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\PruebaController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\UsuarioController;

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

Route::get('/login', [AuthController::class, 'create'])->name('login');



    Route::get('/ruta-mostrar-pedidos', [PedidoController::class, 'index'])->name('pedidos');
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


// Ruta para mostrar la vista
    Route::get('/usuarios', [UsuarioController::class, 'create'])->name('usuario.create');

// Ruta para crear un nuevo usuario
    Route::post('/usuarios', [UsuarioController::class, 'store'])->name('usuario.store');

// Ruta para obtener la lista de usuarios en formato JSON
    Route::get('/api/usuarios', [UsuarioController::class, 'index'])->name('usuario.index');

Route::view('/prueba-api', 'prueba-api')->name('prueba-api');


Route::view('/register', 'auth.register')->name('register.view');
Route::view('/login', 'login')->name('login.view');

Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login');
