<?php

namespace App\Filament\Resources\StatusAktifs;

use App\Filament\Resources\StatusAktifs\Pages\CreateStatusAktif;
use App\Filament\Resources\StatusAktifs\Pages\EditStatusAktif;
use App\Filament\Resources\StatusAktifs\Pages\ListStatusAktifs;
use App\Filament\Resources\StatusAktifs\Schemas\StatusAktifForm;
use App\Filament\Resources\StatusAktifs\Tables\StatusAktifsTable;
use App\Models\StatusAktif;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class StatusAktifResource extends Resource
{
    protected static ?string $model = StatusAktif::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'StatusAktif';

    public static function form(Schema $schema): Schema
    {
        return StatusAktifForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return StatusAktifsTable::configure($table);
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
            'index' => ListStatusAktifs::route('/'),
            'create' => CreateStatusAktif::route('/create'),
            'edit' => EditStatusAktif::route('/{record}/edit'),
        ];
    }
}
