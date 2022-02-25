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

// Public / files
Route::get('/first', function () {
    return view('index');
});

// Public / files2
Route::get('/second', function () {
    return view('index2');
});

// Public / files3
Route::get('/third', function () {
    return view('index3');
});

// Public / files4
Route::get('/fourth', function () {
    return view('index4');
});

// Public / files5
Route::get('/fifth', function () {
    return view('index5');
});
