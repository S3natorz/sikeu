<?php

namespace App\Filament\Resources\JenisKeluars\Pages;

use App\Filament\Resources\JenisKeluars\JenisKeluarResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditJenisKeluar extends EditRecord
{
    protected static string $resource = JenisKeluarResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
