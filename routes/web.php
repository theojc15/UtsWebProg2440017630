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

Route::get('/', [\App\Http\Controllers\BookController::class, 'home']);
Route::get('/detail/{id}', [\App\Http\Controllers\BookController::class, 'show']);
Route::get('/category/{id}', [\App\Http\Controllers\BookController::class, 'category']);
Route::get('/publisher', [\App\Http\Controllers\BookController::class, 'publisher']);
Route::get('/contact', [\App\Http\Controllers\BookController::class, 'contact']);
