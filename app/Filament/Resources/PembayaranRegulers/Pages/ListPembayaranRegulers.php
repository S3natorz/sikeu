<?php

namespace App\Filament\Resources\PembayaranRegulers\Pages;

use App\Filament\Resources\PembayaranRegulers\PembayaranRegulerResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPembayaranRegulers extends ListRecords
{
    protected static string $resource = PembayaranRegulerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
