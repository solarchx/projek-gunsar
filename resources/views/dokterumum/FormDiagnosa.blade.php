@extends('layoutdokter')

@section('konten')
<!DOCTYPE html>
<html lang="id">  
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Diagnosa Poli Umum</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    body {
      background-color: #f4f9f8;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .header {
      background: linear-gradient(90deg, #6AD4DD, #4BBFBA);
      color: white;
      padding: 1rem 2rem;
    }

    .card-form {
      background: white;
      border-radius: 16px;
      padding: 2rem;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
    }

    .form-label {
      font-weight: 600;
      color: #333;
    }

    h5 {
      border-left: 4px solid #28a745;
      padding-left: 0.6rem;
      margin-bottom: 1rem;
      color: #28a745;
    }

    textarea,
    input,
    select {
      border-radius: 10px !important;
    }

    .btn-success {
      background-color: #3fbbc0;
      border-color: #3fbbc0;
      border-radius: 12px;
      padding: 0.8rem;
      font-size: 1.1rem;
      font-weight: bold;
      color: white;
    }

    .btn-success:hover {
      background-color: #35a8ac;
      border-color: #35a8ac;
    }
    .btn-resep {
      background-color: #6c757d;
      border-color: #6c757d;
      border-radius: 12px;
      padding: 0.8rem;
      font-size: 1.1rem;
      font-weight: bold;
      color: white;
    }
    .btn-resep:hover {
      background-color: #5a6268;
      border-color: #545b62;
    }
    .action-buttons {
      display: flex;
      gap: 15px;
      flex-wrap: wrap;
    }
    @media (max-width: 576px) {
      .action-buttons {
        flex-direction: column;
      }
    }
  </style>
</head>

<body>

  <div class="d-flex flex-column min-vh-100">

    <!-- Header -->
    <div class="header d-flex justify-content-between align-items-center">
      <h3 class="mb-0">🩺 Form Diagnosa Poli Umum</h3>
      <a href="/ResepObat" class="btn btn-light">
        <i class="fas fa-prescription me-1"></i> Buat Resep
      </a>
    </div>

    <!-- Body -->
    <div class="flex-grow-1 container py-4">
      <div class="card-form mx-auto">

        <form class="w-100">

          <!-- Pilih Penyakit -->
          <div class="mb-3">
            <label for="penyakit" class="form-label">Pilih Penyakit</label>
            <select id="penyakit" class="form-select" required onchange="showExtraFields()">
              <option value="">-- Pilih Penyakit --</option>
              <option value="demam">Demam</option>
              <option value="flu">Flu</option>
              <option value="batuk">Batuk</option>
              <option value="lainnya">Lainnya (Isi Manual)</option>
              <option value="tambah">➕ Tambah Penyakit Baru</option>
            </select>
          </div>

          <!-- Input manual -->
          <div class="mb-3 d-none" id="penyakitLainnya">
            <label class="form-label">Nama Penyakit</label>
            <input type="text" class="form-control" placeholder="Isi manual jika penyakit tidak ada di pilihan">
          </div>

          <!-- Tambah penyakit baru -->
          <div class="mb-3 d-none" id="penyakitBaru">
            <label class="form-label">Tambah Penyakit Baru</label>
            <input type="text" class="form-control" placeholder="Masukkan nama penyakit baru">
          </div>

          <!-- Keluhan -->
          <div class="mb-3">
            <label for="keluhan" class="form-label">Keluhan Pasien</label>
            <textarea id="keluhan" class="form-control" rows="3" placeholder="Tuliskan keluhan pasien..."></textarea>
          </div>

          <!-- Diagnosa umum -->
          <h5>📝 Diagnosa Umum</h5>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label class="form-label">Sudah Berapa Hari Sakit?</label>
              <input type="number" class="form-control" placeholder="Contoh: 3">
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label">Obat yang Sudah Dikonsumsi</label>
              <input type="text" class="form-control" placeholder="Contoh: Paracetamol, Vitamin C">
            </div>
          </div>

          <!-- Diagnosa Khusus -->
          <div id="diagnosaDemam" class="d-none">
            <h5>🌡️ Diagnosa Khusus Demam</h5>
            <div class="row">
              <div class="col-md-4 mb-3">
                <label class="form-label">Suhu Badan</label>
                <input type="text" class="form-control" placeholder="Contoh: 38°C">
              </div>
              <div class="col-md-4 mb-3">
                <label class="form-label">Asupan Gizi</label>
                <input type="text" class="form-control" placeholder="cukup / kurang">
              </div>
              <div class="col-md-4 mb-3">
                <label class="form-label">Vitamin</label>
                <input type="text" class="form-control" placeholder="sudah / belum">
              </div>
            </div>
          </div>

          <div id="diagnosaFlu" class="d-none">
            <h5>🤧 Diagnosa Khusus Flu</h5>
            <div class="row">
              <div class="col-md-4 mb-3">
                <label class="form-label">Pernapasan</label>
                <input type="text" class="form-control" placeholder="Normal / Sesak">
              </div>
              <div class="col-md-4 mb-3">
                <label class="form-label">Lendir / Ingus</label>
                <input type="text" class="form-control" placeholder="Bening / Kuning / Kental">
              </div>
              <div class="col-md-4 mb-3">
                <label class="form-label">Gejala Lain</label>
                <input type="text" class="form-control" placeholder="Hidung tersumbat, pusing">
              </div>
            </div>
          </div>

          <div id="diagnosaBatuk" class="d-none">
            <h5>😷 Diagnosa Khusus Batuk</h5>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label class="form-label">Jenis Batuk</label>
                <input type="text" class="form-control" placeholder="Kering / Berdahak">
              </div>
              <div class="col-md-6 mb-3">
                <label class="form-label">Durasi Batuk</label>
                <input type="text" class="form-control" placeholder="Contoh: 1 minggu">
              </div>
            </div>
          </div>

          <!-- Diagnosa Final -->
          <div class="mb-3 mt-2">
            <label for="diagnosa_final" class="form-label">🩺 Diagnosa Final</label>
            <input type="text" name="diagnosa_final" id="diagnosa_final" class="form-control" placeholder="Tuliskan diagnosa akhir pasien">
          </div>

          <!-- Tombol -->
          <div class="mt-4 action-buttons">
            <button type="submit" class="btn btn-success flex-fill">
              <i class="fas fa-save me-1"></i> Simpan Diagnosa
            </button>
            <a href="/ResepObat" class="btn btn-resep flex-fill">
              <i class="fas fa-prescription me-1"></i> Simpan & Buat Resep
            </a>
          </div>

        </form>
      </div>
    </div>
  </div>

  <script>
    function showExtraFields() {
      let penyakit = document.getElementById("penyakit").value;

      document.getElementById("penyakitLainnya").classList.add("d-none");
      document.getElementById("penyakitBaru").classList.add("d-none");
      document.getElementById("diagnosaDemam").classList.add("d-none");
      document.getElementById("diagnosaFlu").classList.add("d-none");
      document.getElementById("diagnosaBatuk").classList.add("d-none");

      if (penyakit === "lainnya") {
        document.getElementById("penyakitLainnya").classList.remove("d-none");
      } else if (penyakit === "tambah") {
        document.getElementById("penyakitBaru").classList.remove("d-none");
      } else if (penyakit === "demam") {
        document.getElementById("diagnosaDemam").classList.remove("d-none");
      } else if (penyakit === "flu") {
        document.getElementById("diagnosaFlu").classList.remove("d-none");
      } else if (penyakit === "batuk") {
        document.getElementById("diagnosaBatuk").classList.remove("d-none");
      }
    }
  </script>

</body>

</html>

@endsection