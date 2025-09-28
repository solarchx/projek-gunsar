@extends('layoutdokter')
@section('konten')
<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rekam Medis</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <style>
    body {
      background-color: #f8fafc;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .gradient-header {
      background: linear-gradient(135deg, #3fbbc0, #2caeb2, #1a9fa4);
    }

    .table th {
      border-top: none;
      font-weight: 600;
      font-size: 0.9rem;
      text-transform: uppercase;
      letter-spacing: 0.5px;
      vertical-align: middle !important;
      text-align: center;
    }

    .table td {
      border-color: #f0f0f0;
      vertical-align: middle !important;
      text-align: center;
    }

    .patient-info-cell {
      text-align: left !important;
    }

    .status-cell {
      text-align: left !important;
    }

    .action-cell {
      text-align: center !important;
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

    .teal-badge {
      background: rgba(63, 187, 192, 0.1);
      color: #3fbbc0;
    }

    .number-badge {
      width: 30px;
      height: 30px;
      background-color: rgba(63, 187, 192, 0.1);
      color: #3fbbc0;
    }
  </style>
</head>
<div class="container mt-4">
  <!-- Header -->
  <!-- Tombol Tambah -->
  <!-- <div class="mb-3 text-end">
    <a href="{{ route('rekam-medis.create') }}"
      class="btn text-white shadow-sm px-4 rounded-3"
      style="background: linear-gradient(135deg, #3fbbc0, #2caeb2);">
      <i class="bi bi-plus-circle me-1"></i> Tambah Rekam Medis
    </a>
  </div> -->

  <!-- Search -->
  <div class="container mt-4">
    <!-- Header dengan gradient yang lebih aesthetic -->
    <div class="mb-4 p-4 rounded-4 shadow-sm text-white gradient-header">
      <div class="d-flex justify-content-between align-items-center">
        <div>
          <h2 class="mb-1 fw-light"><i class="bi bi-heart-pulse me-2"></i>Rekam Medis Pasien</h2>
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
              <span id="patientCount">{{ $rekamMediss->count() }}</span> Pasien
            </span>
          </div>
        </div>
      </div>
    </div>
    <!-- Tabel Rekam Medis -->
    <div class="card shadow-lg border-0 rounded-4 overflow-hidden">
      <div class="card-body p-0">
        <div class="table-responsive">
          <table class="table table-hover align-middle mb-0">
            <thead class="text-white gradient-header">
              <tr>
                <th class="py-3" style="width: 60px;">No</th>
                <th>NIK Pasien</th>
                <th>NIP Dokter</th>
                <th>Keluhan</th>
                <th>Riwayat Penyakit</th>
                <th>Penyakit</th>
                <th>Catatan</th>
                <th>Terapi</th>
                <th style="width: 220px;">Aksi</th>
              </tr>
            </thead>
            <tbody id="riwayatTable">
              @forelse($rekamMediss as $index => $rekamMedis)
              <tr class="border-bottom">
                <td>
                  <span class="badge rounded-circle d-inline-flex align-items-center justify-content-center mx-auto number-badge">
                    {{ $loop->iteration }}
                  </span>
                </td>
                <td class="text-muted">{{ $rekamMedis->NIK_pasien }}</td>
                <td class="text-muted">{{ $rekamMedis->NIP_dokter }}</td>
                <td><span class="badge px-3 py-2 rounded-pill teal-badge">{{ $rekamMedis->keluhan }}</span></td>
                <td><span class="badge px-3 py-2 rounded-pill teal-badge">{{ $rekamMedis->riwayat_penyakit }}</span></td>
                <td><span class="badge px-3 py-2 rounded-pill teal-badge">{{ $rekamMedis->penyakit->nama ?? 'Tidak diketahui' }}</span></td>
                <td>{{ $rekamMedis->catatan }}</td>
                <td>{{ $rekamMedis->terapi_tindakan }}</td>
                <td>
                  <div class="d-flex justify-content-center gap-1">
                    <a href="{{ route('rekam-medis.edit', $rekamMedis->id) }}"
                      class="btn btn-warning btn-sm shadow-sm rounded-3">
                      <i class="bi bi-pencil-square"></i> Edit
                    </a>
                    <form action="{{ route('rekam-medis.destroy', $rekamMedis->id) }}" method="POST" style="display:inline;">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger btn-sm shadow-sm rounded-3" onclick="return confirm('Yakin hapus?')">
                        <i class="bi bi-trash"></i> Hapus
                      </button>
                    </form>
                  </div>
                </td>
              </tr>
              @empty
              <tr>
                <td colspan="9" class="text-center">Belum ada rekam medis.</td>
              </tr>
              @endforelse
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

  <script>
    document.getElementById("searchNIK").addEventListener("keyup", function() {
      let input = this.value.toLowerCase();
      let rows = document.querySelectorAll("#riwayatTable tr");
      let visibleCount = 0;

      rows.forEach(function(row) {
        let nik = row.cells[1].textContent.toLowerCase();
        if (nik.includes(input) || input === "") {
          row.style.display = "";
          visibleCount++;
        } else {
          row.style.display = "none";
        }
      });

      document.getElementById("patientCount").textContent = visibleCount;
    });
  </script>
  @endsection
  </body>

</html>