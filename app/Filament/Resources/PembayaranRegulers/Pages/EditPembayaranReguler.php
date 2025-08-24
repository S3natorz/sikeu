<?php

namespace App\Filament\Resources\PembayaranRegulers\Pages;

use App\Filament\Resources\PembayaranRegulers\PembayaranRegulerResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPembayaranReguler extends EditRecord
{
    protected static string $resource = PembayaranRegulerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
