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

require __DIR__ . '/auth.php';
require __DIR__ . '/shelter.php';
require __DIR__ . '/admin.php';

Route::get('/', function () {
    return view('home.index');
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