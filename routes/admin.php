<?php

use App\Http\Controllers\Admin\BrochureController;
use App\Http\Controllers\Admin\UnitController;
use Illuminate\Support\Facades\Route;


//Admin dashboard
Route::prefix("admin")->middleware(['auth'])->group(function () {

    // Admin Dashboard  
    Route::get('/dashboard', [UnitController::class, 'index'])->name('admin.dashboard');

    // Unit Management (wajib login)
    Route::prefix("units")->middleware(['auth'])->group(function () {
        Route::get('/', [UnitController::class, 'unit'])->name('admin.units.unit');
        Route::post('/add', [UnitController::class, 'store'])->name('admin.units.store');
        Route::get('/{id}/edit', [UnitController::class, 'edit'])->name('admin.units.edit');
        Route::put('/{id}', [UnitController::class, 'update'])->name('admin.units.update');
        Route::delete('/{id}', [UnitController::class, 'destroy'])->name('admin.units.destroy');
    });

    // Brochure Management (wajib login)
    Route::prefix('brochure')->middleware(['auth'])->group(function () {
        Route::get('/', [BrochureController::class, 'index'])->name('admin.brochure.index');
        Route::post('/update', [BrochureController::class, 'updateBrochure'])->name('admin.brochure.update');
    });
});
