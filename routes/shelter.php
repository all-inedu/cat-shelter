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

Route::get('/dashboard', function () {
    return view('shelter.index');
});

Route::get('/cat', function () {
    return view('shelter.cat');
});

Route::get('/cat/new', function () {
    return view('shelter.cat-new');
});

Route::get('/cat/{id}', function () {
    return view('shelter.cat-view');
});