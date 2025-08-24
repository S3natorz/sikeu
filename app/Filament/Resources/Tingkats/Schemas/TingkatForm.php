<?php

namespace App\Filament\Resources\Tingkats\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class TingkatForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('id_tingkat')
                    ->required(),
                TextInput::make('nama_tingkat')
                    ->required(),
                TextInput::make('alias')
                    ->required(),
                TextInput::make('id_npm')
                    ->required(),
            ]);
    }
}
