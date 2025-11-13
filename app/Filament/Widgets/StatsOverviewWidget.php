<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Pasien;
use App\Models\TenagaMedis;

class StatsOverviewWidget extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Pasien', Pasien::count())
                ->description('Total pasien terdaftar')
                ->descriptionIcon('heroicon-m-user-group')
                ->color('success')
                ->chart([7, 3, 4, 5, 6, 3, 5, 3]),
            
            Stat::make('Total Tenaga Medis', TenagaMedis::count())
                ->description('Dokter & Perawat aktif')
                ->descriptionIcon('heroicon-m-identification')
                ->color('info'),
            
            Stat::make('Kunjungan Hari Ini', '24')
                ->description('Pasien yang berkunjung')
                ->descriptionIcon('heroicon-m-calendar')
                ->color('warning'),
        ];
    }
}