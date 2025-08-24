<?php

namespace App\Filament\Resources\DataBanks\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class DataBankForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('pembayaran_reguler_id')
                    ->required()
                    ->numeric(),
                DateTimePicker::make('tgl_tagihan'),
                DateTimePicker::make('tgl_bayar'),
                TextInput::make('item_id')
                    ->required()
                    ->numeric()
                    ->default(0),
                TextInput::make('NS'),
                TextInput::make('wajib')
                    ->required()
                    ->numeric(),
                TextInput::make('bayar')
                    ->required()
                    ->numeric(),
                TextInput::make('bank_id')
                    ->required()
                    ->numeric(),
                TextInput::make('status')
                    ->required()
                    ->numeric(),
            ]);
    }
}
