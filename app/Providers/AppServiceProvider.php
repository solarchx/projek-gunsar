<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Filament\Facades\Filament;
use Filament\View\PanelsRenderHook;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void {}

    public function boot(): void
    {
        Filament::registerRenderHook(
            PanelsRenderHook::AUTH_LOGIN_FORM_BEFORE,
            fn() => Blade::render('
                    <div class="login-form-section">
                        <div class="login-info text-center">
                            <i class="fa-solid fa-user-shield text-5xl text-white mb-4"></i>
                            <h2 class="login-title">Login Admin</h2>
                            <p>Masuk untuk mengelola data tenaga medis dan sistem informasi Puskesmas Gunung Sari.</p>
                        </div>
            ')
        );

        Filament::registerRenderHook(
            PanelsRenderHook::AUTH_LOGIN_FORM_AFTER,
            fn() => Blade::render("@vite('resources/css/custom-login.css')") . '
                    </div>
            '
        );
    }
}
