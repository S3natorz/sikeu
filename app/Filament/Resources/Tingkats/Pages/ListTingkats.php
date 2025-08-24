<?php

namespace App\Filament\Resources\Tingkats\Pages;

use App\Filament\Resources\Tingkats\TingkatResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListTingkats extends ListRecords
{
    protected static string $resource = TingkatResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
