<?php

namespace App\Http\Controllers;

use App\Models\RekamMedis;
use App\Models\Penyakit;
use App\Models\Resep;
use App\Models\Screening;
use Illuminate\Http\Request;

class RekamMedisController extends Controller
{

    public function index()
    {
        $rekamMediss = RekamMedis::get();
        return view('dokterumum.listDiagnosa', compact('rekamMediss'));
    }

    public function rekamMedis()
    {
        $rekamMediss = RekamMedis::get();
        $screenings = Screening::get();
        return view('RekamMedis', compact('rekamMediss', 'screenings'));
    }

    public function create(Request $request)
    {
        $penyakits = Penyakit::all();
        $id_screening = $request->query('id_screening');
        $screening = $id_screening ? Screening::find($id_screening) : null;

        return view('dokterumum.formDiagnosa', compact('penyakits', 'id_screening', 'screening'));
    }

    public function store(Request $request)
    {
        $idPenyakit = $request->id_penyakit;
        if ($request->id_penyakit == 'lainnya') {
            $penyakitBaru = Penyakit::firstOrCreate(
                ['nama' => $request->penyakit_baru],
                ['nama' => $request->penyakit_baru]
            );

            $idPenyakit = $penyakitBaru->id;
        } else {
            $idPenyakit = $request->id_penyakit;
        }

        $rekamMedis = RekamMedis::create([
            'NIK_pasien'     => $request->NIK_pasien,
            'id_screening' => $request->id_screening,
            'NIP_dokter'     => $request->NIP_dokter,
            'keluhan'         => $request->keluhan,
            'riwayat_penyakit'         => $request->riwayat_penyakit,
            'id_penyakit'         => $idPenyakit,
            'catatan'         => $request->catatan,
            'terapi_tindakan'         => $request->terapi_tindakan,
        ]);

        if ($request->action === 'buat_resep') {
            return redirect()->route('resep.create', ['id_rekam_medis' => $rekamMedis->id]);
        }

        return response()->json([
            'message' => 'Rekam medis berhasil disimpan',
        ]);
    }

    public function edit($id)
    {
        $rekamMedis = RekamMedis::findOrFail($id);
        $s = RekamMedis::findOrFail($id);
        $penyakits = Penyakit::all();

        return view('dokterumum.editDiagnosa', compact('rekamMedis', 'penyakits'));
    }

    public function show($id)
    {
        $rekamMedis = RekamMedis::with([
            'penyakit',
            'resep.detailReseps.obat',
            'screening'
        ])->findOrFail($id);

        return view('RekamMedisDetail', compact('rekamMedis'));
    }

    public function update(Request $request, $id)
    {

        $idPenyakit = $request->id_penyakit;
        if ($request->id_penyakit == 'lainnya') {
            $penyakitBaru = Penyakit::firstOrCreate(
                ['nama' => $request->penyakit_baru],
                ['nama' => $request->penyakit_baru]
            );

            $idPenyakit = $penyakitBaru->id;
        } else {
            $idPenyakit = $request->id_penyakit;
        }

        $rekamMedis = RekamMedis::findOrFail($id);
        $rekamMedis->update([
            'NIK_pasien'     => $request->NIK_pasien,
            'id_screening' => $request->id_screening,
            'NIP_dokter'     => $request->NIP_dokter,
            'keluhan'         => $request->keluhan,
            'riwayat_penyakit'         => $request->riwayat_penyakit,
            'id_penyakit'         => $idPenyakit,
            'catatan'         => $request->catatan,
            'terapi_tindakan'         => $request->terapi_tindakan,
        ]);

        return redirect()->route('rekam-medis.index')->with('success', 'Rekam Medis berhasil diperbarui!');
    }

    public function destroy(string $id)
    {
        $rekamMedis = RekamMedis::findOrFail($id);
        $rekamMedis->delete();
        return redirect()->route('rekam-medis.index')->with(['success' => 'Data rekam medis berhasil dihapus!']);
    }
}
