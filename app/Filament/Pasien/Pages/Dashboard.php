<?php

namespace App\Filament\Pasien\Pages;

use Filament\Pages\Page;

class Dashboard extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pasien.pages.dashboard';
    protected function getHeaderWidgets(): array
    {
        return [
            RiwayatDiagnosisWidget::class,
            JadwalKonsultasiWidget::class,
        ];
    }
}
