<?php

namespace App\Filament\Resources\PembayaranMhsBarus\Pages;

use App\Filament\Resources\PembayaranMhsBarus\PembayaranMhsBaruResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPembayaranMhsBaru extends EditRecord
{
    protected static string $resource = PembayaranMhsBaruResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
