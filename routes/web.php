<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user\usercontroller;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;




Route::get('/', [usercontroller::class, 'index'])->name('home.HomePage');

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Hanya untuk admin
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
});
