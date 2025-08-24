<?php

namespace App\Filament\Resources\StatusAktifs\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class StatusAktifForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('status_aktif'),
            ]);
    }
}
