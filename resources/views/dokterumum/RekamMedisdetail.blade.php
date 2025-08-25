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
  <style>
    body {
      background-color: #f4f6f9;
    }
    .page-header {
      background-color: teal;
      color: white;
      padding: 2rem;
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.15);
      margin-bottom: 2rem;
    }
    .card {
      border: none;
      border-radius: 12px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.08);
      overflow: hidden;
    }
    .card-header {
      background: teal;
      color: white;
      font-weight: 600;
      font-size: 1.1rem;
    }
    .info-item {
      margin-bottom: 12px;
      display: flex;
      align-items: center;
    }
    .info-item i {
      font-size: 1.2rem;
      color: teal;
      margin-right: 10px;
    }
  </style>
</head>
<body>

  <div class="container py-4">

    <!-- Header -->
    <div class="page-header d-flex justify-content-between align-items-center">
      <h2 class="fw-bold mb-0">🩺 Detail Rekam Medis Pasien</h2>
      <a href="/dokterumum/RekamMedis" class="btn btn-light">← Kembali</a>
    </div>

    <!-- Informasi Pasien -->
    <div class="card mb-4">
      <div class="card-header">Informasi Pasien</div>
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
          </div>
        </div>
      </div>
    </div>

    <!-- Screening -->
    <div class="card mb-4">
      <div class="card-header">Hasil Screening</div>
      <div class="card-body">
        <div class="row">
          <div class="col-md-6">
            <div class="info-item"><i class="bi bi-heart-pulse"></i> <strong>Tekanan Darah:</strong> 120/80 mmHg</div>
            <div class="info-item"><i class="bi bi-rulers"></i> <strong>Tinggi Badan:</strong> 170 cm</div>
            <div class="info-item"><i class="bi bi-activity"></i> <strong>Berat Badan:</strong> 65 kg</div>
          </div>
          <div class="col-md-6">
            <div class="info-item"><i class="bi bi-thermometer-half"></i> <strong>Suhu:</strong> 38.2°C</div>
            <div class="info-item"><i class="bi bi-clipboard2-pulse"></i> <strong>IMT:</strong> 22.5 (Normal)</div>
          </div>
        </div>
      </div>
    </div>

    <!-- Diagnosa -->
    <div class="card mb-4">
      <div class="card-header">Hasil Diagnosa</div>
      <div class="card-body">
        <p><strong>Penyakit:</strong> Demam</p>
        <p><strong>Keluhan:</strong> Badan panas, pusing, menggigil</p>
        <p><strong>Lama Sakit:</strong> 3 hari</p>
        <p><strong>Obat Sebelum Periksa:</strong> Paracetamol 500mg</p>
      </div>
    </div>

    <!-- Pemeriksaan Khusus -->
    <div class="card mb-4">
      <div class="card-header">Pemeriksaan Khusus</div>
      <div class="card-body">
        <p><strong>Kondisi Gizi:</strong> Baik</p>
        <p><strong>Pemberian Vitamin:</strong> Vitamin C</p>
      </div>
    </div>

    <!-- Riwayat Resep Obat -->
<div class="card mb-4">
  <div class="card-header">Riwayat Resep Obat</div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-sm align-middle">
        <thead class="table-light">
          <tr>
            <th><i class="bi bi-capsule"></i> Nama Obat</th>
            <th>Dosis</th>
            <th>Frekuensi</th>
            <th>Aturan Pakai</th>
            <th>Keterangan</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Paracetamol 500mg</td>
            <td>1 tablet</td>
            <td>3x sehari</td>
            <td>Sesudah makan</td>
            <td>Jika demam</td>
          </tr>
          <tr>
            <td>Amoxicillin 500mg</td>
            <td>1 kapsul</td>
            <td>2x sehari</td>
            <td>Sebelum makan</td>
            <td>5 hari berturut-turut</td>
          </tr>
          <tr>
            <td>Vitamin C 1000mg</td>
            <td>1 tablet</td>
            <td>1x sehari</td>
            <td>Sesudah makan</td>
            <td>Selama masa sakit</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>


    <!-- Tombol -->
<div class="text-end">
  <button class="btn btn-success"><i class="bi bi-printer"></i> Cetak</button>
  <button class="btn btn-primary"><i class="bi bi-save"></i> Simpan</button>
  <!-- <button class="btn btn-warning" onclick="downloadPDF()"><i class="bi bi-download"></i> Download</button> -->
</div>

<!-- jsPDF -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script> -->
<!-- <script>
  async function downloadPDF() {
    const { jsPDF } = window.jspdf;
    const doc = new jsPDF();

    // Judul
    doc.setFontSize(16);
    doc.text("Detail Rekam Medis Pasien", 14, 20);

    // Data Pasien
    doc.setFontSize(12);
    doc.text("Nama: Ahmad Fulan", 14, 35);
    doc.text("NIK: 3212345678901234", 14, 45);
    doc.text("Poli: Poli Umum", 14, 55);
    doc.text("Dokter: dr. Andi", 14, 65);
    doc.text("Tanggal: 21 Agustus 2025", 14, 75);

    // Screening
    doc.text("=== Screening ===", 14, 90);
    doc.text("Tekanan Darah: 120/80 mmHg", 14, 100);
    doc.text("Tinggi Badan: 170 cm", 14, 110);
    doc.text("Berat Badan: 65 kg", 14, 120);
    doc.text("Suhu: 38.2°C", 14, 130);
    doc.text("IMT: 22.5 (Normal)", 14, 140);

    // Diagnosa
    doc.text("=== Diagnosa ===", 14, 155);
    doc.text("Penyakit: Demam", 14, 165);
    doc.text("Keluhan: Badan panas, pusing, menggigil", 14, 175);
    doc.text("Lama Sakit: 3 hari", 14, 185);
    doc.text("Obat Sebelum Periksa: Paracetamol 500mg", 14, 195);

    // Resep
    doc.text("=== Resep Obat ===", 14, 210);
    doc.text("Paracetamol 500mg - 1 tablet, 3x sehari, Sesudah makan", 14, 220);
    doc.text("Amoxicillin 500mg - 1 kapsul, 2x sehari, Sebelum makan", 14, 230);
    doc.text("Vitamin C 1000mg - 1 tablet, 1x sehari, Sesudah makan", 14, 240);

    // Pemeriksaan Khusus
    doc.text("=== Pemeriksaan Khusus ===", 14, 255);
    doc.text("Kondisi Gizi: Baik", 14, 265);
    doc.text("Pemberian Vitamin: Vitamin C", 14, 275);

    // Simpan PDF
    doc.save("rekam_medis.pdf");
  }
</script> -->


  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


@endsection