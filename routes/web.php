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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('can:home')->name('home');

Route::get('/vista1', [App\Http\Controllers\HomeController::class, 'vista1'])->middleware('can:vista1')->name('vista1');
Route::get('/vista2', [App\Http\Controllers\HomeController::class, 'vista2'])->middleware('can:vista2')->name('vista2');


