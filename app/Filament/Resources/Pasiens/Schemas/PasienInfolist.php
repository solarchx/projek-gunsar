<?php

namespace App\Filament\Resources\Pasiens\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class PasienInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->schema([
            TextEntry::make('nama')
                ->label('Nama Lengkap')
                ->icon('heroicon-o-user-circle')
                ->size('lg')
                ->html()
                ->formatStateUsing(fn($state) => "
                    <div class='flex justify-center'>
                        <div class='bg-gray-100 rounded-xl px-4 py-3 shadow-sm text-center text-lg font-semibold w-3/4'>
                            {$state}
                        </div>
                    </div>
                "),

            TextEntry::make('nik')
                ->label('NIK')
                ->icon('heroicon-o-identification')
                ->html()
                ->formatStateUsing(fn($state) => "
                    <div class='flex justify-center'>
                        <div class='bg-gray-100 rounded-xl px-4 py-3 shadow-sm text-center text-lg font-semibold w-3/4'>
                            {$state}
                        </div>
                    </div>
                "),

            TextEntry::make('tanggal_lahir')
                ->label('Tanggal Lahir')
                ->icon('heroicon-o-calendar')
                ->date('d F Y')
                ->html()
                ->formatStateUsing(fn($state) => "
                    <div class='flex justify-center'>
                        <div class='bg-gray-100 rounded-xl px-4 py-3 shadow-sm text-center text-md font-medium w-3/4'>
                            {$state}
                        </div>
                    </div>
                "),

            TextEntry::make('jenis_kelamin')
                ->label('Jenis Kelamin')
                ->icon('heroicon-o-user')
                ->badge()
                ->color(fn($state) => $state === 'Laki-laki' ? 'success' : 'pink'),

            TextEntry::make('created_at')
                ->label('Dibuat Pada')
                ->icon('heroicon-o-clock')
                ->dateTime('d/m/Y H:i')
                ->html()
                ->formatStateUsing(fn($state) => "
                    <div class='flex justify-center'>
                        <div class='bg-gray-100 rounded-xl px-4 py-3 shadow-sm text-center text-sm font-medium w-3/4'>
                            {$state}
                        </div>
                    </div>
                "),

            TextEntry::make('updated_at')
                ->label('Terakhir Diperbarui')
                ->icon('heroicon-o-arrow-path')
                ->dateTime('d/m/Y H:i')
                ->html()
                ->formatStateUsing(fn($state) => "
                    <div class='flex justify-center'>
                        <div class='bg-gray-100 rounded-xl px-4 py-3 shadow-sm text-center text-sm font-medium w-3/4'>
                            {$state}
                        </div>
                    </div>
                "),
        ]);
    }
}
