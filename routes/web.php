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

require __DIR__.'/auth.php';
require __DIR__.'/shelter.php';
require __DIR__.'/admin.php';

// Route::get('/login', function () {
//     return view('home.auth.login');
// });

// Route::get('/register', function () {
//     return view('home.auth.register');
// });

Route::get('/cats', function () {
    return view('home.cats');
});

Route::get('/blogs', function () {
    return view('home.blogs');
});

Route::get('/blogs/{id}', function ($id) {
    return view('home.blogs-detail', ['id' => $id]);
});
