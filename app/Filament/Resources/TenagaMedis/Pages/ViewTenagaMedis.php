<?php

namespace App\Filament\Resources\TenagaMedis\Pages;

use App\Filament\Resources\TenagaMedis\TenagaMedisResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewTenagaMedis extends ViewRecord
{
    protected static string $resource = TenagaMedisResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
