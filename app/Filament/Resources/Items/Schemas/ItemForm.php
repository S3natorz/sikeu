<?php

namespace App\Filament\Resources\Items\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class ItemForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('id_item')
                    ->numeric(),
                TextInput::make('nama_item'),
                TextInput::make('nama_rekap'),
                TextInput::make('alias'),
                TextInput::make('alias_dpp'),
                TextInput::make('alias_beasiswa'),
                TextInput::make('alias_cicil'),
                TextInput::make('urutan')
                    ->required()
                    ->numeric(),
                Toggle::make('status_dpp'),
                Toggle::make('status_dppfull'),
                Toggle::make('status_total'),
                Toggle::make('status_sp'),
                Toggle::make('status_tgk'),
                Toggle::make('status_bea'),
                Toggle::make('status_cicil')
                    ->required(),
            ]);
    }
}
