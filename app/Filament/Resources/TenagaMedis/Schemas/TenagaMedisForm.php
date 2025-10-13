<?php

namespace App\Filament\Resources\TenagaMedis\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class TenagaMedisForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nip')
                    ->required(),
                TextInput::make('nama')
                    ->required(),
                TextInput::make('jabatan')
                    ->required(),
                TextInput::make('password')
                    ->password()
                    ->required(),
                Select::make('role')
                    ->options(['dokter' => 'Dokter', 'perawat' => 'Perawat', 'farmasi' => 'Farmasi', 'staff' => 'Staff'])
                    ->required(),
            ]);
    }
}
