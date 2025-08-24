<?php

namespace App\Filament\Resources\StatusAktifs\Pages;

use App\Filament\Resources\StatusAktifs\StatusAktifResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditStatusAktif extends EditRecord
{
    protected static string $resource = StatusAktifResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
