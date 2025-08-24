<?php

namespace App\Filament\Resources\JadwalBayars\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class JadwalBayarForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('thn_akademik'),
                TextInput::make('tingkat'),
                TextInput::make('prodi'),
                TextInput::make('angkatan'),
                TextInput::make('jenis_bayar'),
                DatePicker::make('tgl_mulai'),
                DatePicker::make('tgl_selesai'),
                TextInput::make('status')
                    ->required()
                    ->numeric()
                    ->default(0),
            ]);
    }
}
