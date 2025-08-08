<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SliderController;


Route::get('/', function () {
    return view('home.HomePage');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::resource('admin/slider', SliderController::class)->middleware(['auth']);
    Route::post('/admin/sliders', [SliderController::class, 'store'])
    ->name('admin.sliders.store');
    Route::delete('/admin/sliders/{id}', [SliderController::class, 'destroy'])
    ->name('admin.sliders.destroy');
    Route::get('/admin/sliders', [SliderController::class, 'index'])
    ->name('admin.sliders.index');  

});

require __DIR__.'/auth.php';
