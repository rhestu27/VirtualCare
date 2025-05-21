<?php

namespace App\Filament\Dokter\Resources\DiagnosisResource\Pages;

use App\Filament\Dokter\Resources\DiagnosisResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDiagnosis extends EditRecord
{
    protected static string $resource = DiagnosisResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
