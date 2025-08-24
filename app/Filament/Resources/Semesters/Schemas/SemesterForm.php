<?php

namespace App\Filament\Resources\Semesters\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class SemesterForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('semester')
                    ->required(),
                Toggle::make('value')
                    ->required(),
                Toggle::make('status_semester')
                    ->required(),
            ]);
    }
}
