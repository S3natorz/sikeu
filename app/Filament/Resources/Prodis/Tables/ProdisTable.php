<?php

namespace App\Filament\Resources\Prodis\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ProdisTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('tingkat')
                    ->searchable(),
                TextColumn::make('id_prodi')
                    ->searchable(),
                TextColumn::make('id_prodix')
                    ->searchable(),
                TextColumn::make('nama_prodi')
                    ->searchable(),
                TextColumn::make('nama_prodi_eng')
                    ->searchable(),
                TextColumn::make('id_fakultas')
                    ->searchable(),
                TextColumn::make('status_antara')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('status_akred_ind')
                    ->searchable(),
                TextColumn::make('status_akred_eng')
                    ->searchable(),
                TextColumn::make('status')
                    ->searchable(),
                TextColumn::make('operator')
                    ->searchable(),
                TextColumn::make('dekan')
                    ->searchable(),
                TextColumn::make('kaprodi')
                    ->searchable(),
                TextColumn::make('PT')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('syarat_penerimaan_ind')
                    ->searchable(),
                TextColumn::make('syarat_penerimaan_eng')
                    ->searchable(),
                TextColumn::make('bahasa_peng_kul_ind')
                    ->searchable(),
                TextColumn::make('bahasa_peng_kul_eng')
                    ->searchable(),
                TextColumn::make('sistem_penilaian_ind')
                    ->searchable(),
                TextColumn::make('sistem_penilaian_eng')
                    ->searchable(),
                TextColumn::make('gelar_ind')
                    ->searchable(),
                TextColumn::make('gelar_eng')
                    ->searchable(),
                TextColumn::make('lama_studi_ind')
                    ->searchable(),
                TextColumn::make('lama_studi_eng')
                    ->searchable(),
                TextColumn::make('jenjang_pend_ind')
                    ->searchable(),
                TextColumn::make('jenjang_pend_eng')
                    ->searchable(),
                TextColumn::make('jenjang_pend_lanj_ind')
                    ->searchable(),
                TextColumn::make('jenjang_pend_lanj_eng')
                    ->searchable(),
                TextColumn::make('jenjang_KKNI_ind')
                    ->searchable(),
                TextColumn::make('jenjang_KKNI_eng')
                    ->searchable(),
                TextColumn::make('status_profesi_ind')
                    ->searchable(),
                TextColumn::make('status_profesi_eng')
                    ->searchable(),
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
