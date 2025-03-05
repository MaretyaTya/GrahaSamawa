<?php

use App\Http\Controllers\Admin\BrochureController;
use App\Http\Controllers\LandingPageController;

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Route::get('/', function () {
//     return Inertia::render('welcome');
// })->name('home');

// Landing Page
Route::get('/', [LandingPageController::class, 'index'])->name('landing.index');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');
});

// Brochure
Route::get('/brochure', [BrochureController::class, 'index'])->name('admin.units.brochure');
Route::post('/brochure/update', [BrochureController::class, 'updateBrochure'])->name('admin.brochure.update');
Route::get('/admin/brochure/download/{id}', [BrochureController::class, 'downloadBrochure'])
    ->name('admin.brochure.download');

require __DIR__ . '/settings.php';
require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';
