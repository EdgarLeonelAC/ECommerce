<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
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

Route::view('/login', 'login')->name('login');
Route::view('/registro', 'register')->name('registro');
Route::view('/info', 'info')->name('info');
Route::view('/home', 'home')->middleware('auth')->name('home');

Route::post('/validar-registro', [LoginController::class, 'register'])->name('validar-registro');

Route::post('/inicia-sesion', [LoginController::class, 'login'])->name('inicia-sesion');

Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::resource('products', ProductController::class)->middleware('auth');