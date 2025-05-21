<?php

namespace App\Filament\Dokter\Pages;

use Filament\Pages\Page;

class Dashboard extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.dokter.pages.dashboard';

    protected function getHeaderWidgets(): array
    {
        return [
            DaftarPasienWidget::class,
            JadwalKonsultasiWidget::class,
        ];
    }
}
