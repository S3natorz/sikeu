<?php

namespace App\Filament\Resources\JenisKeluars;

use App\Filament\Resources\JenisKeluars\Pages\CreateJenisKeluar;
use App\Filament\Resources\JenisKeluars\Pages\EditJenisKeluar;
use App\Filament\Resources\JenisKeluars\Pages\ListJenisKeluars;
use App\Filament\Resources\JenisKeluars\Schemas\JenisKeluarForm;
use App\Filament\Resources\JenisKeluars\Tables\JenisKeluarsTable;
use App\Models\JenisKeluar;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class JenisKeluarResource extends Resource
{
    protected static ?string $model = JenisKeluar::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'JenisKeluar';

    public static function form(Schema $schema): Schema
    {
        return JenisKeluarForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return JenisKeluarsTable::configure($table);
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
            'index' => ListJenisKeluars::route('/'),
            'create' => CreateJenisKeluar::route('/create'),
            'edit' => EditJenisKeluar::route('/{record}/edit'),
        ];
    }
}
