<?php

namespace App\Filament\Resources\JadwalBayars;

use App\Filament\Resources\JadwalBayars\Pages\CreateJadwalBayar;
use App\Filament\Resources\JadwalBayars\Pages\EditJadwalBayar;
use App\Filament\Resources\JadwalBayars\Pages\ListJadwalBayars;
use App\Filament\Resources\JadwalBayars\Schemas\JadwalBayarForm;
use App\Filament\Resources\JadwalBayars\Tables\JadwalBayarsTable;
use App\Models\JadwalBayar;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class JadwalBayarResource extends Resource
{
    protected static ?string $model = JadwalBayar::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'JadwalBayar';

    public static function form(Schema $schema): Schema
    {
        return JadwalBayarForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return JadwalBayarsTable::configure($table);
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
            'index' => ListJadwalBayars::route('/'),
            'create' => CreateJadwalBayar::route('/create'),
            'edit' => EditJadwalBayar::route('/{record}/edit'),
        ];
    }
}
