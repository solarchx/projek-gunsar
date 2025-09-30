<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Pasien - Puskesmas GunSar</title>
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

    .card { border-radius: 15px; }
    .card h3 { color: #20c997; font-weight: bold; }

    .table thead { background: #20c997; color: white; }
    .badge.bg-success { background-color: #20c997 !important; }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="">Dashboard Pasien</a>
    </div>
  </nav>

  <!-- Sidebar -->
  <div class="sidebar">
    <a href="{{ route('pasien.riwayat') }}"><i class="bi bi-clock-history me-2"></i> Riwayat</a>
    <a href="{{ route('pasien.profil') }}"><i class="bi bi-person-circle me-2"></i> Profil</a>
    <a href="{{ route('pasien.jadwal') }}"><i class="bi bi-calendar-check me-2"></i> Jadwal</a>
    <form method="POST" action="{{ route('logout') }}">
      @csrf
      <button type="submit" class="btn w-100 text-start text-white" style="background:none; border:none; padding:12px 20px;">
        <i class="bi bi-box-arrow-right me-2"></i> Logout
      </button>
    </form>
  </div>

  <!-- Konten Utama -->
  <div class="content mt-4">
    <div class="row">
      <div class="col-md-4">
        <div class="card text-center shadow-sm p-3 mb-4">
          <h6>Total Kunjungan</h6>
          <h3>1</h3>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card text-center shadow-sm p-3 mb-4">
          <h6>Jadwal Mendatang</h6>
          <h3>2</h3>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card text-center shadow-sm p-3 mb-4">
          <h6>Status Pendaftaran</h6>
          <h3>Selesai</h3>
        </div>
      </div>
    </div>

    <div class="card shadow-sm mb-4">
      <div class="card-header text-white" style="background-color:#20c997;">Jadwal Pemeriksaan</div>
      <div class="card-body">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Tanggal</th>
              <th>Poli</th>
              <th>Dokter</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>30 Sept 2025</td>
              <td>Poli Umum</td>
              <td>dr. Budi</td>
              <td><span class="badge bg-success">Terkonfirmasi</span></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <div class="card shadow-sm">
      <div class="card-header text-white" style="background-color:#20c997;">Riwayat Kunjungan</div>
      <div class="card-body">
        <ul class="list-group">
          <li class="list-group-item">10 Sept 2025 - Poli Umum - dr. Budi ✅</li>
        </ul>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
