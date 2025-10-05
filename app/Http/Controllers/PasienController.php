<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PasienDashboardController extends Controller
{
    public function index()
    {
        // hanya bisa diakses jika sudah login
        if (Auth::check()) {
            return view('dashboard.pasien');
        }

        return redirect()->route('login');
    }
}
