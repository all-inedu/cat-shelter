<?php

use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
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
    Route::get('admin/dashboard', [AdminDashboardController::class, 'index'])
                ->name('admin.dashboard');

    Route::get('admin/blog', function () {
        return view('admin.blog');
    });

    Route::get('admin/blog/new', function () {
        return view('admin.blog-new');
    });

    Route::get('admin/blog/{id}', function () {
        return view('admin.blog-view');
    });

    Route::get('admin/blog/{id}/edit', function () {
        return view('admin.blog-edit');
    });


    Route::get('admin/cat', function () {
        return view('admin.cat');
    });

    Route::get('admin/cat/{id}', function () {
        return view('admin.cat-view');
    });

    Route::get('admin/shelter', function () {
        return view('admin.shelter');
    });

    Route::get('admin/shelter/{id}', function () {
        return view('admin.shelter-view');
    });

    Route::get('admin/adopter', function () {
        return view('admin.adopter');
    });

    Route::post('admin/logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('admin.logout');
});