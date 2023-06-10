<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/example', function () {
    return view('example', ['nombre'=>'Juan Carlos Polanco']);
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/productos', [App\Http\Controllers\productosController::class, 'index']);
Route::get('/productos/crear', [App\Http\Controllers\productosController::class, 'crear']);
Route::post('/productos/datos-formulario', [App\Http\Controllers\productosController::class, 'dataForm'])->name('productos.formdata');
