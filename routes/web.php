<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/mahasiswa', App\Http\Controllers\mahasiswaController::class);
Route::resource('/dosen', App\Http\Controllers\dosenController::class);
Route::resource('/matkul', App\Http\Controllers\matkulController::class);
Route::resource('/prodi', App\Http\Controllers\prodiController::class);
