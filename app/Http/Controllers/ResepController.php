<?php

namespace App\Http\Controllers;

use App\Models\DetailResep;
use Illuminate\Http\Request;
use App\Models\Obat;
use App\Models\Resep;
use Illuminate\Support\Str;
use Barryvdh\DomPDF\Facade\Pdf;


class ResepController extends Controller
{
    public function index()
    {
        $reseps = Resep::with('detailReseps.obat')->get();
        return view('dokterumum.list-resep', compact('reseps'));
    }

    public function create()
    {
        $obats = Obat::all();

        $kelompok = [
            'Obat Padat' => ['tablet', 'kapsul'],
            'Obat Cair' => ['sirup', 'cairan', 'injeksi'],
            'Obat Oles' => ['salep'],
        ];

        $obatKelompok = [];
        foreach ($kelompok as $kelompokNama => $subKategori) {
            $obatKelompok[$kelompokNama] = $obats->filter(function ($obat) use ($subKategori) {
                return in_array($obat->kategori, $subKategori);
            })->groupBy('kategori');
        }

        return view('dokterumum.resep', compact('obatKelompok'));
    }

    public function store(Request $request)
    {
        $resep = Resep::create([
            'NIK_pasien'       => $request->NIK_pasien,
            'NIP_dokter'       => $request->NIP_dokter,
            'id_rekam_medis'   => $request->id_rekam_medis,
            'tanggal'          => $request->tanggal,
            'obat_racikan'     => $request->obat_racikan,
            'obat_rekomendasi' => $request->obat_rekomendasi,
        ]);

        if ($request->has('obat')) {
            foreach ($request->obat as $subKategori => $items) {
                foreach ($items as $obat) {
                    if (!empty($obat['id_obat']) && $obat['jumlah'] > 0) {
                        DetailResep::create([
                            'id_resep' => $resep->id,
                            'id_obat'  => $obat['id_obat'],
                            'jumlah'   => $obat['jumlah'],
                        ]);
                    }
                }
            }
        }

        return redirect()->route('resep.index')->with(['success' => 'Resep berhasil ditambahkan!']);
    }
    
    public function edit($id)
    {
        $resep = Resep::with('detailReseps.obat')->findOrFail($id);
        $obats = Obat::all();

        $kelompok = [
            'Obat Padat' => ['tablet', 'kapsul'],
            'Obat Cair' => ['sirup', 'cairan', 'injeksi'],
            'Obat Oles' => ['salep'],
        ];

        $obatKelompok = [];
        foreach ($kelompok as $kelompokNama => $subKategori) {
            $obatKelompok[$kelompokNama] = $obats->filter(function ($obat) use ($subKategori) {
                return in_array($obat->kategori, $subKategori);
            })->groupBy('kategori');
        }
        return view('dokterumum.resep-edit', compact('resep', 'obatKelompok'));
    }

    public function update(Request $request, $id)
    {
        // $request->validate([
        //     'NIK_pasien'       => 'required|string',
        //     'NIP_dokter'       => 'required|string',
        //     'tanggal'          => 'required|date',
        //     'obat_racikan'     => 'nullable|string',
        //     'obat_rekomendasi' => 'nullable|string',
        //     'obat.*.*.id_obat' => 'nullable|exists:obats,id',
        //     'obat.*.*.jumlah'  => 'nullable|integer|min:1',
        // ]);

        $resep = Resep::findOrFail($id);
        $resep->update([
            'NIK_pasien'       => $request->NIK_pasien,
            'NIP_dokter'       => $request->NIP_dokter,
            'tanggal'          => $request->tanggal,
            'obat_racikan'     => $request->obat_racikan,
            'obat_rekomendasi' => $request->obat_rekomendasi,
        ]);

        $resep->detailReseps()->delete();

        if ($request->has('obat')) {
            foreach ($request->obat as $subKategori => $items) {
                foreach ($items as $obat) {
                    if (!empty($obat['id_obat']) && $obat['jumlah'] > 0) {
                        DetailResep::create([
                            'id_resep' => $resep->id,
                            'id_obat'  => $obat['id_obat'],
                            'jumlah'   => $obat['jumlah'],
                        ]);
                    }
                }
            }
        }

        return redirect()->route('resep.index')->with('success', 'Resep berhasil diperbarui!');
    }

    public function preview($id)
    {
        $resep = Resep::with('detailReseps.obat')->findOrFail($id);

        $pdf = Pdf::loadView('dokterumum.pdf', compact('resep'));
        return $pdf->stream('resep-' . $resep->NIK_pasien . '.pdf');
    }


    public function download($id)
    {
        $resep = Resep::with('detailReseps.obat')->findOrFail($id);

        $pdf = Pdf::loadView('dokterumum.pdf', compact('resep'));
        return $pdf->download('resep-' . $resep->NIK_pasien . '.pdf');
    }

    public function destroy(string $id)
    {
        $resep = Resep::findOrFail($id);
        $resep->delete();
        return redirect()->route('resep.index')->with(['success' => 'Data resep berhasil dihapus!']);
    }
}
