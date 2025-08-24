<?php

namespace App\Filament\Resources\JadwalPembayaranMahasiswas\Pages;

use App\Filament\Resources\JadwalPembayaranMahasiswas\JadwalPembayaranMahasiswaResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditJadwalPembayaranMahasiswa extends EditRecord
{
    protected static string $resource = JadwalPembayaranMahasiswaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
