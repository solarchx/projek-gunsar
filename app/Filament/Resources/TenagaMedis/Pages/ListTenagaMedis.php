<?php

namespace App\Filament\Resources\TenagaMedis\Pages;

use App\Filament\Resources\TenagaMedis\TenagaMedisResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListTenagaMedis extends ListRecords
{
    protected static string $resource = TenagaMedisResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()
            ->label('Buat Data Tenaga Medis Baru'),
        ];
    }
}
