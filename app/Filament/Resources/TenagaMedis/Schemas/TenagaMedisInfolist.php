<?php

namespace App\Filament\Resources\TenagaMedis\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class TenagaMedisInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
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
}
