<?php

namespace App\Filament\Resources\DataBanks;

use App\Filament\Resources\DataBanks\Pages\CreateDataBank;
use App\Filament\Resources\DataBanks\Pages\EditDataBank;
use App\Filament\Resources\DataBanks\Pages\ListDataBanks;
use App\Filament\Resources\DataBanks\Schemas\DataBankForm;
use App\Filament\Resources\DataBanks\Tables\DataBanksTable;
use App\Models\DataBank;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class DataBankResource extends Resource
{
    protected static ?string $model = DataBank::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'DataBank';

    public static function form(Schema $schema): Schema
    {
        return DataBankForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return DataBanksTable::configure($table);
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
            'index' => ListDataBanks::route('/'),
            'create' => CreateDataBank::route('/create'),
            'edit' => EditDataBank::route('/{record}/edit'),
        ];
    }
}
