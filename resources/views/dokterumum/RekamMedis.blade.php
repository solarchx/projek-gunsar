@extends('layout')

@section('konten')
<div class="container mt-4">
  <!-- Header dengan gradient yang lebih aesthetic -->
  <div class="mb-4 p-4 rounded-4 shadow-sm text-white" style="background: linear-gradient(135deg, #3fbbc0, #2caeb2, #1a9fa4);">
    <div class="d-flex justify-content-between align-items-center">
      <div>
        <h2 class="mb-1 fw-light"><i class="bi bi-heart-pulse me-2"></i>Manajemen Pasien</h2>
        <p class="mb-0 opacity-90">Daftar pasien dan screening medis terintegrasi</p>
      </div>
      <div class="bg-white p-2 rounded-circle shadow">
        <i class="bi bi-activity fs-3" style="color: #3fbbc0 !important;"></i>
      </div>
    </div>
  </div>

  <!-- Kolom Pencarian dengan desain lebih aesthetic -->
  <div class="card shadow-sm border-0 rounded-4 mb-4 overflow-hidden">
    <div class="card-body p-3" style="background: #f8fafc;">
      <div class="d-flex justify-content-between align-items-center">
        <div class="d-flex align-items-center w-75">
          <div class="input-group rounded-4">
            <span class="input-group-text bg-white border-0">
              <i class="bi bi-search text-muted"></i>
            </span>
            <input type="text" id="searchNIK" 
                   class="form-control border-0 shadow-none ps-0" 
                   placeholder="Cari berdasarkan NIK atau nama pasien...">
          </div>
        </div>
        <div>
          <span class="badge rounded-pill px-3 py-2 text-white shadow-sm" style="background: linear-gradient(135deg, #3fbbc0, #2caeb2);">
            <i class="bi bi-people-fill me-1"></i> 
            <span id="patientCount">2</span> Pasien Ditemukan
          </span>
        </div>
      </div>
    </div>
  </div>

  <!-- Tabel Pasien dengan desain lebih aesthetic -->
  <div class="card shadow-lg border-0 rounded-4 overflow-hidden">
    <div class="card-body p-0">
      <div class="table-responsive">
        <table class="table table-hover align-middle mb-0">
          <thead class="text-white" style="background: linear-gradient(135deg, #3fbbc0, #2caeb2);">
            <tr>
              <th class="py-3 ps-4" style="width: 50px;">No</th>
              <th>NIK</th>
              <th>Nama Pasien</th>
              <th>Poli</th>
              <th>Status</th>
              <th class="text-center pe-4">Aksi</th>
            </tr>
          </thead>
          <tbody id="riwayatTable">
            <tr class="border-bottom">
              <td class="text-center fw-bold ps-4">
                <span class="badge rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 30px; height: 30px; background-color: rgba(63, 187, 192, 0.1); color: #3fbbc0;">
                  1
                </span>
              </td>
              <td class="text-muted">3212345678905678</td>
              <td>
                <div class="d-flex align-items-center">
                  <div class="rounded-circle p-2 me-2" style="background: linear-gradient(135deg, #E8F6F6, #D1EEED);">
                    <i class="bi bi-person-fill" style="color: #2caeb2;"></i>
                  </div>
                  <div>
                    <div class="fw-semibold">Siti Aisyah</div>
                    <small class="text-muted">Perempuan, 32 tahun</small>
                  </div>
                </div>
              </td>
              <td>
                <span class="badge px-3 py-2 rounded-pill" style="background: rgba(63, 187, 192, 0.1); color: #3fbbc0;">
                  <i class="bi bi-tooth me-1"></i> Poli Gigi
                </span>
              </td>
              <td>
                <div class="d-flex align-items-center">
                  <span class="badge bg-success bg-opacity-10 text-success px-2 py-1 rounded-pill me-2">
                    <i class="bi bi-circle-fill me-1" style="font-size: 6px;"></i> Aktif
                  </span>
                  <span class="text-danger small">
                    <i class="bi bi-exclamation-circle me-1"></i> Sakit Gigi
                  </span>
                </div>
              </td>
              <td class="text-center pe-4">
                <button class="btn btn-sm text-white shadow-sm px-3 rounded-3" style="background: linear-gradient(135deg, #3fbbc0, #2caeb2);" 
                        data-bs-toggle="modal" data-bs-target="#detailModal2">
                  <i class="bi bi-clipboard2-pulse me-1"></i> Screening
                </button>
                <a href="/dokterumum/RekamMedisdetail" 
                   class="btn btn-sm btn-light ms-1 shadow-sm px-3 rounded-3 border">
                  <i class="bi bi-info-circle me-1"></i> Detail
                </a>
              </td>
            </tr>
            <!-- Data tambahan untuk contoh -->
            <tr class="border-bottom">
              <td class="text-center fw-bold ps-4">
                <span class="badge rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 30px; height: 30px; background-color: rgba(63, 187, 192, 0.1); color: #3fbbc0;">
                  2
                </span>
              </td>
              <td class="text-muted">3271234567890123</td>
              <td>
                <div class="d-flex align-items-center">
                  <div class="rounded-circle p-2 me-2" style="background: linear-gradient(135deg, #E8F6F6, #D1EEED);">
                    <i class="bi bi-person-fill" style="color: #2caeb2;"></i>
                  </div>
                  <div>
                    <div class="fw-semibold">Budi Santoso</div>
                    <small class="text-muted">Laki-laki, 45 tahun</small>
                  </div>
                </div>
              </td>
              <td>
                <span class="badge px-3 py-2 rounded-pill" style="background: rgba(63, 187, 192, 0.1); color: #3fbbc0;">
                  <i class="bi bi-heart-pulse me-1"></i> Poli Umum
                </span>
              </td>
              <td>
                <div class="d-flex align-items-center">
                  <span class="badge bg-warning bg-opacity-10 text-warning px-2 py-1 rounded-pill me-2">
                    <i class="bi bi-circle-fill me-1" style="font-size: 6px;"></i> Menunggu
                  </span>
                  <span class="text-danger small">
                    <i class="bi bi-exclamation-circle me-1"></i> Hipertensi
                  </span>
                </div>
              </td>
              <td class="text-center pe-4">
                <button class="btn btn-sm text-white shadow-sm px-3 rounded-3" style="background: linear-gradient(135deg, #3fbbc0, #2caeb2);" 
                        data-bs-toggle="modal" data-bs-target="#detailModal2">
                  <i class="bi bi-clipboard2-pulse me-1"></i> Screening
                </button>
                <a href="/dokterumum/RekamMedisdetail" 
                   class="btn btn-sm btn-light ms-1 shadow-sm px-3 rounded-3 border">
                  <i class="bi bi-info-circle me-1"></i> Detail
                </a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  
  <!-- Pagination dengan desain lebih aesthetic -->
  <nav aria-label="Page navigation" class="mt-4">
    <ul class="pagination justify-content-center">
      <li class="page-item">
        <a class="page-link rounded-start-3 border-0 shadow-sm" href="#" tabindex="-1" aria-disabled="true" style="color: #3fbbc0;">
          <i class="bi bi-chevron-left"></i>
        </a>
      </li>
      <li class="page-item">
        <a class="page-link border-0 shadow-sm text-white mx-1" href="#" style="background: linear-gradient(135deg, #3fbbc0, #2caeb2);">1</a>
      </li>
      <li class="page-item">
        <a class="page-link border-0 shadow-sm mx-1" href="#" style="color: #3fbbc0;">2</a>
      </li>
      <li class="page-item">
        <a class="page-link border-0 shadow-sm mx-1" href="#" style="color: #3fbbc0;">3</a>
      </li>
      <li class="page-item">
        <a class="page-link rounded-end-3 border-0 shadow-sm" href="#" style="color: #3fbbc0;">
          <i class="bi bi-chevron-right"></i>
        </a>
      </li>
    </ul>
  </nav>
