<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UnitController;
use App\Http\Controllers\LandingPageController;
use App\Http\Middleware\CountVisitors;

Route::get('/', [LandingPageController::class, 'index'])->name('landing.index');

Route::get('/login', function () {
    return view('admin.login');
});

Route::get('/admin', function () {
    return view('admin.units.index');
});

Route::get('/unit',  function () {
    return view('admin.units.unit');
});

Route::prefix('admin')->group(function () {
    Route::get('/units', [UnitController::class, 'index'])->name('admin.units.index');
    Route::get('/units/create', [UnitController::class, 'create'])->name('admin.units.create');
    Route::post('/units', [UnitController::class, 'store'])->name('admin.units.store');
    Route::get('/units/{unit}/edit', [UnitController::class, 'edit'])->name('admin.units.edit');
    Route::put('/units/{unit}', [UnitController::class, 'update'])->name('admin.units.update');
    Route::delete('/units/{unit}', [UnitController::class, 'destroy'])->name('admin.units.destroy');
});

Route::middleware([CountVisitors::class])->group(function () {
    Route::get('/', [LandingPageController::class, 'index'])->name('admin.index');
});

Route::post('/units/store', [UnitController::class, 'store'])->name('units.store');
