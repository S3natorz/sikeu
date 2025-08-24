<?php

namespace App\Filament\Resources\TarifDpps\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class TarifDppForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('angkatan'),
                TextInput::make('tingkat'),
                TextInput::make('prodi'),
                TextInput::make('konsentrasi')
                    ->required(),
                TextInput::make('REG')
                    ->numeric()
                    ->default(0),
                TextInput::make('IPU')
                    ->numeric()
                    ->default(0),
                TextInput::make('IKT')
                    ->numeric()
                    ->default(0),
                TextInput::make('SKS')
                    ->numeric()
                    ->default(0),
                TextInput::make('CTA')
                    ->numeric()
                    ->default(0),
                TextInput::make('IPK')
                    ->numeric()
                    ->default(0),
                TextInput::make('IBM')
                    ->numeric()
                    ->default(0),
                TextInput::make('TUM')
                    ->numeric()
                    ->default(0),
                TextInput::make('IPF')
                    ->numeric()
                    ->default(0),
                TextInput::make('jum_sks')
                    ->numeric()
                    ->default(0),
                TextInput::make('SK3')
                    ->numeric()
                    ->default(0),
                TextInput::make('MK3')
                    ->numeric()
                    ->default(0),
                TextInput::make('SKF')
                    ->required()
                    ->numeric(),
                TextInput::make('ket')
                    ->default('0'),
                TextInput::make('kerjasama_id')
                    ->required()
                    ->numeric(),
            ]);
    }
}
