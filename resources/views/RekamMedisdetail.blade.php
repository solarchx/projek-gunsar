@extends('layoutdokter')
@section('konten')
<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Rekam Medis</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
  <style>
    :root {
      --primary-color: #1a7f8e;
      --secondary-color: #f8f9fa;
      --accent-color: #f0f7f8;
    }

    body {
      background-color: #f4f6f9;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .page-header {
      background: linear-gradient(135deg, var(--primary-color), #0d5966);
      color: white;
      padding: 1.5rem 2rem;
      border-radius: 12px;
      box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
      margin-bottom: 2rem;
    }

    .card {
      border: none;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
      overflow: hidden;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      margin-bottom: 1.5rem;
    }

    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.12);
    }

    .card-header {
      background: var(--primary-color);
      color: white;
      font-weight: 600;
      font-size: 1.1rem;
      padding: 1rem 1.5rem;
      display: flex;
      align-items: center;
    }

    .card-header i {
      margin-right: 10px;
      font-size: 1.3rem;
    }

    .card-body {
      padding: 1.5rem;
    }

    .info-item {
      margin-bottom: 15px;
      display: flex;
      align-items: center;
      padding: 8px 0;
      border-bottom: 1px solid #f0f0f0;
    }

    .info-item:last-child {
      border-bottom: none;
    }

    .info-item i {
      font-size: 1.3rem;
      color: var(--primary-color);
      margin-right: 15px;
      width: 25px;
      text-align: center;
    }

    .info-item strong {
      color: #444;
      margin-right: 5px;
    }

    .table th {
      background-color: var(--accent-color);
      color: var(--primary-color);
      border-top: none;
      font-weight: 600;
      padding: 12px 15px;
    }

    .table td {
      padding: 12px 15px;
      vertical-align: middle;
    }

    .btn-primary {
      background-color: var(--primary-color);
      border-color: var(--primary-color);
      padding: 0.5rem 1.5rem;
    }

    .btn-primary:hover {
      background-color: #0d5966;
      border-color: #0d5966;
    }

    .btn-success {
      padding: 0.5rem 1.5rem;
    }

    .btn-warning {
      padding: 0.5rem 1.5rem;
    }

    .badge-status {
      padding: 0.5rem 1rem;
      border-radius: 50px;
      font-weight: 500;
    }

    @media print {
      body * {
        visibility: hidden;
      }

      #printable-area,
      #printable-area * {
        visibility: visible;
      }

      #printable-area {
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
      }

      .no-print {
        display: none !important;
      }
    }
  </style>
</head>

