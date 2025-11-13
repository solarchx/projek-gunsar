<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class PreventCrossLogin
{
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->isMethod('GET') && ($request->is('*/login') || $request->is('login'))) {
            return $next($request);
        }

        if (Auth::guard('admin')->check()) {
            if ($request->is('tenaga-medis*') || $request->is('pasien*')) {
                return redirect('/admin')->with('error', 'Anda sudah login sebagai Admin!');
            }
        }

        if (Auth::guard('tenaga_medis')->check()) {
            if ($request->is('admin*') || $request->is('pasien*')) {
                return redirect()->route('tenaga-medis.dashboard')
                    ->with('error', 'Anda sudah login sebagai Tenaga Medis!');
            }
        }

        if (Auth::guard('pasien')->check()) {
            if ($request->is('admin*') || $request->is('tenaga-medis*')) {
                return redirect()->route('pasien.dashboard')
                    ->with('error', 'Anda sudah login sebagai Pasien!');
            }
        }

        return $next($request);
    }
}