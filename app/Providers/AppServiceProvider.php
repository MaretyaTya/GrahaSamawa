<?php

namespace App\Providers;

use App\Models\Unit;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (Schema::hasTable('units')) {
            view()->share('units', Unit::all());
        }
    }

    // public const HOME = '/admin/dashboard';
}
