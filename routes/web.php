<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\PreventBackHistoryMiddleware;

// ===== Admin
use App\Http\Controllers\backend\Auth\LoginController;
use App\Http\Controllers\backend\HomeController;


Route::get('/', function () {
    return view('backend.auth.login');
})->name('/');

Route::group(['prefix' => 'Bhairaav'],function(){

    // ======================= Admin Login/Logout
    Route::get('/admin/login', [LoginController::class, 'login'])->name('admin.login');
    Route::post('/admin/login/store', [LoginController::class, 'authenticate'])->name('admin.login.store');
    Route::post('/admin/logout', [LoginController::class, 'logout'])->name('admin.logout');

});

// ======================= Admin Dashboard
Route::group(['prefix' => 'Bhairaav', 'middleware'=>['auth', PreventBackHistoryMiddleware::class]],function(){

    // ==== Dashboard
    Route::get('/admin/dashboard', [HomeController::class, 'Admin_Home'])->name('admin.dashboard');

    // ==== Update Password
    Route::get('/change-password', [HomeController::class, 'changePassword'])->name('change-password');
    Route::post('/change-password', [HomeController::class, 'updatePassword'])->name('update-password');

});
