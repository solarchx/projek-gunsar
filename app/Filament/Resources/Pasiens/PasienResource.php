<?php

namespace App\Filament\Resources\Pasiens;

use App\Filament\Resources\Pasiens\Pages\CreatePasien;
use App\Filament\Resources\Pasiens\Pages\EditPasien;
use App\Filament\Resources\Pasiens\Pages\ListPasiens;
use App\Filament\Resources\Pasiens\Pages\ViewPasien;
use App\Models\Pasien;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Form;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PasienResource extends Resource
{
    protected static ?string $model = Pasien::class;

    protected static ?string $slug = 'pasien';

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    protected static ?string $navigationGroup = 'Manajemen Data Gunsar';

    protected static ?string $navigationLabel = 'Data Pasien';

    protected static ?string $recordTitleAttribute = 'nama';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama')
                    ->label('Nama Lengkap')
                    ->required()
                    ->suffixIcon('heroicon-o-user'),
                Select::make('jenis_kelamin')
                    ->label('Jenis Kelamin')
                    ->options(['Laki-laki' => 'Laki laki', 'Perempuan' => 'Perempuan'])
                    ->required()
                    ->suffixIcon('heroicon-o-plus'),
                TextInput::make('nik')
                    ->label('Nomor Induk Kependudukan')
                    ->required()
                    ->suffixIcon('heroicon-o-identification'),
                DatePicker::make('tanggal_lahir')
                    ->required()
                    ->displayFormat('d/m/Y')
                    ->native(false)
                    ->suffixIcon('heroicon-o-calendar'),
                Textarea::make('alamat')
                    ->label('Alamat Lengkap')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                TextEntry::make('nik'),
                TextEntry::make('nama'),
                TextEntry::make('tanggal_lahir')
                    ->date(),
                TextEntry::make('alamat'),
                TextEntry::make('jenis_kelamin'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')
                    ->searchable(),
                TextColumn::make('nik')
                    ->label('Nomor Induk Kependudukan')
                    ->searchable(),
                TextColumn::make('tanggal_lahir')
                    ->sortable(),
                TextColumn::make('jenis_kelamin'),
                // TextColumn::make('alamat'),
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
                    DeleteAction::make()
                    ->label('Hapus'),
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
            'index' => ListPasiens::route('/'),
            // 'create' => CreatePasien::route('/create'),
            'view' => ViewPasien::route('/{record}'),
            // 'edit' => EditPasien::route('/{record}/edit'),
        ];
    }
}
