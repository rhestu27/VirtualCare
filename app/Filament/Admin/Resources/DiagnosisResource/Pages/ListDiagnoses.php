<?php

namespace App\Filament\Admin\Resources\DiagnosisResource\Pages;

use App\Filament\Admin\Resources\DiagnosisResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDiagnoses extends ListRecords
{
    protected static string $resource = DiagnosisResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
