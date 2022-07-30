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

Route::get('/number1', function () {
    return view('number1');
});

Route::get('/number2', function () {
    return view('number2');
});

Route::get('/number3', function () {
    return view('number3');
});

Route::get('/number4', function () {
    return view('number4');
});

Route::get('/number5', function () {
    return view('number5');
});

Route::get('/number6', function () {
    return view('number6');
});

Route::get('/number7', function () {
    return view('number7');
});

Route::get('/number8', function () {
    return view('number8');
});

Route::get('/number9', function () {
    return view('number9');
});

Route::get('/number10', function () {
    return view('number10');
});
