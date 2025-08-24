<?php

namespace App\Filament\Resources\DataBanks\Pages;

use App\Filament\Resources\DataBanks\DataBankResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListDataBanks extends ListRecords
{
    protected static string $resource = DataBankResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
