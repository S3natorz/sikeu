<?php

namespace App\Filament\Resources\PembayaranRegulers;

use App\Filament\Resources\PembayaranRegulers\Pages\CreatePembayaranReguler;
use App\Filament\Resources\PembayaranRegulers\Pages\EditPembayaranReguler;
use App\Filament\Resources\PembayaranRegulers\Pages\ListPembayaranRegulers;
use App\Filament\Resources\PembayaranRegulers\Schemas\PembayaranRegulerForm;
use App\Filament\Resources\PembayaranRegulers\Tables\PembayaranRegulersTable;
use App\Models\PembayaranReguler;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PembayaranRegulerResource extends Resource
{
    protected static ?string $model = PembayaranReguler::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'PembayaranReguler';

    public static function form(Schema $schema): Schema
    {
        return PembayaranRegulerForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PembayaranRegulersTable::configure($table);
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
            'index' => ListPembayaranRegulers::route('/'),
            'create' => CreatePembayaranReguler::route('/create'),
            'edit' => EditPembayaranReguler::route('/{record}/edit'),
        ];
    }
}
