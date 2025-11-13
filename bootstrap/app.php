<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'prevent.cross.login' => \App\Http\Middleware\PreventCrossLogin::class,
        ]);
        
        $middleware->redirectGuestsTo(function ($request) {
            if ($request->is('tenaga-medis*')) {
                return route('tenaga-medis.login');
            }
            if ($request->is('pasien*')) {
                return route('pasien.login');
            }
            if ($request->is('admin*')) {
                return route('filament.admin.auth.login');
            }
            return route('/'); 
        });
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();