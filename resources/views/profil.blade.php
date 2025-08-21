<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profil Pasien</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Inter', sans-serif;
    }

    body {
      background: linear-gradient(to bottom right, #f0fdf4, #ffffff);
      color: #1f2937;
    }

    .navbar {
      background-color: #3fbbc0;
      padding: 16px 32px;
      color: white;
      font-weight: 700;
      font-size: 20px;
      border-bottom: 4px solid #3fbbc0;
    }

    .navbar small {
      font-weight: 400;
      display: block;
      font-size: 13px;
      margin-top: 2px;
    }

    .container {
      max-width: 880px;
      margin: 30px auto;
      background-color: #ffffff;
      border-radius: 16px;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
      overflow: hidden;
      border: 1px solid #e5e7eb;
    }

    .profile-header {
      background-color: #3fbbc0;
      padding: 32px;
      display: flex;
      flex-direction: column;
      gap: 6px;
    }

    .profile-header h2 {
      font-size: 24px;
      font-weight: 700;
      color: #e8f0f0ff;
    }

    .profile-header span {
      color: #4b5563;
      font-size: 14px;
    }

    .profile-body {
      padding: 32px;
      display: grid;
      grid-template-columns: 1fr 1fr;
      row-gap: 24px;
      column-gap: 40px;
      font-size: 15px;
    }

    .profile-item label {
      color: #6b7280;
      font-size: 13px;
      display: block;
      margin-bottom: 2px;
    }

    .profile-item p {
      font-weight: 600;
      color: #111827;
    }

    .button-group {
      display: flex;
      justify-content: space-between;
      padding: 20px 32px;
      background-color: #f9fafb;
      border-top: 1px solid #e5e7eb;
    }

    .button-group button {
      padding: 10px 20px;
      border: none;
      border-radius: 8px;
      font-weight: 600;
      cursor: pointer;
      transition: all 0.3s;
    }

    .edit {
      background-color: #3fbbc0;
      color: white;
    }

    .edit:hover {
      background-color: #3fbbc0;
    }

    .print {
      background-color: #e5e7eb;
      color: #374151;
    }

    .print:hover {
      background-color: #d1d5db;
    }

    .visit {
      background-color: #3fbbc0;
      color: white;
    }

    .visit:hover {
      background-color: #15803d;
    }

    .info-box, .contact-box {
      margin: 20px auto;
      max-width: 880px;
      border-radius: 10px;
      padding: 16px 24px;
      font-size: 14px;
    }

    .info-box {
      background-color: #dcfce7;
      border-left: 5px solid #22c55e;
    }

    .contact-box {
      background-color: #f3f4f6;
      border-left: 5px solid #9ca3af;
    }
  </style>
</head>

<body>
  <div class="navbar">
    Profil Pasien
    <small>Pusat Kesehatan Masyarakat</small>
  </div>

  <div class="container">
    <div class="profile-header">
      <h2>Siti Nurhaliza</h2>
    </div>

    <div class="profile-body">
      <div class="profile-item">
        <label>Nomor Induk Kependudukan (NIK)</label>
        <p>3201234567890123</p>
      </div>
      <div class="profile-item">
        <label>Tanggal Lahir</label>
        <p>15 Maret 1985</p>
      </div>
      <div class="profile-item">
        <label>Jenis Kelamin</label>
        <p>Perempuan</p>
      </div>
      <div class="profile-item">
        <label>No. Telepon</label>
        <p>0812-3456-7890</p>
      </div>
      <div class="profile-item" style="grid-column: span 2">
        <label>Alamat Lengkap</label>
        <p>Jl. Merdeka No. 45, RT 02/RW 05, Kelurahan Sukajaya, Kecamatan Cikarang Utara, Kabupaten Bekasi, Jawa Barat 17530</p>
      </div>
      <div class="profile-item">
        <label>Golongan Darah</label>
        <p>A+</p>
      </div>
      <div class="profile-item">
        <label>Pekerjaan</label>
        <p>Guru SD</p>
      </div>
    </div>

    <div class="button-group">
      <button class="edit">Edit Profil</button>
      <button class="print">Cetak Profil</button>
      <button class="visit">Riwayat Kunjungan</button>
    </div>
  </div>

  <div class="info-box">
    <strong>Informasi Penting:</strong> Pastikan data profil Anda selalu terbaru. Jika ada perubahan data, segera laporkan ke petugas pendaftaran atau hubungi bagian administrasi puskesmas.
  </div>

  <div class="contact-box">
    <strong>Kontak Puskesmas:</strong><br>
    Telp: (021) 8888-9999 | WhatsApp: 0812-1111-2222 | Email: info@puskesmas-sukajaya.go.id
  </div>
</body>

</html>