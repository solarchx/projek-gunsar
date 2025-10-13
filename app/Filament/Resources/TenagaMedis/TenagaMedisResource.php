<?php

namespace App\Filament\Resources\TenagaMedis;

use App\Filament\Resources\TenagaMedis\Pages\CreateTenagaMedis;
use App\Filament\Resources\TenagaMedis\Pages\EditTenagaMedis;
use App\Filament\Resources\TenagaMedis\Pages\ListTenagaMedis;
use App\Filament\Resources\TenagaMedis\Pages\ViewTenagaMedis;
use App\Filament\Resources\TenagaMedis\Schemas\TenagaMedisForm;
use App\Filament\Resources\TenagaMedis\Schemas\TenagaMedisInfolist;
use App\Filament\Resources\TenagaMedis\Tables\TenagaMedisTable;
use App\Models\TenagaMedis;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class TenagaMedisResource extends Resource
{
    protected static ?string $model = TenagaMedis::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedBuildingOffice2;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return TenagaMedisForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return TenagaMedisInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TenagaMedisTable::configure($table);
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
            'index' => ListTenagaMedis::route('/'),
            'create' => CreateTenagaMedis::route('/create'),
            'view' => ViewTenagaMedis::route('/{record}'),
            'edit' => EditTenagaMedis::route('/{record}/edit'),
        ];
    }
}
