<?php

use App\Http\Controllers\Admin\BlogController;
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

    Route::get('blog', [BlogController::class, 'index'])->name('admin.blog');
    Route::post('blog', [BlogController::class, 'store'])->name('admin.blog.store');

    Route::get('admin/blog/new', [BlogController::class, 'new']);

    Route::get('admin/blog/{id}', [BlogController::class, 'detail']);

    Route::get('comment', [BlogController::class, 'view_comment'])->name('admin.blog.view.comment');
    Route::post('comment', [BlogController::class, 'reply'])->name('admin.blog.reply.comment');

    Route::get('admin/blog/{id}/edit', [BlogController::class, 'edit'])->name('admin.blog.edit');
    Route::post('admin/blog/{id}/edit', [BlogController::class, 'update'])->name('admin.blog.update');

    Route::delete('blog/{id}', [BlogController::class, 'delete'])->name('admin.blog.delete');


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

    Route::get('admin/adopter/{id}', function () {
        return view('admin.adopter-view');
    });

    Route::post('admin/logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('admin.logout');
});