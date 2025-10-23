<?php

namespace App\Filament\Resources\TenagaMedis\Pages;

use App\Filament\Resources\TenagaMedis\TenagaMedisResource;
use App\Models\TenagaMedis;
use Filament\Actions\EditAction;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Pages\ViewRecord;

class ViewTenagaMedis extends ViewRecord
{
    protected static string $resource = TenagaMedisResource::class;

    protected static string $view = 'filament.resources.tenaga-medis.pages.view-tenaga-medis';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nip')
                    ->label('NIP')
                    ->disabled()
                    ->suffixIcon('heroicon-o-identification'),
                TextInput::make('nama')
                    ->label('Nama Lengkap')
                    ->disabled()
                    ->suffixIcon('heroicon-o-user'),
                TextInput::make('jabatan')
                    ->label('Jabatan')
                    ->disabled()
                    ->suffixIcon('heroicon-o-briefcase'),
                Select::make('role')
                    ->label('Role')
                    ->options(['dokter' => 'Dokter', 'perawat' => 'Perawat', 'admin' => 'Admin'])
                    ->disabled()
                    ->suffixIcon('heroicon-o-shield-check'),
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
