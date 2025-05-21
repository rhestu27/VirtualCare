<?php

namespace App\Filament\Apoteker\Pages;

use Filament\Pages\Page;

class Dashboard extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.apoteker.pages.dashboard';
    protected function getHeaderWidgets(): array
    {
        return [
            ResepMasukWidget::class,
            StokObatWidget::class,
        ];
    }
}
