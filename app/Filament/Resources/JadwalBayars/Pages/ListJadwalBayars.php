<?php

namespace App\Filament\Resources\JadwalBayars\Pages;

use App\Filament\Resources\JadwalBayars\JadwalBayarResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListJadwalBayars extends ListRecords
{
    protected static string $resource = JadwalBayarResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
