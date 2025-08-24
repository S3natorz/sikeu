<?php

namespace App\Filament\Resources\Tingkats;

use App\Filament\Resources\Tingkats\Pages\CreateTingkat;
use App\Filament\Resources\Tingkats\Pages\EditTingkat;
use App\Filament\Resources\Tingkats\Pages\ListTingkats;
use App\Filament\Resources\Tingkats\Schemas\TingkatForm;
use App\Filament\Resources\Tingkats\Tables\TingkatsTable;
use App\Models\Tingkat;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class TingkatResource extends Resource
{
    protected static ?string $model = Tingkat::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Tingkat';

    public static function form(Schema $schema): Schema
    {
        return TingkatForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TingkatsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListTingkats::route('/'),
            'create' => CreateTingkat::route('/create'),
            'edit' => EditTingkat::route('/{record}/edit'),
        ];
    }
}
