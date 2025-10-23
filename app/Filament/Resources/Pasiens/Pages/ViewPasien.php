<?php

namespace App\Filament\Resources\Pasiens\Pages;

use App\Filament\Resources\Pasiens\PasienResource;
use App\Models\Pasien;
use Filament\Actions\EditAction;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Form;
use Filament\Resources\Pages\ViewRecord;

class ViewPasien extends ViewRecord
{
    protected static string $resource = PasienResource::class;

    protected static string $view = 'filament.resources.pasiens.pages.view-pasien';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama')
                    ->label('Nama Lengkap')
                    ->disabled()
                    ->suffixIcon('heroicon-o-user'),
                Select::make('jenis_kelamin')
                    ->label('Jenis Kelamin')
                    ->options(['Laki-laki' => 'Laki laki', 'Perempuan' => 'Perempuan'])
                    ->disabled()
                    ->suffixIcon('heroicon-o-plus'),
                TextInput::make('nik')
                    ->label('Nomor Induk Kependudukan')
                    ->disabled()
                    ->suffixIcon('heroicon-o-identification'),
                DatePicker::make('tanggal_lahir')
                    ->displayFormat('d/m/Y')
                    ->disabled()
                    ->native(false)
                    ->suffixIcon('heroicon-o-calendar'),
                Textarea::make('alamat')
                    ->label('Alamat Lengkap')
                    ->disabled()
                    ->columnSpanFull(),
            ])
            ->fill($this->record->toArray());
    }

    protected function getHeaderActions(): array
    {
        return [
            // EditAction::make(),
        ];
    }
}
