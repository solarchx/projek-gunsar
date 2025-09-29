<?php

namespace App\Http\Controllers;

use App\Models\Screening;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ScreeningController extends Controller
{
    public function index()
    {
        $screenings = Screening::orderBy('tanggal_screening', 'desc')->paginate(10);
        
        // Statistik untuk dashboard
        $totalScreenings = Screening::count();
        $todayScreenings = Screening::whereDate('tanggal_screening', Carbon::today())->count();
        $uniquePatients = Screening::distinct('NIK_pasien')->count('NIK_pasien');
        $averageTemp = Screening::avg('suhu_badan') ? number_format(Screening::avg('suhu_badan'), 1) : '0.0';

        return view('screening.index', compact(
            'screenings', 
            'totalScreenings', 
            'todayScreenings', 
            'uniquePatients', 
            'averageTemp'
        ));
    }

    public function create()
    {
        return view('screening.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'NIK_pasien' => 'required|digits:16',
            'tinggi_badan' => 'required|integer|min:50|max:250',
            'berat_badan' => 'required|integer|min:10|max:300',
            'suhu_badan' => 'required|numeric|min:30|max:45',
            'tekanan_darah' => 'required|string|max:10',
            'tanggal_screening' => 'required|date'
        ], [
            'NIK_pasien.digits' => 'NIK harus terdiri dari 16 digit angka.',
            'tinggi_badan.min' => 'Tinggi badan minimal 50 cm.',
            'tinggi_badan.max' => 'Tinggi badan maksimal 250 cm.',
            'berat_badan.min' => 'Berat badan minimal 10 kg.',
            'berat_badan.max' => 'Berat badan maksimal 300 kg.',
            'suhu_badan.min' => 'Suhu badan minimal 30°C.',
            'suhu_badan.max' => 'Suhu badan maksimal 45°C.',
        ]);

        Screening::create($request->all());

        return redirect()->route('screening.index')
            ->with('success', 'Data screening berhasil ditambahkan.');
    }

    public function show($id)
    {
        $screening = Screening::findOrFail($id);
        return view('screening.show', compact('screening'));
    }

    public function edit($id)
    {
        $screening = Screening::findOrFail($id);
        return view('screening.edit', compact('screening'));
    }

    public function update(Request $request, $id)
    {
        $screening = Screening::findOrFail($id);
        
        $request->validate([
            'NIK_pasien' => 'required|digits:16',
            'tinggi_badan' => 'required|integer|min:50|max:250',
            'berat_badan' => 'required|integer|min:10|max:300',
            'suhu_badan' => 'required|numeric|min:30|max:45',
            'tekanan_darah' => 'required|string|max:10',
            'tanggal_screening' => 'required|date'
        ], [
            'NIK_pasien.digits' => 'NIK harus terdiri dari 16 digit angka.',
            'tinggi_badan.min' => 'Tinggi badan minimal 50 cm.',
            'tinggi_badan.max' => 'Tinggi badan maksimal 250 cm.',
            'berat_badan.min' => 'Berat badan minimal 10 kg.',
            'berat_badan.max' => 'Berat badan maksimal 300 kg.',
            'suhu_badan.min' => 'Suhu badan minimal 30°C.',
            'suhu_badan.max' => 'Suhu badan maksimal 45°C.',
        ]);

        $screening->update($request->all());

        return redirect()->route('screening.index')
            ->with('success', 'Data screening berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $screening = Screening::findOrFail($id);
        $screening->delete();

        return redirect()->route('screening.index')
            ->with('success', 'Data screening berhasil dihapus.');
    }
}