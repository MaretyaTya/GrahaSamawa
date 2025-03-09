<?php

use App\Http\Controllers\Admin\BrochureController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\LandingPageController;
use App\Http\Middleware\CountVisitors;
use Illuminate\Support\Facades\Route;


// Landing Page
Route::get('/', [LandingPageController::class, 'index'])->name('landing.index');

//Count Visitors
Route::middleware([CountVisitors::class])->group(function () {
    Route::get('/', [LandingPageController::class, 'index'])->name('landing.index');
});

// Proteksi Halaman Admin
Route::middleware(['auth', 'auth.session'])->group(function () {
    // Brochure
    Route::get('/brochure', [BrochureController::class, 'index'])->name('admin.units.brochure');
    Route::post('/brochure/update', [BrochureController::class, 'updateBrochure'])->name('admin.brochure.update');
    Route::get('/admin/brochure/download/{id}', [BrochureController::class, 'downloadBrochure'])
        ->name('admin.brochure.download');
});

//Brochure Download
Route::get('/admin/brochure/download/{id}', [BrochureController::class, 'downloadBrochure'])
    ->name('admin.brochure.download');

//Login
Route::get('/admin', [LoginController::class, 'LoginForm'])->name('login');
Route::post('/auth', [LoginController::class, 'auth'])->name('auth');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

require __DIR__ . '/settings.php';
require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';
