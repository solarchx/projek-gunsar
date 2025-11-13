<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\TenagaMedis;

class AuthController extends Controller
{
    public function showTenagaMedisLogin()
    {
        return view('auth.tenaga-medis-login');
    }

    public function tenagaMedisLogin(Request $request)
    {
        $request->validate([
            'nip' => 'required',
            'password' => 'required',
        ]);

        $user = TenagaMedis::where('nip', $request->nip)->first();

        if (!$user) {
            return back()->withErrors(['nip' => 'NIP tidak ditemukan.']);
        }

        if (!Hash::check($request->password, $user->password)) {
            return back()->withErrors(['password' => 'Password salah.']);
        }

        Auth::guard('tenaga_medis')->login($user);

        //  switch ($user->role) {
        //     case 'dokter':
        //         return redirect()->route('dokter.dashboard');
        //     case 'perawat':
        //         return redirect()->route('perawat.dashboard');
        //     case 'laboran':
        //         return redirect()->route('laboran.dashboard');
        //     default:
        //         Auth::guard('tenaga_medis')->logout();
        //         return back()->withErrors(['nip' => 'Role tidak dikenali. Hubungi admin.']);
        // }

        return redirect()->route('tenaga-medis.dashboard')->with('success', 'Selamat Datang!');
    }

    public function tenagaMedisLogout(Request $request)
    {
        Auth::guard('tenaga_medis')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('tenaga-medis.login');
    }
}


/*

1. Validasi NIP harus numerik dan panjang tertentu
    $request->validate([
        'nip' => 'required|numeric|digits_between:4,10',
        'password' => 'required|min:6',
    ]);

2. Cegah brute-force login (misalnya 3x salah = timeout)
    // Gunakan middleware throttle
    // Route::post('/login', [AuthController::class, 'tenagaMedisLogin'])->middleware('throttle:3,1');

3. Pastikan akun aktif
    if (!$user->is_active) {
        return back()->withErrors(['nip' => 'Akun Anda belum diaktifkan oleh admin.']);
    }

4. Audit login (catat waktu login terakhir)
    $user->update(['last_login_at' => now()]);

5. Validasi role (misalnya hanya dokter boleh login di sini)
    if ($user->role !== 'dokter') {
        return back()->withErrors(['nip' => 'Anda tidak memiliki akses ke dashboard tenaga medis.']);
    }

*/
