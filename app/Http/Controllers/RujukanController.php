<?php

namespace App\Http\Controllers;

use App\Models\Rujukan;
use Illuminate\Http\Request;

class RujukanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
        'nama_lengkap' => 'required|string|max:255',
        'umur' => 'required|integer|min:0',
        'jenis_kelamin' => 'required|in:L,P',
        'no_rekam_medis' => 'required|string|max:100',
        'alamat' => 'required|string',
        'diagnosa_awal' => 'required|string',
        'dirujuk_ke' => 'required|string',
        'alasan_rujukan' => 'required|string',
        'nama_dokter' => 'required|string',
        'tanggal_rujukan' => 'required|date',
        'instansi_pengirim' => 'required|string'
    ]);

    Rujukan::create($validated);

    return response()->json(['message' => 'Data rujukan berhasil disimpan!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Rujukan $rujukan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rujukan $rujukan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rujukan $rujukan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rujukan $rujukan)
    {
        //
    }
}