</div>

<!-- Modal Screening Pasien dengan desain lebih aesthetic -->
<div class="modal fade" id="detailModal2" tabindex="-1" aria-labelledby="detailModalLabel2" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content shadow-lg border-0 rounded-4 overflow-hidden">
      <div class="modal-header text-white" style="background: linear-gradient(135deg, #3fbbc0, #2caeb2);">
        <h5 class="modal-title">
          <i class="bi bi-clipboard2-pulse me-2"></i> Screening Awal - Siti Aisyah
        </h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <div class="row mb-4">
          <div class="col-md-6">
            <div class="d-flex align-items-center mb-3">
              <div class="rounded-circle p-2 me-3" style="background: rgba(255, 255, 255, 0.2);">
                <i class="bi bi-person text-white"></i>
              </div>
              <div>
                <small class="text-white-50">Nama Dokter</small>
                <div class="fw-semibold text-white">dr. Andi</div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="d-flex align-items-center mb-3">
              <div class="rounded-circle p-2 me-3" style="background: rgba(255, 255, 255, 0.2);">
                <i class="bi bi-building text-white"></i>
              </div>
              <div>
                <small class="text-white-50">Poli</small>
                <div class="fw-semibold text-white">Poli Umum</div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="row mb-4">
          <div class="col-md-6">
            <div class="card border-0 mb-3 rounded-3 shadow-sm" style="background: #f8fafc;">
              <div class="card-body py-3">
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <small class="text-muted">Tinggi Badan</small>
                    <div class="fw-semibold" style="color: #3fbbc0;">170 cm</div>
                  </div>
                  <div class="rounded-circle p-2" style="background: rgba(63, 187, 192, 0.1);">
                    <i class="bi bi-arrow-up" style="color: #3fbbc0;"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card border-0 mb-3 rounded-3 shadow-sm" style="background: #f8fafc;">
              <div class="card-body py-3">
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <small class="text-muted">Berat Badan</small>
                    <div class="fw-semibold" style="color: #3fbbc0;">65 kg</div>
                  </div>
                  <div class="rounded-circle p-2" style="background: rgba(63, 187, 192, 0.1);">
                    <i class="bi bi-speedometer2" style="color: #3fbbc0;"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="row mb-4">
          <div class="col-md-6">
            <div class="card border-0 mb-3 rounded-3 shadow-sm" style="background: #f8fafc;">
              <div class="card-body py-3">
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <small class="text-muted">Suhu</small>
                    <div class="fw-semibold" style="color: #3fbbc0;">37.2°C</div>
                  </div>
                  <div class="rounded-circle p-2" style="background: rgba(63, 187, 192, 0.1);">
                    <i class="bi bi-thermometer-half" style="color: #3fbbc0;"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card border-0 mb-3 rounded-3 shadow-sm" style="background: #f8fafc;">
              <div class="card-body py-3">
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <small class="text-muted">Tensi</small>
                    <div class="fw-semibold" style="color: #3fbbc0;">120/80 mmHg</div>
                  </div>
                  <div class="rounded-circle p-2" style="background: rgba(63, 187, 192, 0.1);">
                    <i class="bi bi-heart-pulse" style="color: #3fbbc0;"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="card border-0 mb-3 rounded-3 shadow-sm" style="background: #f8fafc;">
          <div class="card-body py-3">
            <div class="d-flex">
              <div class="rounded-circle p-2 me-3" style="background: rgba(63, 187, 192, 0.1);">
                <i class="bi bi-exclamation-triangle" style="color: #3fbbc0;"></i>
              </div>
              <div>
                <small class="text-muted">Alergi</small>
                <div class="fw-semibold" style="color: #3fbbc0;">Tidak ada</div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="card border-0 mb-3 rounded-3 shadow-sm" style="background: #f8fafc;">
          <div class="card-body py-3">
            <div class="d-flex">
              <div class="rounded-circle p-2 me-3" style="background: rgba(63, 187, 192, 0.1);">
                <i class="bi bi-chat-dots" style="color: #3fbbc0;"></i>
              </div>
              <div>
                <small class="text-muted">Keluhan</small>
                <div class="fw-semibold" style="color: #3fbbc0;">Badan pegal dan panas</div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="card border-0 rounded-3 shadow-sm" style="background: #f8fafc;">
          <div class="card-body py-3">
            <div class="d-flex">
              <div class="rounded-circle p-2 me-3" style="background: rgba(63, 187, 192, 0.1);">
                <i class="bi bi-hospital" style="color: #3fbbc0;"></i>
              </div>
              <div>
                <small class="text-muted">Rujukan</small>
                <div class="fw-semibold" style="color: #3fbbc0;">RSUD Cirebon</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer border-0">
        <button type="button" class="btn btn-light rounded-3 px-4" data-bs-dismiss="modal">Tutup</button>
        <button type="button" class="btn text-white rounded-3 px-4 shadow-sm" style="background: linear-gradient(135deg, #3fbbc0, #2caeb2);">Simpan Perubahan</button>
      </div>
    </div>
  </div>
