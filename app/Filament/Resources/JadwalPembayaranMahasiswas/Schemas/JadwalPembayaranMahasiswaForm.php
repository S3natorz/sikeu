<?php

namespace App\Filament\Resources\JadwalPembayaranMahasiswas\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class JadwalPembayaranMahasiswaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('npm')
                    ->required(),
                TextInput::make('thn_akademik'),
                TextInput::make('jenis_bayar'),
                DatePicker::make('jadwal_bayar'),
            ]);
    }
}
