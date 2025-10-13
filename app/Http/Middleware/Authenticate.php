<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    protected function redirectTo($request): ?string
    {
        if (! $request->expectsJson()) {
            if ($request->is('tenaga-medis/*')) {
                return route('tenaga-medis.login');
            }

            if ($request->is('pasien/*')) {
                return route('pasien.login');
            }

            return route('login');
        }

        return null;
    }
}
