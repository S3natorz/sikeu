<?php

namespace App\Filament\Resources\PembayaranMhsBarus;

use App\Filament\Resources\PembayaranMhsBarus\Pages\CreatePembayaranMhsBaru;
use App\Filament\Resources\PembayaranMhsBarus\Pages\EditPembayaranMhsBaru;
use App\Filament\Resources\PembayaranMhsBarus\Pages\ListPembayaranMhsBarus;
use App\Filament\Resources\PembayaranMhsBarus\Schemas\PembayaranMhsBaruForm;
use App\Filament\Resources\PembayaranMhsBarus\Tables\PembayaranMhsBarusTable;
use App\Models\PembayaranMhsBaru;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PembayaranMhsBaruResource extends Resource
{
    protected static ?string $model = PembayaranMhsBaru::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'PembayaranMhsBaru';

    public static function form(Schema $schema): Schema
    {
        return PembayaranMhsBaruForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PembayaranMhsBarusTable::configure($table);
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
            'index' => ListPembayaranMhsBarus::route('/'),
            'create' => CreatePembayaranMhsBaru::route('/create'),
            'edit' => EditPembayaranMhsBaru::route('/{record}/edit'),
        ];
    }
}