</div>

<!-- Menambahkan Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

<style>
  body {
    background-color: #f8fafc;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  }
  
  .table th {
    border-top: none;
    font-weight: 600;
    font-size: 0.9rem;
    text-transform: uppercase;
    letter-spacing: 0.5px;
  }
  
  .table td {
    border-color: #f0f0f0;
    vertical-align: middle;
    padding: 1rem 0.5rem;
  }
  
  .card {
    transition: transform 0.2s, box-shadow 0.2s;
  }
  
  .card:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1) !important;
  }
  
  .btn {
    border-radius: 8px;
    font-weight: 500;
    transition: all 0.2s;
  }
  
  .btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
  }
  
  .page-link {
    color: #3fbbc0;
    transition: all 0.2s;
  }
  
  .page-link:hover {
    color: #2caeb2;
    background-color: #f8fafc;
  }
  
  .input-group:focus-within {
    box-shadow: 0 0 0 3px rgba(63, 187, 192, 0.25);
    border-radius: 12px;
  }
  
  .modal-header {
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
  }
  
  .modal-footer {
    border-top: 1px solid #f0f0f0;
    background-color: #f8fafc;
  }
</style>

<script>
  document.getElementById("searchNIK").addEventListener("keyup", function () {
    let input = this.value.toLowerCase();
    let rows = document.querySelectorAll("#riwayatTable tr");
    let visibleCount = 0;

    rows.forEach(function (row) {
      let nik = row.cells[1].textContent.toLowerCase();
      let name = row.cells[2].textContent.toLowerCase();
      if (nik.includes(input) || name.includes(input) || input === "") {
        row.style.display = "";
        visibleCount++;
      } else {
        row.style.display = "none";
      }
    });
    
    // Update patient count
    document.getElementById("patientCount").textContent = visibleCount;
  });
</script>

@endsection