<?php

namespace App\Filament\Resources\JadwalPembayaranMahasiswas;

use App\Filament\Resources\JadwalPembayaranMahasiswas\Pages\CreateJadwalPembayaranMahasiswa;
use App\Filament\Resources\JadwalPembayaranMahasiswas\Pages\EditJadwalPembayaranMahasiswa;
use App\Filament\Resources\JadwalPembayaranMahasiswas\Pages\ListJadwalPembayaranMahasiswas;
use App\Filament\Resources\JadwalPembayaranMahasiswas\Schemas\JadwalPembayaranMahasiswaForm;
use App\Filament\Resources\JadwalPembayaranMahasiswas\Tables\JadwalPembayaranMahasiswasTable;
use App\Models\JadwalPembayaranMahasiswa;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class JadwalPembayaranMahasiswaResource extends Resource
{
    protected static ?string $model = JadwalPembayaranMahasiswa::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'JadwalPembayaranMahasiswa';

    public static function form(Schema $schema): Schema
    {
        return JadwalPembayaranMahasiswaForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return JadwalPembayaranMahasiswasTable::configure($table);
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
            'index' => ListJadwalPembayaranMahasiswas::route('/'),
            'create' => CreateJadwalPembayaranMahasiswa::route('/create'),
            'edit' => EditJadwalPembayaranMahasiswa::route('/{record}/edit'),
        ];
    }
}
