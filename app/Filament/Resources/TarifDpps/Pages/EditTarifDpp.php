<?php

namespace App\Filament\Resources\TarifDpps\Pages;

use App\Filament\Resources\TarifDpps\TarifDppResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditTarifDpp extends EditRecord
{
    protected static string $resource = TarifDppResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
