<?php

namespace App\Filament\Resources\JadwalPembayaranMahasiswas\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class JadwalPembayaranMahasiswasTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('npm')
                    ->searchable(),
                TextColumn::make('thn_akademik')
                    ->searchable(),
                TextColumn::make('jenis_bayar')
                    ->searchable(),
                TextColumn::make('jadwal_bayar')
                    ->date()
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
