@extends('layoutdokter')

@section('konten')
 <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-5 border-bottom">
                    <h1 class="h2">Dashboard Dokter Umum</h1>
                </div>
<div class="row mb-4">
    <div class="col-md-3">
        <div class="card shadow border">
            <div class="card-body text-center">
                <h5 class="card-title text-muted">Pasien Hari Ini</h5>
                <h3 class="text-dark">25</h3>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card shadow border">
            <div class="card-body text-center">
                <h5 class="card-title text-muted">Janji Temu</h5>
                <h3 class="text-dark">12</h3>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card shadow border">
            <div class="card-body text-center">
                <h5 class="card-title text-muted">Resep Dibuat</h5>
                <h3 class="text-dark">8</h3>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card shadow border">
            <div class="card-body text-center">
                <h5 class="card-title text-muted">Kontrol Ulang</h5>
                <h3 class="text-dark">5</h3>
            </div>
        </div>
    </div>
</div>

   <div class="row g-4">
    <div class="col-xl-3 col-md-6 d-flex">
        <div class="item-trans position-relative shadow p-3 bg-body rounded">
            <div class="icon"><i class="fas fa-user-injured icon"></i></div>
            <h4><a href="/dokterumum/FormDiagnosa" class="h4 stretched-link">Form Diagnosa</a></h4>
            <p>Pelayanan kesehatan menyeluruh untuk segala usia.</p>
        </div>
    </div>
    <div class="col-xl-3 col-md-6 d-flex">
        <div class="item-trans position-relative shadow p-3 bg-body rounded">
            <div class="icon"><i class="fas fa-tooth icon"></i></div>
            <h4><a href="/dokterumum/RekamMedis" class="h4 stretched-link">Riwayat Pemeriksaan</a></h4>
            <p>Senyum sehat dimulai dari perawatan gigi terbaik.</p>
        </div>
    </div>
    <div class="col-xl-3 col-md-6 d-flex">
        <div class="item-trans position-relative shadow p-3 bg-body rounded">
            <div class="icon"><i class="fas fa-child icon"></i></div>
            <h4><a href="" class="h4 stretched-link">Surat Rujukan</a></h4>
            <p>Perawatan khusus untuk si kecil yang tumbuh sehat.</p>
        </div>
    </div>
    <div class="col-xl-3 col-md-6 d-flex">
        <div class="item-trans position-relative shadow p-3 bg-body rounded">
            <div class="icon"><i class="fas fa-plus icon"></i></div>
            <h4><a href="/dokterumum/ResepObat" class="h4 stretched-link">Resep Obat</a></h4>
            <p>Obat terpercaya, layanan ramah, dan cepat.</p>
        </div>
    </div>
</div>
@endsection