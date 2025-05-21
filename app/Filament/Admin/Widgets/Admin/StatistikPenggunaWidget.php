<?php

namespace App\Filament\Admin\Widgets\Admin;

use Filament\Widgets\ChartWidget;

class StatistikPenggunaWidget extends ChartWidget
{
    protected static ?string $heading = 'Chart';

    protected function getData(): array
    {
        return [
            //
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
