<?php

namespace App\Filament\Resources\PembayaranMhsBarus\Pages;

use App\Filament\Resources\PembayaranMhsBarus\PembayaranMhsBaruResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPembayaranMhsBarus extends ListRecords
{
    protected static string $resource = PembayaranMhsBaruResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
