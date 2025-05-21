<?php

namespace App\Providers;

use Filament\PluginServiceProvider;
use Filament\Navigation\NavigationItem;
use Illuminate\Support\ServiceProvider;

class FilamentServiceProvider extends PluginServiceProvider
{
    public function boot(): void
    {
        parent::boot();

        // Daftarkan menu admin
        \Filament\Facades\Filament::registerNavigationItems([
            NavigationItem::make('Users')
                ->url(route('filament.resources.users.index'))
                ->icon('heroicon-o-users'),
        ]);
    }
}
