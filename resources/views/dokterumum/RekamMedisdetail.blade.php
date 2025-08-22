@extends('layoutdokter')
@section('konten')
 <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-5 border-bottom">
                    <h1 class="h2">Detail Rekam Medis</h1>
                </div>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Rekam Medis Pasien</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: #f8f9fa;">
  
  <div class="container py-4">
    <!-- Judul Halaman -->
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h2 class="fw-bold text-teal">Detail Rekam Medis Pasien</h2>
      <a href="/dokterumum/RekamMedis" class="btn btn-secondary">← Kembali</a>
    </div>

    <!-- Informasi Pasien -->
    <div class="card shadow-sm mb-4">
      <div class="card-header text-white" style="background-color: teal;">
        <h5 class="mb-0">Informasi Pasien</h5>
      </div>
      <div class="card-body">
        <p><strong>Nama Pasien:</strong> Ahmad Fulan</p>
        <p><strong>NIK:</strong> 3212345678901234</p>
        <p><strong>Poli:</strong> Poli Umum</p>
        <p><strong>Dokter Pemeriksa:</strong> dr. Andi</p>
        <p><strong>Tanggal Periksa:</strong> 21 Agustus 2025</p>
      </div>
    </div>

    <!-- Diagnosa -->
    <div class="card shadow-sm mb-4">
      <div class="card-header text-white" style="background-color: teal;">
        <h5 class="mb-0">Hasil Diagnosa</h5>
      </div>
      <div class="card-body">
        <p><strong>Penyakit:</strong> Demam</p>
        <p><strong>Keluhan Pasien:</strong> Badan panas, pusing, menggigil</p>
        <p><strong>Lama Sakit:</strong> 3 hari</p>
        <p><strong>Obat Sebelum Periksa:</strong> Paracetamol 500mg</p>
      </div>
    </div>

    <!-- Detail Sesuai Penyakit -->
    <div class="card shadow-sm mb-4">
      <div class="card-header text-white" style="background-color: teal;">
        <h5 class="mb-0">Detail Pemeriksaan Khusus</h5>
      </div>
      <div class="card-body">
        <!-- Kalau demam -->
        <p><strong>Suhu Badan:</strong> 38.2°C</p>
        <p><strong>Kondisi Gizi:</strong> Baik</p>
        <p><strong>Pemberian Vitamin:</strong> Vitamin C</p>

        <!-- Kalau flu nanti bisa ganti -->
        <!-- <p><strong>Pernapasan:</strong> Sesak ringan</p>
        <p><strong>Kondisi Lendir:</strong> Kental</p> -->
      </div>
    </div>


    <!-- Tombol Aksi -->
    <div class="text-end">
      <button class="btn btn-success">Cetak Rekam Medis</button>
      <button class="btn btn-primary">Simpan Perubahan</button>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

@endsection