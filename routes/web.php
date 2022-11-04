<?php

use App\Http\Controllers\TascaController;
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



Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/users', function () {
    return view('users');
});

Route::get( '/', [TascaController::class,'index']);

Route::get('/tasques', [TascaController::class,'index']);
