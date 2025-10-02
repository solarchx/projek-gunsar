<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pendaftaran Pasien - Puskesmas GunSar</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body { font-family: "Poppins", sans-serif; background-color: #f8f9fa; }

    /* Sidebar */
    .sidebar {
      height: 100vh;
      background: #2dac86ff; /* tosca */
      color: white;
      position: fixed;
      top: 0;
      left: 0;
      width: 220px;
      padding-top: 70px;
    }
    .sidebar a {
      color: white;
      display: block;
      padding: 12px 20px;
      text-decoration: none;
      font-size: 15px;
    }
    .sidebar a:hover {
      background: rgba(255, 255, 255, 0.2);
      border-radius: 5px;
    }

    /* Navbar */
    .navbar {
      margin-left: 220px;
      background-color: #20c997 !important;
    }
    .navbar .navbar-brand {
      color: white !important;
      font-weight: bold;
    }

    /* Content */
    .content {
      margin-left: 220px;
      padding: 20px;
    }

    .card { 
      border-radius: 15px; 
      border: none;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    .card-header {
      background-color: #20c997 !important;
      color: white;
      border-radius: 15px 15px 0 0 !important;
      font-weight: bold;
    }
    
    .btn-primary {
      background-color: #20c997;
      border-color: #20c997;
    }
    .btn-primary:hover {
      background-color: #1ba87e;
      border-color: #1ba87e;
    }
    
    .form-label {
      font-weight: 500;
      color: #333;
    }
    
    .required::after {
      content: " *";
      color: red;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="">Pendaftaran Pasien Baru</a>
    </div>
  </nav>

  <!-- Sidebar -->
  <div class="sidebar">
    <a href="{{ route('pasien.dashboard') }}"><i class="bi bi-house-door me-2"></i> Dashboard</a>
    <a href="{{ route('pasien.riwayat') }}"><i class="bi bi-clock-history me-2"></i> Riwayat</a>
    <a href="{{ route('pasien.profil') }}"><i class="bi bi-person-circle me-2"></i> Profil</a>
    <a href="{{ route('pasien.jadwal') }}"><i class="bi bi-calendar-check me-2"></i> Jadwal</a>
    <a href="{{ route('pasien.daftar') }}" class="active"><i class="bi bi-person-plus me-2"></i> Pendaftaran</a>
    <form method="POST" action="{{ route('logout') }}">
      @csrf
      <button type="submit" class="btn w-100 text-start text-white" style="background:none; border:none; padding:12px 20px;">
        <i class="bi bi-box-arrow-right me-2"></i> Logout
      </button>
    </form>
  </div>

  <!-- Konten Utama -->
  <div class="content mt-4">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card shadow-sm">
          <div class="card-header text-white">
            <h5 class="mb-0"><i class="bi bi-person-plus me-2"></i>Form Pendaftaran Pasien Baru</h5>
          </div>
          <div class="card-body p-4">
            <form action="{{ route('pasien.store') }}" method="POST">
              @csrf
              
              <!-- NIK -->
              <div class="mb-3">
                <label for="nik" class="form-label required">NIK (Nomor Induk Kependudukan)</label>
                <input type="text" class="form-control" id="nik" name="nik" placeholder="Masukkan 16 digit NIK" required maxlength="16" pattern="[0-9]{16}">
                <div class="form-text">NIK harus terdiri dari 16 digit angka</div>
              </div>
              
              <!-- Nama Lengkap -->
              <div class="mb-3">
                <label for="nama" class="form-label required">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama lengkap" required>
              </div>
              
              <!-- Alamat -->
              <div class="mb-3">
                <label for="alamat" class="form-label required">Alamat Lengkap</label>
                <textarea class="form-control" id="alamat" name="alamat" rows="3" placeholder="Masukkan alamat lengkap" required></textarea>
              </div>
              
              <!-- Jenis Kelamin -->
              <div class="mb-4">
                <label class="form-label required">Jenis Kelamin</label>
                <div class="d-flex gap-4">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki" value="L" required>
                    <label class="form-check-label" for="laki">
                      Laki-laki
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="P">
                    <label class="form-check-label" for="perempuan">
                      Perempuan
                    </label>
                  </div>
                </div>
              </div>
              
              <!-- Tombol Submit -->
              <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button type="reset" class="btn btn-outline-secondary me-md-2">
                  <i class="bi bi-arrow-clockwise me-1"></i> Reset
                </button>
                <button type="submit" class="btn btn-primary">
                  <i class="bi bi-send-check me-1"></i> Daftar Pasien
                </button>
              </div>
            </form>
          </div>
        </div>
        
        <!-- Informasi Tambahan -->
        <div class="card shadow-sm mt-4">
          <div class="card-body">
            <h6><i class="bi bi-info-circle me-2 text-primary"></i>Informasi Penting</h6>
            <ul class="mb-0">
              <li>Pastikan data yang dimasukkan sesuai dengan KTP</li>
              <li>Data yang sudah terdaftar tidak dapat diubah tanpa persetujuan admin</li>
              <li>Proses pendaftaran membutuhkan waktu 1-2 hari kerja</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  
  <script>
    // Validasi NIK harus 16 digit angka
    document.getElementById('nik').addEventListener('input', function(e) {
      this.value = this.value.replace(/[^0-9]/g, '');
      if (this.value.length > 16) {
        this.value = this.value.slice(0, 16);
      }
    });
    
    // Validasi form sebelum submit
    document.querySelector('form').addEventListener('submit', function(e) {
      const nik = document.getElementById('nik').value;
      const nama = document.getElementById('nama').value;
      const alamat = document.getElementById('alamat').value;
      const jenisKelamin = document.querySelector('input[name="jenis_kelamin"]:checked');
      
      if (nik.length !== 16) {
        e.preventDefault();
        alert('NIK harus terdiri dari 16 digit angka');
        document.getElementById('nik').focus();
        return;
      }
      
      if (!jenisKelamin) {
        e.preventDefault();
        alert('Pilih jenis kelamin');
        return;
      }
    });
  </script>
</body>
</html>