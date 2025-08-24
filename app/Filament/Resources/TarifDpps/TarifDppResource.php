<?php

namespace App\Filament\Resources\TarifDpps;

use App\Filament\Resources\TarifDpps\Pages\CreateTarifDpp;
use App\Filament\Resources\TarifDpps\Pages\EditTarifDpp;
use App\Filament\Resources\TarifDpps\Pages\ListTarifDpps;
use App\Filament\Resources\TarifDpps\Schemas\TarifDppForm;
use App\Filament\Resources\TarifDpps\Tables\TarifDppsTable;
use App\Models\TarifDpp;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class TarifDppResource extends Resource
{
    protected static ?string $model = TarifDpp::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'TarifDpp';

    public static function form(Schema $schema): Schema
    {
        return TarifDppForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TarifDppsTable::configure($table);
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
            'index' => ListTarifDpps::route('/'),
            'create' => CreateTarifDpp::route('/create'),
            'edit' => EditTarifDpp::route('/{record}/edit'),
        ];
    }
}
