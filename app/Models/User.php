<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;

class User extends Authenticatable implements FilamentUser
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'email',
        'name',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    // app/Models/User.php
    public function canAccessPanel(Panel $panel): bool
    {
        return true; // ALLOW SEMUA DULU
    }

    // HAPUS method getFilamentHomeUrl()

    // app/Providers/AppServiceProvider.php  
    public function register(): void
    {
        // COMMENT INI
        // $this->app->singleton(LoginResponseContract::class, LoginResponse::class);
    }

    public function getFilamentName(): string
    {
        return $this->name ?? 'User';
    }
}
