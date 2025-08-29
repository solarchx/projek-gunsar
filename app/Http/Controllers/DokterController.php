<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\Poli;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    // Menampilkan semua dokter
    public function index()
    {
        $dokters = Dokter::with('poli')->get();
        return view('dokter.index', compact('dokters'));
    }

    // Menampilkan form tambah dokter
    public function create()
    {
        $polis = Poli::all();
        return view('dokter.create', compact('polis'));
    }

    // Menyimpan dokter baru
    public function store(Request $request)
    {
        $request->validate([
            'nip' => 'required|string|max:20|unique:dokters,nip',
            'nama_dokter' => 'required|string|max:255',
            'jabatan_dokter' => 'required|string|max:255',
            'poli_id' => 'required|exists:polis,id'
        ]);

        Dokter::create($request->all());

        return redirect()->route('dokter.index')
            ->with('success', 'Dokter berhasil ditambahkan');
    }

    // Menampilkan detail dokter
    public function show($id)
    {
        $dokter = Dokter::with('poli')->findOrFail($id);
        return view('dokter.show', compact('dokter'));
    }

    // Menampilkan form edit dokter
    public function edit($id)
    {
        $dokter = Dokter::findOrFail($id);
        $polis = Poli::all();
        return view('dokter.edit', compact('dokter', 'polis'));
    }

    // Update dokter
    public function update(Request $request, $id)
    {
        $dokter = Dokter::findOrFail($id);
        
        $request->validate([
            'nip' => 'required|string|max:20|unique:dokters,nip,' . $id,
            'nama_dokter' => 'required|string|max:255',
            'jabatan_dokter' => 'required|string|max:255',
            'poli_id' => 'required|exists:polis,id'
        ]);

        $dokter->update($request->all());

        return redirect()->route('dokter.index')
            ->with('success', 'Dokter berhasil diupdate');
    }

    // Hapus dokter
    public function destroy($id)
    {
        $dokter = Dokter::findOrFail($id);
        $dokter->delete();

        return redirect()->route('dokter.index')
            ->with('success', 'Dokter berhasil dihapus');
    }
}