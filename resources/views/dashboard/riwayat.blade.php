{{-- resources/views/dashboard/riwayat.blade.php --}}
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Riwayat Kunjungan - Puskesmas GunSar</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body { font-family: "Poppins", sans-serif; background-color: #f8f9fa; }
    .navbar { margin-bottom: 20px; }
    .card { border-radius: 15px; }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="{{ route('pasien.dashboard') }}">Dashboard Pasien</a>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link active" href="{{ route('pasien.riwayat') }}">Riwayat</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ route('pasien.profil') }}">Profil</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ route('pasien.jadwal') }}">Jadwal</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ route('pasien.pendaftaran') }}">Pendaftaran</a></li>
          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <li class="nav-item">
              <button type="submit" class="btn btn-link nav-link" style="color: white; text-decoration: none;">Logout</button>
            </li>
          </form>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Konten Riwayat dengan Slide -->
  <div class="container mt-4">
    <div class="card shadow-sm">
      <div class="card-header bg-success text-white">Riwayat Kunjungan Pasien</div>
      <div class="card-body">

        <div id="riwayatCarousel" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">

            <!-- Slide 1 -->
            <div class="carousel-item active">
              <div class="card text-center p-4">
                <h5>10 Sept 2025</h5>
                <p><strong>Poli:</strong> Umum</p>
                <p><strong>Dokter:</strong> dr. Budi</p>
                <p><strong>Diagnosa:</strong> Demam & Flu</p>
                <span class="badge bg-success">Selesai</span>
              </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item">
              <div class="card text-center p-4">
                <h5>01 Sept 2025</h5>
                <p><strong>Poli:</strong> umum</p>
                <p><strong>Dokter:</strong> dr. Rina</p>
                <p><strong>Diagnosa:</strong> Batuk Pilek</p>
                <span class="badge bg-success">Selesai</span>
              </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item">
              <div class="card text-center p-4">
                <h5>20 Agustus 2025</h5>
                <p><strong>Poli:</strong> umum</p>
                <p><strong>Dokter:</strong> dr. Rina</p>
                <p><strong>Diagnosa:</strong> batuk</p>
                <span class="badge bg-success">Selesai</span>
              </div>
            </div>

            <!-- Slide 4 -->
            <div class="carousel-item">
              <div class="card text-center p-4">
                <h5>05 Juli 2025</h5>
                <p><strong>Poli:</strong> umum</p>
                <p><strong>Dokter:</strong> dr. Rina</p>
                <p><strong>Diagnosa:</strong> demam</p>
                <span class="badge bg-success">Selesai</span>
              </div>
            </div>

          </div>

          <!-- Tombol Navigasi -->
          <button class="carousel-control-prev" type="button" data-bs-target="#riwayatCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#riwayatCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
          </button>
        </div>

      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
