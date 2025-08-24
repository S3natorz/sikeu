<?php

namespace App\Filament\Resources\DataBanks\Pages;

use App\Filament\Resources\DataBanks\DataBankResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditDataBank extends EditRecord
{
    protected static string $resource = DataBankResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
