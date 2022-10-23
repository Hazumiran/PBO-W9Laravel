<?php

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

Route::resource('users', \App\Http\Controllers\UserController::class)
    ->middleware('auth');

Route::get('/get', [\App\Http\Controllers\UserController::class, 'ambil']);

Route::get('/home', function () {
    return view('home');
})->name('home')->middleware('auth');

// Route::get('/buku', [\App\Http\Controllers\BukuController::class, 'index']);
Route::resource('buku', \App\Http\Controllers\BukuController::class)
    ->middleware('auth');
