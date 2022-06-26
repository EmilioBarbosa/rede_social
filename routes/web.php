<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

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
    return redirect('/login');
});

Route::get('/CriarPerfil', [App\Http\Controllers\ProfileController::class, 'criarPerfil']);

Route::get('/editarPerfil', [App\Http\Controllers\ProfileController::class, 'editarPerfil']);

Route::get('/visualizarPerfil', [App\Http\Controllers\ProfileController::class, 'visualizarPerfil']);

Route::post('/salvarEdicaoPerfil', [App\Http\Controllers\ProfileController::class, 'salvarEdicaoPerfil']);

Route::post('/salvarCriacaoPerfil', [App\Http\Controllers\ProfileController::class, 'salvarPerfil']);

Route::get('/visualizarPerfil', [App\Http\Controllers\ProfileController::class, 'visualizarPerfil']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
