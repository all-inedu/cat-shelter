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
    return view('home.index');
});

Route::get('/login', function () {
    return view('home.auth.login');
});

Route::get('/forgot', function () {
    return view('home.auth.forgot');
});

Route::get('/reset', function () {
    return view('home.auth.reset');
});

Route::get('/register', function () {
    return view('home.auth.register');
});

Route::get('/cats', function () {
    return view('home.cats');
});

Route::get('/screening/{id}', function ($id) {
    return view('home.screening', ['id' => $id]);
});

Route::get('/blogs', function () {
    return view('home.blogs');
});

Route::get('/blogs/{id}', function ($id) {
    return view('home.blogs-detail', ['id' => $id]);
});