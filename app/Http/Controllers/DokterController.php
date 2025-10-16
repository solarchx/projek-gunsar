<?php
// app/Http/Controllers/DokterController.php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\Poli;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    public function index()
    {
        $dokters = Dokter::with('poli')->get();
        return view('dokter.index', compact('dokters'));
    }

    public function create()
    {
        $polis = Poli::all();
        return view('dokter.create', compact('polis'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nip' => 'required|digits:16|unique:dokters,nip',
            'nama_dokter' => 'required|string|max:100',
            'jabatan_dokter' => 'required|string|max:50',
            'poli_id' => 'required|exists:polis,id'
        ], [
            'nip.digits' => 'NIP harus terdiri dari 16 digit angka.',
            'nip.unique' => 'NIP sudah terdaftar.',
            'poli_id.exists' => 'Poli yang dipilih tidak valid.'
        ]);

        Dokter::create($request->all());

        return redirect()->route('dokter.index')
            ->with('success', 'Data dokter berhasil ditambahkan.');
    }

    public function show($id)
    {
        $dokter = Dokter::with('poli')->findOrFail($id);
        return view('dokter.show', compact('dokter'));
    }

    public function edit($id)
    {
        $dokter = Dokter::findOrFail($id);
        $polis = Poli::all();
        return view('dokter.edit', compact('dokter', 'polis'));
    }

    public function update(Request $request, $id)
    {
        $dokter = Dokter::findOrFail($id);
        
        $request->validate([
            'nip' => 'required|digits:16|unique:dokters,nip,' . $id,
            'nama_dokter' => 'required|string|max:100',
            'jabatan_dokter' => 'required|string|max:50',
            'poli_id' => 'required|exists:polis,id'
        ], [
            'nip.digits' => 'NIP harus terdiri dari 16 digit angka.',
            'nip.unique' => 'NIP sudah terdaftar.',
            'poli_id.exists' => 'Poli yang dipilih tidak valid.'
        ]);

        $dokter->update($request->all());

        return redirect()->route('dokter.index')
            ->with('success', 'Data dokter berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $dokter = Dokter::findOrFail($id);
        $dokter->delete();

        return redirect()->route('dokter.index')
            ->with('success', 'Data dokter berhasil dihapus.');
    }
}