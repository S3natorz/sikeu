<?php

namespace App\Filament\Resources\JadwalBayars\Pages;

use App\Filament\Resources\JadwalBayars\JadwalBayarResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditJadwalBayar extends EditRecord
{
    protected static string $resource = JadwalBayarResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
