<?php

namespace App\Filament\Resources\Prodis\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ProdiForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('tingkat'),
                TextInput::make('id_prodi'),
                TextInput::make('id_prodix'),
                TextInput::make('nama_prodi'),
                TextInput::make('nama_prodi_eng'),
                TextInput::make('id_fakultas'),
                TextInput::make('status_antara')
                    ->numeric(),
                TextInput::make('status_akred_ind'),
                TextInput::make('status_akred_eng'),
                TextInput::make('status'),
                TextInput::make('operator'),
                TextInput::make('dekan'),
                TextInput::make('kaprodi'),
                TextInput::make('PT')
                    ->numeric(),
                TextInput::make('syarat_penerimaan_ind'),
                TextInput::make('syarat_penerimaan_eng'),
                TextInput::make('bahasa_peng_kul_ind'),
                TextInput::make('bahasa_peng_kul_eng'),
                TextInput::make('sistem_penilaian_ind'),
                TextInput::make('sistem_penilaian_eng'),
                TextInput::make('gelar_ind'),
                TextInput::make('gelar_eng'),
                TextInput::make('lama_studi_ind'),
                TextInput::make('lama_studi_eng'),
                TextInput::make('jenjang_pend_ind'),
                TextInput::make('jenjang_pend_eng'),
                TextInput::make('jenjang_pend_lanj_ind'),
                TextInput::make('jenjang_pend_lanj_eng'),
                TextInput::make('jenjang_KKNI_ind'),
                TextInput::make('jenjang_KKNI_eng'),
                TextInput::make('status_profesi_ind'),
                TextInput::make('status_profesi_eng'),
            ]);
    }
}
