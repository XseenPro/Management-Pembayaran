<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Providers\FilamentThemeServiceProvider;
use Filament\Support\Facades\FilamentAsset;

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
        // FilamentAsset::registerCss('css/filament.css');
    }
}
