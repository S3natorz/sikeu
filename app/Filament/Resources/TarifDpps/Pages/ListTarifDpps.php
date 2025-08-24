<?php

namespace App\Filament\Resources\TarifDpps\Pages;

use App\Filament\Resources\TarifDpps\TarifDppResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListTarifDpps extends ListRecords
{
    protected static string $resource = TarifDppResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
