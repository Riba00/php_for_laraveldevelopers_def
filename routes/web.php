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



Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/users', function () {
    return view('users');
});

Route::get( '/', function () {
    $task1 = new stdClass();
    $task1->id = 1;
    $task1->title = "Task 1";
    $task1->description = "Bla bla bla";
    $task1->completed = 1;
    $task2 = new stdClass();
    $task2->id = 2;
    $task2->title = "Task 2";
    $task2->description = "bla bla bla";
    $task2->completed = 1;

    $tasques = [
        $task1,
        $task2
    ];
    return view('/tasques',[
        'tasques'=> $tasques
    ]);
});

Route::get('/tasques', function () {
    $task1 = new stdClass();
    $task1->id = 1;
    $task1->title = "Task 1";
    $task1->description = "Bla bla bla";
    $task1->completed = 1;
    $task2 = new stdClass();
    $task2->id = 2;
    $task2->title = "Task 2";
    $task2->description = "bla bla bla";
    $task2->completed = 1;

    $tasques = [
        $task1,
        $task2
    ];
    return view('/tasques',[
        'tasques'=> $tasques
    ]);
});
