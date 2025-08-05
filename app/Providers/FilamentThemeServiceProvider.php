<?php

namespace App\Providers;

use Filament\Support\Facades\FilamentAsset;
use Filament\Support\Providers\FilamentThemeServiceProvider as BaseThemeServiceProvider;

class FilamentThemeServiceProvider extends BaseThemeServiceProvider
{
    public function boot(): void
    {
        parent::boot();

        FilamentAsset::registerCss('css/filament.css'); // ambil dari folder public
    }
}
