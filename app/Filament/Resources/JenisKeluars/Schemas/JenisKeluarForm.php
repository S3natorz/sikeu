<?php

namespace App\Filament\Resources\JenisKeluars\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class JenisKeluarForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('jenis_keluar'),
            ]);
    }
}
