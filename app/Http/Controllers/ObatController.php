<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use Illuminate\Http\Request;

class ObatController extends Controller
{
    public function index()
    {
        $obat = Obat::paginate(10);
        return view('obat.index', compact('obat'));
    }

    public function create()
    {
        return view('obat.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_obat' => 'required|string|max:255',
            'kategori' => 'required|string|max:255',
            'stok' => 'required|integer|min:0',
            'tanggal_kadaluarsa' => 'required|date',
            'harga_beli' => 'required|integer|min:0',
            'harga_jual' => 'required|integer|min:0',
            'deskripsi' => 'nullable|string',
            'waktu_minum' => 'required|string|max:255',
            'frekuensi' => 'required|string|max:255',
            'dosis' => 'required|string|max:255',
            'catatan_penting' => 'nullable|string'
        ]);

        Obat::create($validated);

        return redirect()->route('obat.index')
            ->with('success', 'Obat berhasil ditambahkan!');
    }

    public function show(Obat $obat)
    {
        return view('obat.show', compact('obat'));
    }

    public function edit(Obat $obat)
    {
        return view('obat.edit', compact('obat'));
    }

    public function update(Request $request, Obat $obat)
    {
        $validated = $request->validate([
            'nama_obat' => 'required|string|max:255',
            'kategori' => 'required|string|max:255',
            'stok' => 'required|integer|min:0',
            'tanggal_kadaluarsa' => 'required|date',
            'harga_beli' => 'required|integer|min:0',
            'harga_jual' => 'required|integer|min:0',
            'deskripsi' => 'nullable|string',
            'waktu_minum' => 'required|string|max:255',
            'frekuensi' => 'required|string|max:255',
            'dosis' => 'required|string|max:255',
            'catatan_penting' => 'nullable|string'
        ]);

        $obat->update($validated);

        return redirect()->route('obat.index')
            ->with('success', 'Data obat berhasil diperbarui!');
    }

    public function destroy(Obat $obat)
    {
        $obat->delete();

        return redirect()->route('obat.index')
            ->with('success', 'Obat berhasil dihapus!');
    }
}