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
      min-height: 100vh;
    }

    .header {
      background: linear-gradient(90deg, #6AD4DD, #4BBFBA);
      color: white;
      padding: 1rem 2rem;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .card-form {
      background: white;
      border-radius: 16px;
      padding: 2rem;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
      margin-bottom: 2rem;
    }

    .form-label {
      font-weight: 600;
      color: #333;
    }

    h5 {
      /* border-left: 4px solid #3fbbc0;
      padding-left: 0.6rem;
      margin-bottom: 1rem;
      color: #3fbbc0; */
      border-left: 4px solid #28a745;
      padding-left: 0.8rem;
      margin-bottom: 1.2rem;
      color: #28a745;
      font-weight: 600;
    }

    textarea,
    input,
    select {
      border-radius: 10px !important;
      border: 1px solid #ced4da;
      transition: all 0.3s;
    }

    textarea:focus,
    input:focus,
    select:focus {
      border-color: #6AD4DD;
      box-shadow: 0 0 0 0.25rem rgba(106, 212, 221, 0.25);
    }

    .btn-success {
      /* background-color: #3fbbc0;
      border-color: #3fbbc0; */
      background: linear-gradient(90deg, #3fbbc0, #35a8ac);
      border: none;
      border-radius: 12px;
      padding: 0.8rem;
      font-size: 1.1rem;
      font-weight: bold;
      color: white;
      transition: all 0.3s;
      box-shadow: 0 4px 8px rgba(63, 187, 192, 0.3);
    }

    .btn-success:hover {
      /* background-color: #35a8ac;
      border-color: #35a8ac; */
      background: linear-gradient(90deg, #35a8ac, #2c979a);
      transform: translateY(-2px);
      box-shadow: 0 6px 12px rgba(63, 187, 192, 0.4);
    }

    .btn-resep {
      background: linear-gradient(90deg, #6c757d, #5a6268);
      border: none;
      border-radius: 12px;
      padding: 0.8rem;
      font-size: 1.1rem;
      font-weight: bold;
      color: white;
      transition: all 0.3s;
      box-shadow: 0 4px 8px rgba(108, 117, 125, 0.3);
    }

    .btn-resep:hover {
      background: linear-gradient(90deg, #5a6268, #495057);
      transform: translateY(-2px);
      box-shadow: 0 6px 12px rgba(108, 117, 125, 0.4);
    }

    .action-buttons {
      display: flex;
      gap: 15px;
      flex-wrap: wrap;
    }

    .rujukan-section {
      background-color: #fef7e0;
      border-radius: 12px;
      padding: 1.5rem;
      margin-top: 1.5rem;
      border-left: 4px solid #ffc107;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
    }

    .form-check-input:checked {
      background-color: #3fbbc0;
      border-color: #3fbbc0;
    }

    .data-pasien-output {
      background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
      border-radius: 12px;
      padding: 1.5rem;
      margin-bottom: 1.5rem;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
      border: 1px solid #e9ecef;
    }

    .data-item {
      margin-bottom: 0.8rem;
      display: flex;
      align-items: center;
    }

    .data-label {
      font-weight: 600;
      min-width: 160px;
      color: #495057;
      display: flex;
      align-items: center;
    }

    .data-label i {
      margin-right: 0.5rem;
      color: #6AD4DD;
      width: 20px;
    }

    .data-value {
      color: #212529;
      background-color: white;
      padding: 0.5rem 1rem;
      border-radius: 8px;
      flex-grow: 1;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
      border: 1px solid #e9ecef;
    }

    .section-title {
      display: flex;
      align-items: center;
      margin-bottom: 1.2rem;
      color: #4BBFBA;
      font-weight: 600;
    }

    .section-title i {
      margin-right: 0.5rem;
      background: linear-gradient(135deg, #6AD4DD, #4BBFBA);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      font-size: 1.4rem;
    }

    .vital-signs {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 1rem;
      margin-bottom: 1rem;
    }

    .vital-item {
      background: white;
      padding: 1rem;
      border-radius: 12px;
      text-align: center;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
      border: 1px solid #e9ecef;
      transition: transform 0.3s;
    }

    .vital-item:hover {
      transform: translateY(-3px);
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.08);
    }

    .vital-value {
      font-size: 1.5rem;
      font-weight: 700;
      color: #3fbbc0;
      margin: 0.5rem 0;
    }

    .vital-label {
      font-size: 0.9rem;
      color: #6c757d;
      font-weight: 500;
    }

    .vital-unit {
      font-size: 0.8rem;
      color: #adb5bd;
    }

    @media (max-width: 768px) {
      .data-item {
        flex-direction: column;
        align-items: flex-start;
      }

      .data-label {
        min-width: unset;
        margin-bottom: 0.5rem;
      }

      .data-value {
        width: 100%;
      }

      .vital-signs {
        grid-template-columns: 1fr 1fr;
      }
    }

    @media (max-width: 576px) {
      .action-buttons {
        flex-direction: column;
      }

      .vital-signs {
        grid-template-columns: 1fr;
      }
    }
  </style>
</head>

<body>
  <div class="d-flex flex-column min-vh-100">
    <!-- Header -->
    <div class="header d-flex justify-content-between align-items-center">
      <h3 class="mb-0"><i class="fas fa-stethoscope me-2"></i> Form Diagnosa Poli Umum</h3>
      <a href="/ResepObat" class="btn btn-light">
        <i class="fas fa-prescription me-1"></i> Buat Resep
      </a>
    </div>

    <!-- Body -->
    <div class="flex-grow-1 container py-4">
      <div class="card-form mx-auto">
        <form class="w-100" method="POST" action="{{ route('rekam-medis.store') }}">
          @csrf

          <input type="hidden" name="id_screening" value="{{ $id_screening ?? '' }}">
          <input type="hidden" name="NIK_pasien" value="1234567891234567">
          <input type="hidden" name="NIP_dokter" value="5555555555">

          <!-- Data Pasien (Output Only) -->
          <div class="section-title">
            <i class="fas fa-user-circle"></i>
            <h5 class="mb-0">Data Pasien</h5>
          </div>
          <div class="data-pasien-output">
            <div class="row">
              <div class="col-md-6">
                <div class="data-item">
                  <span class="data-label"><i class="fas fa-user"></i> Nama Pasien:</span>
                  <span class="data-value">Budi Santoso</span>
                </div>
                <div class="data-item">
                  <span class="data-label"><i class="fas fa-id-card"></i> No. Rekam Medis:</span>
                  <span class="data-value">RM-2023-08765</span>
                </div>
                <div class="data-item">
                  <span class="data-label"><i class="fas fa-birthday-cake"></i> Usia:</span>
                  <span class="data-value">42 tahun</span>
                </div>
              </div>
              <div class="col-md-6">
                <div class="data-item">
                  <span class="data-label"><i class="fas fa-venus-mars"></i> Jenis Kelamin:</span>
                  <span class="data-value">Laki-laki</span>
                </div>
                <div class="data-item">
                  <span class="data-label"><i class="fas fa-calendar-day"></i> Tanggal Periksa:</span>
                  <span class="data-value">12 November 2023</span>
                </div>
                <div class="data-item">
                  <span class="data-label"><i class="fas fa-phone"></i> No. Telepon:</span>
                  <span class="data-value">081234567890</span>
                </div>
              </div>
            </div>
          </div>

          <!-- Keluhan -->
          <div class="section-title">
            <i class="fas fa-comment-medical"></i>
            <h5 class="mb-0">Keluhan Pasien</h5>
          </div>
          <div class="mb-3">
            <label class="form-label">Keluhan Utama</label>
            <textarea class="form-control" rows="2" name="keluhan" placeholder="Tuliskan keluhan utama pasien..."></textarea>
          </div>

          <div class="mb-3">
            <label class="form-label">Riwayat Penyakit</label>
            <textarea class="form-control" rows="2" name="riwayat_penyakit" placeholder="Riwayat penyakit yang pernah diderita..."></textarea>
          </div>

          <!-- Pemeriksaan Fisik (Output Only) -->
          <div class="section-title">
            <i class="fas fa-heartbeat"></i>
            <h5 class="mb-0">Pemeriksaan Fisik</h5>
          </div>

          <div class="data-pasien-output">
            <div class="vital-signs">
              <div class="vital-item">
                <div class="vital-label">Tinggi Badan</div>
                <div class="vital-value">
                  {{ $screening->tinggi_badan ?? '-' }}<span class="vital-unit">cm</span>
                </div>
              </div>

              <div class="vital-item">
                <div class="vital-label">Berat Badan</div>
                <div class="vital-value">
                  {{ $screening->berat_badan ?? '-' }}<span class="vital-unit">kg</span>
                </div>
              </div>

              <div class="vital-item">
                <div class="vital-label">Suhu Badan</div>
                <div class="vital-value">
                  {{ $screening->suhu_badan ?? '-' }}<span class="vital-unit">°C</span>
                </div>
                <div class="vital-status">
                  @if($screening && $screening->suhu_badan >= 37.5)
                  Demam
                  @else
                  Normal
                  @endif
                </div>
              </div>

              <div class="vital-item">
                <div class="vital-label">Tekanan Darah</div>
                <div class="vital-value">
                  {{ $screening->tekanan_darah ?? '-' }}<span class="vital-unit">mmHg</span>
                </div>
              </div>

              <div class="vital-item">
                <div class="vital-label">Tanggal Screening</div>
                <div class="vital-value">
                  <td>{{ \Carbon\Carbon::parse($screening->tanggal_screening)->format('d/m/Y') }}</td>
                </div>
              </div>
            </div>
          </div>


          <!-- Diagnosa -->
          <div class="section-title">
            <i class="fas fa-stethoscope"></i>
            <h5 class="mb-0">Diagnosa</h5>
          </div>
          <div class="mb-3">
            <label for="penyakit" class="form-label">Pilih Penyakit</label>
            <select id="penyakit" name="id_penyakit" class="form-select" onchange="showDiagnosaLainnya()">
              <option value="">-- Pilih Penyakit --</option>
              @foreach ($penyakits->unique('id') as $penyakit)
              <option value="{{ $penyakit->id }}">
                {{ $penyakit->nama }}
              </option>
              @endforeach
              <option value="lainnya">Lainnya</option>
            </select>
          </div>

          <div class="mb-3 d-none" id="diagnosaLainnya">
            <label class="form-label">Diagnosa Lainnya</label>
            <input type="text" name="penyakit_baru" class="form-control" placeholder="Tuliskan diagnosa lainnya">
          </div>

          <div class="mb-3">
            <label class="form-label">Catatan</label>
            <input type="text" name="catatan" class="form-control" placeholder="Catatan (jika ada)">
          </div>

          <!-- Tindakan & Terapi -->
          <div class="section-title">
            <i class="fas fa-pills"></i>
            <h5 class="mb-0">Tindakan & Terapi</h5>
          </div>

          <div class="mb-3">
            <input type="text" name="terapi_tindakan" class="form-control" placeholder="Terapi atau tindakan yang diberikan">
          </div>

          <!-- Tombol -->
          <div class="mt-4 action-buttons">
            <button type="submit" class="btn btn-success flex-fill">
              <i class="fas fa-save me-1"></i> Simpan Diagnosa
            </button>
            <button type="submit" class="btn btn-success flex-fill" name="action" value="buat_resep">
              <i class="fas fa-save me-1"></i> Simpan Diagnosa dan Buat Resep
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script>
    function showDiagnosaLainnya() {
      const selectDiagnosa = document.querySelector('select[onchange="showDiagnosaLainnya()"]');
      const diagnosaLainnya = document.getElementById('diagnosaLainnya');

      if (selectDiagnosa.value === 'lainnya') {
        diagnosaLainnya.classList.remove('d-none');
      } else {
        diagnosaLainnya.classList.add('d-none');
      }
    }

    // Toggle form rujukan
    // const perluRujukan = document.getElementById('perluRujukan');
    // const formRujukan = document.getElementById('formRujukan');

    // perluRujukan.addEventListener('change', function() {
    //   if (this.checked) {
    //     formRujukan.classList.remove('d-none');
    //   } else {
    //     formRujukan.classList.add('d-none');
    //   }
    // });
  </script>
</body>

</html>
@endsection