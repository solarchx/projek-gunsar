@extends('layoutdokter')
@section('konten')
<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Resep</title>
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

<body>
  <div class="container mt-4">
    <!-- Header -->
    <div class="mb-4 p-4 rounded-4 shadow-sm text-white gradient-header">
      <div class="d-flex justify-content-between align-items-center">
        <div>
          <h2 class="mb-1 fw-light"><i class="bi bi-capsule-pill me-2"></i>Daftar Resep</h2>
          <p class="mb-0 opacity-90">Data resep pasien dan detail obat</p>
        </div>
        <div class="bg-white p-2 rounded-circle shadow">
          <i class="bi bi-activity fs-3" style="color: #3fbbc0 !important;"></i>
        </div>
      </div>
    </div>

    <!-- Tombol Tambah -->
    <div class="mb-3 text-end">
      <a href="{{ route('resep.create') }}"
        class="btn text-white shadow-sm px-4 rounded-3"
        style="background: linear-gradient(135deg, #3fbbc0, #2caeb2);">
        <i class="bi bi-plus-circle me-1"></i> Tambah Resep
      </a>
    </div>

    <!-- Kolom Pencarian -->
    <div class="card shadow-sm border-0 rounded-4 mb-4 overflow-hidden">
      <div class="card-body p-3" style="background: #f8fafc;">
        <div class="d-flex justify-content-between align-items-center">
          <div class="d-flex align-items-center w-75">
            <div class="input-group rounded-4">
              <span class="input-group-text bg-white border-0">
                <i class="bi bi-search text-muted"></i>
              </span>
              <input type="text" id="searchResep"
                class="form-control border-0 shadow-none ps-0"
                placeholder="Cari NIK pasien, obat racikan, atau obat rekomendasi...">
            </div>
          </div>
          <div>
            <span class="badge rounded-pill px-3 py-2 text-white shadow-sm" style="background: linear-gradient(135deg, #3fbbc0, #2caeb2);">
              <i class="bi bi-clipboard2-pulse me-1"></i>
              <span id="resepCount">{{ $reseps->count() }}</span> Resep
            </span>
          </div>
        </div>
      </div>
    </div>

    <!-- Tabel Resep -->
    <div class="card shadow-lg border-0 rounded-4 overflow-hidden">
      <div class="card-body p-0">
        <div class="table-responsive">
          <table class="table table-hover align-middle mb-0">
            <thead class="text-white gradient-header">
              <tr>
                <th style="width: 60px;">No</th>
                <th>NIK Pasien</th>
                <th>NIP Dokter</th>
                <th>Tanggal</th>
                <th>Obat Racikan</th>
                <th>Obat Rekomendasi</th>
                <th>Detail Obat</th>
                <th style="width: 220px;">Aksi</th>
              </tr>
            </thead>
            <tbody id="resepTable">
              @forelse($reseps as $index => $resep)
              <tr>
                <td>
                  <span class="badge rounded-circle d-inline-flex align-items-center justify-content-center mx-auto number-badge">
                    {{ $loop->iteration }}
                  </span>
                </td>
                <td class="text-muted">{{ $resep->NIK_pasien }}</td>
                <td class="text-muted">{{ $resep->NIP_dokter }}</td>
                <td>{{ \Carbon\Carbon::parse($resep->tanggal)->translatedFormat('d F Y') }}</td>
                <td><span class="badge px-3 py-2 rounded-pill teal-badge">{{ $resep->obat_racikan }}</span></td>
                <td><span class="badge px-3 py-2 rounded-pill teal-badge">{{ $resep->obat_rekomendasi }}</span></td>
                <td>
                  <ul class="list-group">
                    @forelse($resep->detailReseps as $detail)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      {{ $detail->obat->nama_obat ?? 'Tidak diketahui' }}
                      <span class="badge bg-primary rounded-pill">x{{ $detail->jumlah }}</span>
                    </li>
                    @empty
                    <li class="list-group-item text-muted">Belum ada detail obat</li>
                    @endforelse
                  </ul>
                </td>
                <td>
                  <div class="d-flex justify-content-center gap-1">
                    <a href="{{ route('resep.preview', $resep->id) }}" target="_blank"
                      class="btn btn-success btn-sm shadow-sm rounded-3">
                      <i class="bi bi-eye"></i> Preview
                    </a>
                    <a href="{{ route('resep.download', $resep->id) }}"
                      class="btn btn-primary btn-sm shadow-sm rounded-3">
                      <i class="bi bi-download"></i> Download
                    </a>
                    <a href="{{ route('resep.edit', $resep->id) }}"
                      class="btn btn-warning btn-sm shadow-sm rounded-3">
                      <i class="bi bi-pencil-square"></i> Edit
                    </a>
                    <form action="{{ route('resep.destroy', $resep->id) }}" method="POST" style="display:inline;">
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
                <td colspan="8" class="text-center">Belum ada resep.</td>
              </tr>
              @endforelse
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <script>
    document.getElementById("searchResep").addEventListener("keyup", function() {
      let input = this.value.toLowerCase();
      let rows = document.querySelectorAll("#resepTable tr");
      let visibleCount = 0;

      rows.forEach(function(row) {
        let nik = row.cells[1].textContent.toLowerCase();
        let racikan = row.cells[4].textContent.toLowerCase();
        let rekom = row.cells[5].textContent.toLowerCase();

        if (nik.includes(input) || racikan.includes(input) || rekom.includes(input) || input === "") {
          row.style.display = "";
          visibleCount++;
        } else {
          row.style.display = "none";
        }
      });

      document.getElementById("resepCount").textContent = visibleCount;
    });
  </script>
</body>
</html>
@endsection
