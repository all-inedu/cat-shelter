<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Auth;

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

Route::middleware('guest')->group(function () {
    Route::get('admin', [AuthenticatedSessionController::class, 'create'])
        ->name('admin.login');

    Route::post('admin', [AuthenticatedSessionController::class, 'store']);
});

Route::middleware('auth:admin')->group(function () {
    Route::get('admin/dashboard', function () {
        return view('admin.index');
    });

    Route::get('admin/blog', function () {
        return view('admin.blog');
    });

    Route::get('admin/cat', function () {
        return view('admin.cat');
    });

    Route::get('admin/shelter', function () {
        return view('admin.shelter');
    });

    Route::get('admin/adopter', function () {
        return view('admin.adopter');
    });

    Route::post('admin/logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('admin.logout');
});