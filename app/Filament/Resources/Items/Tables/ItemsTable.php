<?php

namespace App\Filament\Resources\Items\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ItemsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id_item')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('nama_item')
                    ->searchable(),
                TextColumn::make('nama_rekap')
                    ->searchable(),
                TextColumn::make('alias')
                    ->searchable(),
                TextColumn::make('alias_dpp')
                    ->searchable(),
                TextColumn::make('alias_beasiswa')
                    ->searchable(),
                TextColumn::make('alias_cicil')
                    ->searchable(),
                TextColumn::make('urutan')
                    ->numeric()
                    ->sortable(),
                IconColumn::make('status_dpp')
                    ->boolean(),
                IconColumn::make('status_dppfull')
                    ->boolean(),
                IconColumn::make('status_total')
                    ->boolean(),
                IconColumn::make('status_sp')
                    ->boolean(),
                IconColumn::make('status_tgk')
                    ->boolean(),
                IconColumn::make('status_bea')
                    ->boolean(),
                IconColumn::make('status_cicil')
                    ->boolean(),
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
