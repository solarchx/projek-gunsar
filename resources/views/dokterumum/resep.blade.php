@extends('layoutdokter')

@section('konten')
<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Resep Obat - Medical System</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
  <style>
    :root {
      --teal-primary: #009688;
      --teal-light: #4db6ac;
      --teal-dark: #00695c;
      --teal-bg: #f0fdfa;
      --teal-border: #b2dfdb;
    }

    body {
      background: linear-gradient(135deg, var(--teal-bg) 0%, #ffffff 100%);
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      min-height: 100vh;
      margin: 0;
      color: #333;
    }

    .main-container {
      max-width: 1100px;
      margin: auto;
      padding: 20px;
    }

    .header {
      background: linear-gradient(135deg, var(--teal-primary), var(--teal-dark));
      color: #fff;
      padding: 25px;
      border-radius: 14px;
      box-shadow: 0 5px 18px rgba(0, 80, 80, 0.25);
      margin-bottom: 30px;
    }

    .header h1 {
      font-size: 1.9rem;
      margin-bottom: 5px;
    }

    .card {
      border: none;
      border-radius: 14px;
      overflow: hidden;
      margin-bottom: 25px;
      background: #fff;
      box-shadow: 0 4px 14px rgba(0, 80, 80, 0.08);
      transition: all 0.3s;
    }

    .card:hover {
      transform: translateY(-2px);
      box-shadow: 0 8px 22px rgba(0, 80, 80, 0.15);
    }

    .card-header {
      background: linear-gradient(135deg, var(--teal-primary), var(--teal-light));
      color: #fff;
      font-weight: 600;
      font-size: 1.2rem;
      padding: 15px 20px;
    }

    .table {
      margin-bottom: 0;
    }

    .table thead {
      background: rgba(0, 150, 136, 0.06);
    }

    .table thead th {
      text-align: center;
      font-weight: 600;
      color: var(--teal-dark);
      border-bottom: 2px solid var(--teal-border);
    }

    .table td {
      vertical-align: middle;
      padding: 12px;
    }

    .form-check-input {
      width: 18px;
      height: 18px;
      cursor: pointer;
      accent-color: #4CAF50;
      border: 2px solid var(--teal-light);
      cursor: pointer;
    }

    .form-check-input:checked {
      background-color: var(--teal-primary);
      border-color: var(--teal-primary);
    }

    .form-check-label {
      margin-left: 8px;
      cursor: pointer;
      font-weight: 500;
    }

    .jumlah {
      width: 80px;
      border-radius: 8px;
      border: 2px solid var(--teal-border);
      text-align: center;
      font-weight: 500;
      padding: 6px 10px;
      font-size: 14px;
      outline: none;
      transition: all 0.2s ease;
    }

    .jumlah:focus {
      border-color: #4CAF50;
      box-shadow: 0 0 5px rgba(76, 175, 80, 0.4);
    }

    .jumlah:disabled {
      background-color: #f5f5f5;
      color: #999;
      border-color: #eee;
    }

    .d-flex {
      gap: 10px;
    }

    textarea {
      border-radius: 10px;
      border: 2px solid var(--teal-border);
      resize: vertical;
    }

    .btn-primary {
      background: linear-gradient(135deg, var(--teal-primary), var(--teal-dark));
      border: none;
      border-radius: 10px;
      padding: 10px 25px;
      font-weight: 600;
      box-shadow: 0 4px 10px rgba(0, 80, 80, 0.25);
    }

    .btn-primary:hover {
      background: linear-gradient(135deg, var(--teal-dark), #004d40);
      transform: translateY(-2px);
    }

    .btn-outline-secondary {
      border: 2px solid var(--teal-light);
      color: var(--teal-dark);
      border-radius: 10px;
      padding: 10px 22px;
      font-weight: 600;
    }

    .btn-outline-secondary:hover {
      background-color: var(--teal-dark);
      color: #fff;
    }

    .footer {
      text-align: center;
      margin-top: 40px;
      color: var(--teal-dark);
      font-size: 0.9rem;
    }
  </style>
</head>

<body>
  <div class="main-container">
    <div class="header text-center">
      <h1><i class="bi bi-prescription2"></i> Formulir Resep Obat</h1>
      <p class="mb-0">Pilih obat sesuai kategori lalu tentukan jumlahnya.</p>
    </div>

    <form action="{{ route('resep.store') }}" method="POST">
      @csrf
      <input type="hidden" name="id_rekam_medis" value="{{ request('id_rekam_medis') }}">
      <input type="hidden" name="NIK_pasien" value="1234567890">
      <input type="hidden" name="NIP_dokter" value="5555555555">

      @foreach($obatKelompok as $kelompokNama => $subKategoriObats)
      <div class="card">
        <div class="card-header">
          @if(Str::contains(strtolower($kelompokNama), 'padat'))
          <i class="bi bi-capsule-pill me-2"></i>
          @elseif(Str::contains(strtolower($kelompokNama), 'cair'))
          <i class="bi bi-droplet me-2"></i>
          @elseif(Str::contains(strtolower($kelompokNama), 'oles'))
          <i class="bi bi-bandaid me-2"></i>
          @else
          <i class="bi bi-capsule me-2"></i> {{-- default --}}
          @endif

          {{ $kelompokNama }}
        </div>
        <div class="card-body">

          @foreach($subKategoriObats as $subKategori => $obats)
          <h6 class="mt-2 text-muted">{{ ucfirst($subKategori) }}</h6>

          <div class="row">
            @foreach($obats as $key => $obat)
            <div class="col-md-6 mb-2">
              <div class="d-flex align-items-center border rounded p-2">
                <input type="checkbox" class="form-check-input obat-checkbox"
                  name="obat[{{ $subKategori }}][{{ $key }}][id_obat]"
                  value="{{ $obat->id }}"
                  id="{{ $subKategori }}{{ $key }}">

                <label class="form-check-label ms-2 me-3 flex-grow-1" for="{{ $subKategori }}{{ $key }}">
                  {{ $obat->nama_obat }}
                </label>

                <input type="number" class="form-control form-control-sm jumlah"
                  name="obat[{{ $subKategori }}][{{ $key }}][jumlah]"
                  min="1" value="0" disabled style="width:80px">
              </div>
            </div>
            @endforeach
          </div>
          @endforeach

        </div>
      </div>
      @endforeach


      <!-- OBAT RACIK -->
      <div class="card">
        <div class="card-header"><i class="bi bi-mortarboard me-2"></i> Obat Racik</div>
        <div class="card-body">
          <textarea class="form-control" name="obat_racikan" rows="3" placeholder="Contoh: Paracetamol 500mg + Ibuprofen 200mg..."></textarea>
        </div>
      </div>

      <!-- OBAT REKOMENDASI -->
      <div class="card">
        <div class="card-header"><i class="bi bi-lightbulb me-2"></i> Obat Rekomendasi Beli Sendiri</div>
        <div class="card-body">
          <textarea class="form-control" name="obat_rekomendasi" rows="3" placeholder="Tulis rekomendasi obat... (opsional)"></textarea>
        </div>
      </div>

      <!-- BUTTON -->
      <div class="d-flex justify-content-between">
        <div class="text-start mt-4">
          <a href="{{ route('resep.index') }}" class="btn btn-outline-secondary me-2">
            <i class="bi bi-arrow-left"></i> Kembali
          </a>
        </div>
        <div class="text-end mt-4">
          <button type="reset" class="btn btn-outline-secondary me-2"><i class="bi bi-x-circle"></i> Batal</button>
          <button type="submit" class="btn btn-primary"><i class="bi bi-check2-circle"></i> Simpan Resep</button>
        </div>
      </div>
    </form>

    <div class="footer">
      <p>© 2025 Medical Prescription System</p>
    </div>
  </div>

  <script>
    document.querySelectorAll('.obat-checkbox').forEach(checkbox => {
      checkbox.addEventListener('change', function() {
        const jumlahInput = this.closest('div').querySelector('.jumlah');
        if (this.checked) {
          jumlahInput.disabled = false;
          jumlahInput.value = 1;
        } else {
          jumlahInput.disabled = true;
          jumlahInput.value = 0;
        }
      });
    })
  </script>
</body>

</html>
@endsection