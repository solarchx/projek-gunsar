<?php

namespace App\Filament\Resources\TenagaMedis;

use App\Filament\Resources\TenagaMedis\Pages\CreateTenagaMedis;
use App\Filament\Resources\TenagaMedis\Pages\EditTenagaMedis;
use App\Filament\Resources\TenagaMedis\Pages\ListTenagaMedis;
use App\Filament\Resources\TenagaMedis\Pages\ViewTenagaMedis;
use App\Models\TenagaMedis;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class TenagaMedisResource extends Resource
{
    protected static ?string $model = TenagaMedis::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-office-2';

    protected static ?string $navigationGroup = 'Manajemen Data Gunsar';

    protected static ?string $navigationLabel = 'Data Tenaga Medis';

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama')
                    ->label('Nama Lengkap')
                    ->required()
                    ->suffixIcon('heroicon-o-user'),
                TextInput::make('nip')
                    ->label('Nomor Induk Pegawai')
                    ->required()
                    ->suffixIcon('heroicon-o-identification'),
                TextInput::make('jabatan')
                    ->required()
                    ->suffixIcon('fas-user-tie'),
                TextInput::make('password')
                    ->password()
                    ->required()
                    ->suffixIcon('bi-lock'),
                Select::make('role')
                    ->label('Roles')
                    ->options(['dokter' => 'Dokter', 'perawat' => 'Perawat', 'farmasi' => 'Farmasi', 'staff' => 'Staff'])
                    ->required(),
            ]);
    }

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                TextEntry::make('nip'),
                TextEntry::make('nama'),
                TextEntry::make('jabatan'),
                TextEntry::make('role'),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')
                    ->searchable(),
                TextColumn::make('nip')
                    ->label('Nomor Induk Pegawai')
                    ->searchable(),
                TextColumn::make('jabatan')
                    ->searchable(),
                TextColumn::make('role'),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                ActionGroup::make([
                    ViewAction::make(),
                    EditAction::make(),
                    DeleteAction::make(),
                ])
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
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
            // 'create' => CreateTenagaMedis::route('/create'),
            'view' => ViewTenagaMedis::route('/{record}'),
            // 'edit' => EditTenagaMedis::route('/{record}/edit'),
        ];
    }
}
