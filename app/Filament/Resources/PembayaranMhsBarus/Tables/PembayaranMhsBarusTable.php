<?php

namespace App\Filament\Resources\PembayaranMhsBarus\Tables;

use App\Models\PembayaranMhsBaru;
use App\Models\Prodi;
use App\Models\TahunAkademik;
use Filament\Actions\Action;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Notifications\Notification;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PembayaranMhsBarusTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('no_test')
                    ->searchable(),
                TextColumn::make('npm')
                    ->searchable(),
                TextColumn::make('nama')
                    ->searchable(),
                TextColumn::make('tahunAkademik.tahun_akademik')
                    ->searchable(),
                TextColumn::make('semester.value'),
                TextColumn::make('gelombang')
                    ->searchable(),
                TextColumn::make('tingkat')
                    ->searchable(),
                TextColumn::make('prodi.nama_prodi')
                    ->searchable(),
                TextColumn::make('konsentrasi.nama_konsentrasi')
                    ->searchable(),
                TextColumn::make('angkatan')
                    ->searchable(),
                TextColumn::make('ket')
                    ->searchable(),
                TextColumn::make('WTGK')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('WCTA')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('WREG')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('WUPK')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('WUPU')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('WUPF')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('WUKT')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('WSKS1')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('WSKS2')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('WBM')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('WTUM')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('BTGK')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('BCTA')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('BREG')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('BUPK')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('BUPU')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('BUPF')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('BUKT')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('BSKS1')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('BSKS2')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('BBM')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('BTUM')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('STGK')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('SCTA')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('SREG')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('SUPK')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('SUPU')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('SUPF')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('SUKT')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('SSKS1')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('SSKS2')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('SBM')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('STUM')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('JWR')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('JBR')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('JSR')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('status')
                    ->searchable(),
                TextColumn::make('status_1')
                    ->searchable(),
                TextColumn::make('status_2')
                    ->searchable(),
                TextColumn::make('jum_sks')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('jenis')
                    ->searchable(),
                IconColumn::make('kategori')
                    ->boolean(),
                TextColumn::make('status_3')
                    ->searchable(),
                IconColumn::make('alumni')
                    ->boolean(),
                IconColumn::make('status_skema_id')
                    ->boolean(),
                TextColumn::make('kerjasama_id')
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
            ->headerActions([
                Action::make('sync_data')
                    ->label('Sync Data')
                    ->icon(Heroicon::ArrowPathRoundedSquare)
                    ->action(function ($livewire) {
                        self::syncData($livewire);
                    })
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function syncData($livewire)
    {
        set_time_limit(300); // Extend time limit to 5 minutes

        // Cache tahun akademik data to reduce queries
        $tahunAkademikMap = TahunAkademik::pluck('id', 'tahun_akademik')->toArray();
        $prodiMap         = Prodi::all();

        $livewire->getFilteredTableQuery()->whereNotNull('thn_akademik_id')->orWhereNotNull('prodi_id')->chunk(50, function ($items) use ($tahunAkademikMap, $prodiMap) {
            $updates = [];

            foreach ($items as $item) {
                $tahunAkademikId = $tahunAkademikMap[$item->thn_akademik] ?? null;

                if ($tahunAkademikId && $item->thn_akademik_id !== $tahunAkademikId) {
                    $updates[] = [
                        'id'              => $item->id,
                        'thn_akademik_id' => $tahunAkademikId
                    ];
                }

                $prodiId = $prodiMap->where('tingkat', $item->tingkat)->where('id_prodi', $item->prodi)->first()->id ?? null;

                if ($prodiId && $item->prodi_id !== $prodiId) {
                    $updates[] = [
                        'id'       => $item->id,
                        'prodi_id' => $prodiId
                    ];
                }
            }

            // Batch update to reduce database calls
            if (!empty($updates)) {
                foreach ($updates as $update) {
                    PembayaranMhsBaru::where('id', $update['id'])
                        ->update(['thn_akademik_id' => $update['thn_akademik_id']]);
                }
            }
        });

        Notification::make()
            ->title('Data Synchronized')
            ->success()
            ->send();
    }
}
