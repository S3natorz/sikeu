<?php

namespace App\Filament\Resources\JenisKeluars\Pages;

use App\Filament\Resources\JenisKeluars\JenisKeluarResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListJenisKeluars extends ListRecords
{
    protected static string $resource = JenisKeluarResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
