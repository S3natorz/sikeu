<?php

namespace App\Filament\Resources\StatusAktifs\Pages;

use App\Filament\Resources\StatusAktifs\StatusAktifResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListStatusAktifs extends ListRecords
{
    protected static string $resource = StatusAktifResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
