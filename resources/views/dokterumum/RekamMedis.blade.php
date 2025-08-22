@extends('layoutdokter')

@section('konten')
                <div class="container-fluid p-0">
  <!-- Header -->
  <div class="py-5 mb-4 text-white text-center shadow-sm"
       style="background-color: teal;">
    <h1 class="fw-bold mb-2">Rekam Medis</h1>
    <p class="mb-0 text-white-50">Kelola & pantau riwayat medis pasien dengan mudah</p>
  </div>

  <div class="container">
    <!-- Kolom Pencarian -->
    <div class="d-flex justify-content-end mb-4">
      <input type="text" id="searchNIK"
             class="form-control w-25 shadow-sm rounded-3 px-3"
             placeholder="🔍 Cari berdasarkan NIK..."
             maxlength="16">
    </div>

    <!-- Card Tabel -->
    <div class="card border-0 shadow-sm rounded-4">
      <div class="card-body p-0">
        <div class="table-responsive">
          <table class="table table-hover align-middle mb-0">
            <thead style="background:#f8f9fa;">
  <tr>
    <th class="py-3 text-center">#</th>
    <th class="py-3 text-center">NIK</th>
    <th class="py-3 text-center">Nama Pasien</th>
    <th class="py-3 text-center">Poli</th>
    <th class="py-3 text-center">Penyakit</th>
    <th class="py-3 text-center">Aksi</th>
  </tr>
</thead>

<tbody id="riwayatTable">
  <tr>
    <td class="text-center">1</td>
    <td class="text-center text-muted">3212345678905678</td>
    <td class="text-center fw-semibold">Siti Aisyah</td>
    <td class="text-center">
      <span class="badge bg-light text-dark border">Poli Gigi</span>
    </td>
    <td class="text-center">
      <span class="text-danger">Sakit Gigi</span>
    </td>
              <!-- Tombol Screening di tabel -->
<td class="text-center">
      <button class="btn btn-sm rounded-3 px-3 me-2 shadow-sm"
              style="background-color: teal; color: white; border:none;"
              data-bs-toggle="modal" data-bs-target="#screeningModal">
        Screening
      </button>
      <a href="/dokterumum/RekamMedisdetail"
         class="btn btn-sm btn-light border rounded-3 px-3 shadow-sm">
        Detail
      </a>
    </td>

<!-- Modal Screening Pasien -->
<!-- Modal Screening Pasien -->
<div class="modal fade" id="screeningModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content shadow-lg border-0 rounded-4 overflow-hidden">
      <div class="modal-header text-white" style="background-color: teal;">
        <h5 class="modal-title w-100 text-center">Screening Awal - Ahmad Fulan</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body bg-light">
        <div class="row g-3">

          <!-- Card Nama Dokter -->
          <div class="col-md-6">
            <div class="card shadow-sm border-0 rounded-3 h-100">
              <div class="card-body">
                <h6 class="fw-bold text-teal">👨‍⚕️ Nama Dokter</h6>
                <p class="mb-0">dr. Andi</p>
              </div>
            </div>
          </div>

          <!-- Card Poli -->
          <div class="col-md-6">
            <div class="card shadow-sm border-0 rounded-3 h-100">
              <div class="card-body">
                <h6 class="fw-bold text-teal">🏥 Poli</h6>
                <p class="mb-0">Poli Umum</p>
              </div>
            </div>
          </div>

          <!-- Card Tinggi -->
          <div class="col-md-6">
            <div class="card shadow-sm border-0 rounded-3 h-100">
              <div class="card-body">
                <h6 class="fw-bold text-teal">📏 Tinggi Badan</h6>
                <p class="mb-0">170 cm</p>
              </div>
            </div>
          </div>

          <!-- Card Berat -->
          <div class="col-md-6">
            <div class="card shadow-sm border-0 rounded-3 h-100">
              <div class="card-body">
                <h6 class="fw-bold text-teal">⚖️ Berat Badan</h6>
                <p class="mb-0">65 kg</p>
              </div>
            </div>
          </div>

          <!-- Card Suhu -->
          <div class="col-md-6">
            <div class="card shadow-sm border-0 rounded-3 h-100">
              <div class="card-body">
                <h6 class="fw-bold text-teal">🌡️ Suhu</h6>
                <p class="mb-0">37.2 °C</p>
              </div>
            </div>
          </div>

          <!-- Card Tensi -->
          <div class="col-md-6">
            <div class="card shadow-sm border-0 rounded-3 h-100">
              <div class="card-body">
                <h6 class="fw-bold text-teal">💓 Tensi</h6>
                <p class="mb-0">120/80 mmHg</p>
              </div>
            </div>
          </div>

          <!-- Card Alergi -->
          <div class="col-md-6">
            <div class="card shadow-sm border-0 rounded-3 h-100">
              <div class="card-body">
                <h6 class="fw-bold text-teal">🚫 Alergi</h6>
                <p class="mb-0">Tidak</p>
              </div>
            </div>
          </div>

          <!-- Card Keluhan -->
          <div class="col-md-6">
            <div class="card shadow-sm border-0 rounded-3 h-100">
              <div class="card-body">
                <h6 class="fw-bold text-teal">🤒 Keluhan</h6>
                <p class="mb-0">Badan pegal dan panas</p>
              </div>
            </div>
          </div>

          <!-- Card Rujukan -->
          <div class="col-12">
            <div class="card shadow-sm border-0 rounded-3 h-100">
              <div class="card-body">
                <h6 class="fw-bold text-teal">📑 Rujukan</h6>
                <p class="mb-0">RSUD Cirebon</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<style>
  .text-teal { color: teal; }
</style>


              </tr>
              <!-- Data lain -->
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<style>
  body {
    background-color: #f5f6fa;
    font-family: 'Inter', sans-serif;
    color: #2c3e50;
  }
  .table th {
    font-size: 0.85rem;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    color: #6c757d;
    font-weight: 600;
    border-bottom: 2px solid #dee2e6;
  }
  .table td {
    font-size: 0.95rem;
  }
  .btn {
    transition: 0.2s;
  }
  .btn:hover {
    transform: translateY(-1px);
  }
</style>

@endsection