<?php

namespace App\Providers\Filament;

use Filament\Facades\Filament; 
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Pages\Dashboard;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Notifications\Notification;
use Filament\Support\Colors\Color;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->passwordReset()
            ->brandLogo('/assets/img/logo.png')
            ->favicon('assets/img/favicon.png')
            ->brandLogoHeight('2.5rem')
            ->colors([
                'primary' => Color::Teal,
            ])
            ->font('poppins')
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\Filament\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\Filament\Pages')
            ->pages([
                Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\Filament\Widgets')

            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
                \App\Http\Middleware\PreventCrossLogin::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ])
            ->authGuard('admin');
    }

    public function boot(): void
    {
        Filament::serving(function () {
            if (session('error')) {
                Notification::make()
                    ->title('⚠️ Akses Ditolak')
                    ->body(session('error'))
                    ->danger()
                    ->persistent()
                    ->send();
            }

            if (session('success')) {
                Notification::make()
                    ->title('✅ Berhasil')
                    ->body(session('success'))
                    ->success()
                    ->send();
            }
        });
    }
}
