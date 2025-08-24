<?php

namespace App\Filament\Resources\JadwalPembayaranMahasiswas\Pages;

use App\Filament\Resources\JadwalPembayaranMahasiswas\JadwalPembayaranMahasiswaResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListJadwalPembayaranMahasiswas extends ListRecords
{
    protected static string $resource = JadwalPembayaranMahasiswaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
