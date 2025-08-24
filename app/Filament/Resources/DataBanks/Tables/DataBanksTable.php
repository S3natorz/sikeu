<?php

namespace App\Filament\Resources\DataBanks\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class DataBanksTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('pembayaran_reguler_id')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('tgl_tagihan')
                    ->dateTime()
                    ->sortable(),
                TextColumn::make('tgl_bayar')
                    ->dateTime()
                    ->sortable(),
                TextColumn::make('item_id')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('NS')
                    ->searchable(),
                TextColumn::make('wajib')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('bayar')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('bank_id')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('status')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