<body>

  <div class="container py-4" id="printable-area">

    <!-- Header -->
    <div class="page-header d-flex justify-content-between align-items-center">
      <h2 class="fw-bold mb-0"><i class="bi bi-file-medical"></i> Detail Rekam Medis Pasien</h2>
      <a href="{{ route('rekam-medis.index') }}" class="btn btn-light no-print"><i class="bi bi-arrow-left"></i> Kembali</a>
    </div>

    <!-- Informasi Pasien -->
    <div class="card">
      <div class="card-header"><i class="bi bi-person-circle"></i> Informasi Pasien</div>
      <div class="card-body">
        <div class="row">
          <div class="col-md-6">
            <div class="info-item"><i class="bi bi-person-badge"></i> <strong>Nama:</strong> Ahmad Fulan</div>
            <div class="info-item"><i class="bi bi-credit-card-2-front"></i> <strong>NIK:</strong> 3212345678901234</div>
            <div class="info-item"><i class="bi bi-building"></i> <strong>Poli:</strong> Poli Umum</div>
          </div>
          <div class="col-md-6">
            <div class="info-item"><i class="bi bi-person-vcard"></i> <strong>Dokter:</strong> dr. Andi</div>
            <div class="info-item"><i class="bi bi-calendar-event"></i> <strong>Tanggal:</strong> 21 Agustus 2025</div>
            <div class="info-item"><i class="bi bi-clock-history"></i> <strong>No. Rekam Medis:</strong> RM20250821001</div>
          </div>
        </div>
      </div>
    </div>

    <!-- Screening -->
    <div class="card">
      <div class="card-header"><i class="bi bi-clipboard2-pulse"></i> Hasil Screening</div>
      <div class="card-body">
        <div class="row">
          <div class="col-md-6">
            <div class="info-item"><i class="bi bi-heart-pulse"></i> <strong>Tekanan Darah:</strong> 120/80 mmHg</div>
            <div class="info-item"><i class="bi bi-rulers"></i> <strong>Tinggi Badan:</strong> 170 cm</div>
            <div class="info-item"><i class="bi bi-activity"></i> <strong>Berat Badan:</strong> 65 kg</div>
          </div>
          <div class="col-md-6">
            <div class="info-item"><i class="bi bi-thermometer-half"></i> <strong>Suhu:</strong> 38.2°C </div>
            <div class="info-item"><i class="bi bi-clipboard2-pulse"></i> <strong>IMT:</strong> 22.5</div>
            <div class="info-item"><i class="bi bi-droplet"></i> <strong>Denyut Nadi:</strong> 88 bpm</div>
          </div>
        </div>
      </div>
    </div>

    <!-- Diagnosa -->
    <div class="card">
      <div class="card-header"><i class="bi bi-clipboard2-check"></i> Hasil Diagnosa</div>
      <div class="card-body">
        <div class="info-item"><i class="bi bi-activity"></i> <strong>Penyakit:</strong> {{ $rekamMedis->penyakit->nama ?? 'Tidak diketahui' }}</div>
        <div class="info-item"><i class="bi bi-chat-dots"></i> <strong>Keluhan:</strong> {{ $rekamMedis->keluhan }}</div>
        <div class="info-item"><i class="bi bi-journal-medical"></i> <strong>Riwayat Penyakit:</strong>{{ $rekamMedis->riwayat_penyakit }}</div>
        <div class="info-item"><i class="bi bi-activity"></i> <strong>Terapi atau Tindakan:</strong> {{ $rekamMedis->terapi_tindakan }}</div>
        <div class="info-item"><i class="bi bi-journal-text"></i> <strong>Catatan Dokter:</strong> {{ $rekamMedis->catatan }} </div>
      </div>
    </div>

    <!-- Pemeriksaan Khusus -->
    <!-- <div class="card">
      <div class="card-header"><i class="bi bi-search-heart"></i> Pemeriksaan Khusus</div>
      <div class="card-body">
        <div class="info-item"><i class="bi bi-egg-fried"></i> <strong>Kondisi Gizi:</strong> Baik</div>
        <div class="info-item"><i class="bi bi-capsule"></i> <strong>Pemberian Vitamin:</strong> Vitamin C</div>
      </div>
    </div> -->

    <!-- Riwayat Resep Obat -->
    <div class="card">
      <div class="card-header">
        <i class="bi bi-prescription2"></i> Riwayat Resep Obat
      </div>
      <div class="card-body">

        <div class="table-responsive">
          <table class="table table-hover align-middle">
            <thead class="table-light">
              <tr>
                <th><i class="bi bi-capsule me-2"></i> Nama Obat</th>
                <th>Jumlah</th>
              </tr>
              <div class="row mb-3">
                <div class="col-md-6">
                  <div class="info-item mb-2">
                    <i class="bi bi-calendar-event"></i>
                    <strong>Tanggal:</strong>
                    {{ \Carbon\Carbon::parse($rekamMedis->resep->tanggal)->format('d-m-Y') }}
                  </div>

                  <div class="info-item">
                    <i class="bi bi-beaker"></i>
                    <strong>Obat Racikan:</strong>
                    {{ $rekamMedis->resep->obat_racikan ?? '-' }}
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="info-item">
                    <i class="bi bi-hand-thumbs-up "></i>
                    <strong>Obat Rekomendasi:</strong>
                    {{ $rekamMedis->resep->obat_rekomendasi ?? '-' }}
                  </div>
                </div>
              </div>

            </thead>
            <tbody>
              @foreach ($rekamMedis->resep->detailReseps as $detail)
              <tr>
                <td>
                  {{ $detail->obat->nama_obat }}
                </td>
                <td>{{ $detail->jumlah }}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- Tanda Tangan -->
    <!-- <div class="card no-print">
      <div class="card-header"><i class="bi bi-pen"></i> Tanda Tangan</div>
      <div class="card-body">
        <div class="row">
          <div class="col-md-6 text-center">
            <p class="mb-1">Pasien</p>
            <div class="signature-box border rounded p-3 mb-3" style="height: 100px;"></div>
            <p>Ahmad Fulan</p>
          </div>
          <div class="col-md-6 text-center">
            <p class="mb-1">Dokter</p>
            <div class="signature-box border rounded p-3 mb-3" style="height: 100px;"></div>
            <p>dr. Andi</p>
          </div>
        </div>
      </div>
    </div> -->

    <!-- Tombol -->
    <div class="text-end mt-4 no-print">
      <button class="btn btn-success me-2" onclick="window.print()"><i class="bi bi-printer"></i> Cetak</button>
      <button class="btn btn-warning me-2" id="downloadPDF"><i class="bi bi-download"></i> Download PDF</button>
      <button class="btn btn-primary"><i class="bi bi-save"></i> Simpan</button>
    </div>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    document.getElementById('downloadPDF').addEventListener('click', function() {
      // Konfigurasi elemen yang akan di-download
      const element = document.getElementById('printable-area');

      // Konfigurasi html2pdf
      const opt = {
        margin: [5, 0, 5, 0],
        filename: 'rekam_medis_ahmad_fulan.pdf',
        image: {
          type: 'jpeg',
          quality: 0.98
        },
        html2canvas: {
          scale: 2,
          useCORS: true
        },
        jsPDF: {
          unit: 'mm',
          format: 'a4',
          orientation: 'portrait'
        }
      };

      // Generate dan download PDF
      html2pdf().set(opt).from(element).save();
    });
  </script>
</body>

</html>


@endsection