<?php

namespace App\Http\Controllers;

use App\Models\Farmasi;
use Illuminate\Http\Request;

class FarmasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $farmasis = Farmasi::all();
        return view('farmasi.index', compact('farmasis'));
    }   

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('farmasi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_obat' => 'required|string|max:255',
            'jenis_obat' => 'required|string|max:50',
            'no_obat' => 'required|string|max:50|unique:farmasis,no_obat',
            'stok_obat' => 'required|integer|min:0',
        ]);

        Farmasi::create($request->only('nama_obat','jenis_obat','no_obat','stok_obat'));

        return redirect()->route('farmasi.index')->with('success','Obat berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $obat = Farmasi::findOrFail($id);
        return view('farmasi.show', compact('obat'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $obat = Farmasi::findOrFail($id);
        return view('farmasi.edit', compact('obat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_obat' => 'required|string|max:255',
            'jenis_obat' => 'required|string|max:50',
            'no_obat' => 'required|string|max:50|unique:farmasis,no_obat,' . $id,
            'stok_obat' => 'required|integer|min:0',
        ]);

        $obat = Farmasi::findOrFail($id);
        $obat->update($request->only('nama_obat','jenis_obat','no_obat','stok_obat'));

        return redirect()->route('farmasi.index')->with('success','Obat berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $obat = Farmasi::findOrFail($id);
        $obat->delete();

        return redirect()->route('farmasi.index')->with('success','Obat berhasil dihapus');
    }
}