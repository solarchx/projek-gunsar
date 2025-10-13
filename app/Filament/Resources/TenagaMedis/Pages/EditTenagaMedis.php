<?php

namespace App\Filament\Resources\TenagaMedis\Pages;

use App\Filament\Resources\TenagaMedis\TenagaMedisResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditTenagaMedis extends EditRecord
{
    protected static string $resource = TenagaMedisResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
