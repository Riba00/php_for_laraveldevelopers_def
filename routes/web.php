<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\TascaController;
use App\Http\Controllers\UserController;
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



Route::get('/contact', [PagesController::class,'contact']);

Route::get('/about',[PagesController::class,'about']);

Route::get('/users', [UserController::class,'index']);

Route::get( '/', [TascaController::class,'index']);

Route::get('/tasques', [TascaController::class,'index']);
