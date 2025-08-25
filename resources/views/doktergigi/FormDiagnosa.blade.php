@extends('layoutdokter')

@section('konten')

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Diagnosa Poli Gigi</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    :root {
      --teal-primary: #3fbbc0;
      --teal-dark: #35a8ac;
      --teal-light: #6AD4DD;
      --teal-bg: #f4f9f8;
    }
    
    body {
      background-color: var(--teal-bg);
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }
    
    .header {
      background: linear-gradient(90deg, var(--teal-light), var(--teal-primary));
      color: white;
      padding: 1.2rem 2rem;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }
    
    .main-container {
      flex: 1;
      padding: 2rem 0;
    }
    
    .card-form {
      background: white;
      border-radius: 16px;
      padding: 2.5rem;
      box-shadow: 0 8px 24px rgba(0,0,0,0.08);
      border: none;
      margin-bottom: 2rem;
    }
    
    .form-label {
      font-weight: 600;
      color: #333;
      margin-bottom: 0.5rem;
    }
    
    h5.section-title {
      border-left: 4px solid var(--teal-primary);
      padding-left: 0.8rem;
      margin: 1.5rem 0 1rem;
      color: var(--teal-primary);
      font-weight: 600;
    }
    
    textarea, input, select {
      border-radius: 10px !important;
      border: 1px solid #ddd;
      padding: 0.8rem 1rem;
      transition: all 0.3s;
    }
    
    textarea:focus, input:focus, select:focus {
      border-color: var(--teal-primary);
      box-shadow: 0 0 0 0.25rem rgba(63, 187, 192, 0.25);
    }
    
    .btn-success {
      background-color: var(--teal-primary);
      border-color: var(--teal-primary);
      border-radius: 12px;
      padding: 0.8rem;
      font-size: 1.1rem;
      font-weight: bold;
      color: white;
      transition: all 0.3s;
    }
    
    .btn-success:hover {
      background-color: var(--teal-dark);
      border-color: var(--teal-dark);
      transform: translateY(-2px);
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
    
    .form-check-input:checked {
      background-color: var(--teal-primary);
      border-color: var(--teal-primary);
    }
    
    .icon-box {
      display: flex;
      align-items: center;
      margin-bottom: 1rem;
      padding: 1rem;
      background-color: rgba(63, 187, 192, 0.1);
      border-radius: 10px;
    }
    
    .icon-box i {
      font-size: 1.5rem;
      color: var(--teal-primary);
      margin-right: 1rem;
    }
    
    .form-header {
      background: linear-gradient(90deg, rgba(63, 187, 192, 0.1), rgba(107, 212, 221, 0.1));
      border-radius: 12px;
      padding: 1.5rem;
      margin-bottom: 1.5rem;
    }
    .form-check {
  display: flex;
  align-items: center;
  margin-bottom: 8px;
}

.form-check-input {
  margin-right: 8px;
}


  </style>
</head>
<body>

  <div class="d-flex flex-column min-vh-100">
    <!-- Header -->
    <div class="header d-flex justify-content-between align-items-center">
      <div>
        <h3 class="mb-0"><i class="fas fa-tooth me-2"></i> Form Diagnosa Poli Gigi</h3>
      </div>
    </div>

    <!-- Body -->
    <div class="main-container container py-4">
      <div class="card-form mx-auto">
        <form class="w-100">
          <!-- Keluhan Utama -->
          <div class="form-header mt-4">
            <h5 class="section-title mb-0"><i class="fas fa-comment-medical me-2"></i> Keluhan Utama</h5>
          </div>
          <div class="mb-3">
            <textarea id="keluhan" class="form-control" rows="3" placeholder="Jelaskan keluhan utama pasien..."></textarea>
          </div>

          <!-- Lokasi Gigi yang Bermasalah -->
          <div class="form-header mt-4">
            <h5 class="section-title mb-0"><i class="fas fa-tooth me-2"></i> Lokasi Gigi yang Bermasalah</h5>
          </div>
          <div class="mb-3">
            <label class="form-label">Gigi yang Bermasalah</label>
            <input type="text" class="form-control" placeholder="Contoh: Gigi geraham atas kiri, Gigi seri tengah bawah">
          </div>
          <div class="mb-3">
            <label class="form-label">Deskripsi Lokasi</label>
            <textarea class="form-control" rows="2" placeholder="Jelaskan lebih detail lokasi gigi yang bermasalah..."></textarea>
          </div>

          <!-- Diagnosa -->
          <div class="form-header mt-4">
            <h5 class="section-title mb-0"><i class="fas fa-stethoscope me-2"></i> Diagnosa</h5>
          </div>
          
          <div class="icon-box">
            <i class="fas fa-teeth-open"></i>
            <div class="flex-grow-1">
              <label class="form-label">Jenis Masalah Gigi</label>
              <select class="form-select" required onchange="showExtraFields()">
                <option value="">-- Pilih Jenis Masalah --</option>
                <option value="karies">Karies (Gigi Berlubang)</option>
                <option value="gingivitis">Gingivitis (Radang Gusi)</option>
                <option value="periodontitis">Periodontitis</option>
                <option value="abses">Abses Gigi</option>
                <option value="sensitif">Gigi Sensitif</option>
                <option value="impaksi">Gigi Impaksi</option>
                <option value="bruxism">Bruxism (Kebiasaan Menggeretakkan Gigi)</option>
                <option value="lainnya">Lainnya</option>
              </select>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 mb-3">
              <label class="form-label">Tingkat Keparahan</label>
              <select class="form-select">
                <option value="">-- Pilih Tingkat Keparahan --</option>
                <option value="ringan">Ringan</option>
                <option value="sedang">Sedang</option>
                <option value="berat">Berat</option>
              </select>
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label">Sudah Berapa Lama?</label>
              <input type="text" class="form-control" placeholder="Contoh: 1 minggu, 2 bulan">
            </div>
          </div>

          <!-- Perawatan yang Diperlukan -->
          <div class="form-header mt-4">
            <h5 class="section-title mb-0"><i class="fas fa-briefcase-medical me-2"></i> Perawatan yang Diperlukan</h5>
          </div>
          
          <div class="mb-3">
            <div class="form-check mb-2">
              <input class="form-check-input" type="checkbox" id="tambal">
              <label class="form-check-label" for="tambal">
                Penambalan Gigi
              </label>
            </div>
            <div class="form-check mb-2">
              <input class="form-check-input" type="checkbox" id="scaling">
              <label class="form-check-label" for="scaling">
                Scaling (Pembersihan Karang Gigi)
              </label>
            </div>
            <div class="form-check mb-2">
              <input class="form-check-input" type="checkbox" id="perawatan_saluran_akar">
              <label class="form-check-label" for="perawatan_saluran_akar">
                Perawatan Saluran Akar
              </label>
            </div>
            <div class="form-check mb-2">
              <input class="form-check-input" type="checkbox" id="pencabutan">
              <label class="form-check-label" for="pencabutan">
                Pencabutan Gigi
              </label>
            </div>
            <div class="form-check mb-2">
              <input class="form-check-input" type="checkbox" id="pemutihan">
              <label class="form-check-label" for="pemutihan">
                Pemutihan Gigi
              </label>
            </div>
            <div class="form-check mb-2">
              <input class="form-check-input" type="checkbox" id="ortodonti">
              <label class="form-check-label" for="ortodonti">
                Perawatan Ortodonti (Kawat Gigi)
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="lainnya">
              <label class="form-check-label" for="lainnya">
                Perawatan Lainnya
              </label>
            </div>
          </div>

          <div class="mb-3">
            <label class="form-label">Rencana Perawatan</label>
            <textarea class="form-control" rows="3" placeholder="Jelaskan rencana perawatan untuk pasien..."></textarea>
          </div>
          <!-- Tombol -->
          <div class="mt-4 pt-3 border-top">
            <div class="row">
              <div class="col-md-6 mb-2">
                <button type="button" class="btn btn-outline-secondary w-100 py-2">
                  <i class="fas fa-times me-2"></i> Batal
                </button>
              </div>
              <div class="col-md-6 mb-2">
                <button type="submit" class="btn btn-success w-100 py-2">
                  <i class="fas fa-save me-2"></i> Simpan Diagnosa
                </button>
              </div>
            </div>
          </div>

        </form>
      </div>
    </div>
  </div>

  <script>
    function showExtraFields() {
      // Fungsi untuk menampilkan field tambahan berdasarkan pilihan
      console.log("Extra fields function triggered");
    }
    
    // Set tanggal hari ini secara otomatis
    document.addEventListener('DOMContentLoaded', function() {
      const today = new Date();
      const yyyy = today.getFullYear();
      let mm = today.getMonth() + 1;
      let dd = today.getDate();
      
      if (dd < 10) dd = '0' + dd;
      if (mm < 10) mm = '0' + mm;
      
      const formattedToday = yyyy + '-' + mm + '-' + dd;
      document.querySelector('input[type="date"]').value = formattedToday;
    });
  </script>

</body>
</html>
@endsection
