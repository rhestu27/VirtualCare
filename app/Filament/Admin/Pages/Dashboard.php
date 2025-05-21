<?php

namespace App\Filament\Admin\Pages;

use Filament\Pages\Page;
use App\Filament\Admin\Widgets\StatistikPenggunaWidget;
use App\Filament\Admin\Widgets\GrafikTransaksiWidget;

class Dashboard extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.admin.pages.dashboard';

    protected function getHeaderWidgets(): array
    {
        return [
            StatistikPenggunaWidget::class,
            GrafikTransaksiWidget::class,
        ];
    }
}
