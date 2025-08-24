<?php

namespace App\Filament\Resources\TarifDpps\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class TarifDppsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('angkatan')
                    ->searchable(),
                TextColumn::make('tingkat')
                    ->searchable(),
                TextColumn::make('prodi')
                    ->searchable(),
                TextColumn::make('konsentrasi')
                    ->searchable(),
                TextColumn::make('REG')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('IPU')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('IKT')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('SKS')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('CTA')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('IPK')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('IBM')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('TUM')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('IPF')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('jum_sks')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('SK3')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('MK3')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('SKF')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('ket')
                    ->searchable(),
                TextColumn::make('kerjasama_id')
                    ->numeric()
                    ->sortable(),
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
