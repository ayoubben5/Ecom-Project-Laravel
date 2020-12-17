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

Route::get('/login', function () {
    return view('login');
});

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});

Route::post('/login', [App\Http\Controllers\UserController::class,'login']);
Route::get('/', [App\Http\Controllers\ProductController::class,'index']);
Route::get('/detail/{id}', [App\Http\Controllers\ProductController::class,'detail']);
Route::get('/search', [App\Http\Controllers\ProductController::class,'search']);
Route::post('/add_to_cart', [App\Http\Controllers\ProductController::class,'addToCart']);