<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Puskesmas</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome untuk ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .sidebar {
            min-height: 100vh;
            background-color: #3fbbc0;
            color: white;
        }

        .sidebar .nav-link {
            color: rgba(255, 255, 255, 0.8);
        }

        .sidebar .nav-link:hover {
            color: white;
            background-color: rgba(255, 255, 255, 0.1);
        }

        .sidebar .nav-link.active {
            color: white;
            background-color: rgba(255, 255, 255, 0.2);
        }

        .card-icon {
            font-size: 2rem;
            margin-bottom: 1rem;
        }

        .bg-primary-light {
            background-color: #e3f2fd;
        }

        .bg-success-light {
            background-color: #e8f5e9;
        }

        .bg-warning-light {
            background-color: #fff8e1;
        }

        .bg-danger-light {
            background-color: #ffebee;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 col-lg-2 d-md-block sidebar collapse">
                <div class="position-sticky pt-3">
                    <div class="text-center mb-4">
                        <h4>Puskes GunSar</h4>
                        <hr>
                    </div>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">
                                <i class="fas fa-tachometer-alt me-2"></i>Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-user-injured me-2"></i>Pasien
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-calendar-check me-2"></i>Janji Temu
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-pills me-2"></i>Obat
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-file-medical me-2"></i>Rekam Medis
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-chart-bar me-2"></i>Laporan
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-users me-2"></i>Staf
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-cog me-2"></i>Pengaturan
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Dashboard Puskesmas</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group me-2">
                            <button type="button" class="btn btn-sm btn-outline-secondary">
                                <i class="fas fa-calendar me-1"></i>Hari Ini
                            </button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">
                                <i class="fas fa-filter me-1"></i>Filter
                            </button>
                        </div>
                        <button type="button" class="btn btn-sm btn-primary">
                            <i class="fas fa-plus me-1"></i>Tambah Pasien
                        </button>
                    </div>
                </div>

                <!-- Info Cards -->
                <div class="row mb-4">
                    <div class="col-md-3 mb-3">
                        <div class="card h-100 bg-primary-light">
                            <div class="card-body text-center">
                                <i class="fas fa-user-injured card-icon text-primary"></i>
                                <h5 class="card-title">Total Pasien</h5>
                                <h2 class="card-text">1,248</h2>
                                <p class="text-muted"><i class="fas fa-arrow-up text-success"></i> 12% dari bulan lalu
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card h-100 bg-success-light">
                            <div class="card-body text-center">
                                <i class="fas fa-calendar-day card-icon text-success"></i>
                                <h5 class="card-title">Kunjungan Hari Ini</h5>
                                <h2 class="card-text">48</h2>
                                <p class="text-muted"><i class="fas fa-arrow-down text-danger"></i> 3% dari kemarin</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card h-100 bg-warning-light">
                            <div class="card-body text-center">
                                <i class="fas fa-procedures card-icon text-warning"></i>
                                <h5 class="card-title">Rawat Inap</h5>
                                <h2 class="card-text">12</h2>
                                <p class="text-muted"><i class="fas fa-arrow-up text-success"></i> 2 dari kemarin</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card h-100 bg-danger-light">
                            <div class="card-body text-center">
                                <i class="fas fa-vial card-icon text-danger"></i>
                                <h5 class="card-title">Tes Lab</h5>
                                <h2 class="card-text">24</h2>
                                <p class="text-muted"><i class="fas fa-equals text-secondary"></i> sama dengan kemarin
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Charts and Tables -->
                <div class="row">
                    <div class="col-md-8 mb-4">
                        <div class="card">
                            <div class="card-header">
                                <h5>Grafik Kunjungan Pasien (30 Hari Terakhir)</h5>
                            </div>
                            <div class="card-body">
                                <!-- Tempat untuk grafik (bisa menggunakan Chart.js) -->
                                <div class="text-center py-5 bg-light rounded">
                                    <i class="fas fa-chart-line fa-3x text-primary mb-3"></i>
                                    <p>Grafik kunjungan pasien akan ditampilkan di sini</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="card-header">
                                <h5>Penyakit Terbanyak</h5>
                            </div>
                            <div class="card-body">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        ISPA
                                        <span class="badge bg-primary rounded-pill">142</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Hipertensi
                                        <span class="badge bg-primary rounded-pill">98</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Diabetes
                                        <span class="badge bg-primary rounded-pill">76</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Diare
                                        <span class="badge bg-primary rounded-pill">54</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Dermatitis
                                        <span class="badge bg-primary rounded-pill">32</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h5>Janji Temu Hari Ini</h5>
                                <button class="btn btn-sm btn-outline-primary">Lihat Semua</button>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Nama Pasien</th>
                                                <th>Waktu</th>
                                                <th>Dokter</th>
                                                <th>Keluhan</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Budi Santoso</td>
                                                <td>08:00 - 08:30</td>
                                                <td>dr. Ani Wijaya</td>
                                                <td>Demam dan batuk</td>
                                                <td><span class="badge bg-success">Telah Dilayani</span></td>
                                                <td>
                                                    <button class="btn btn-sm btn-outline-primary">Detail</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Siti Rahayu</td>
                                                <td>09:00 - 09:30</td>
                                                <td>dr. Bambang S.</td>
                                                <td>Pemeriksaan rutin</td>
                                                <td><span class="badge bg-warning">Menunggu</span></td>
                                                <td>
                                                    <button class="btn btn-sm btn-outline-primary">Detail</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Ahmad Fauzi</td>
                                                <td>10:00 - 10:30</td>
                                                <td>dr. Ani Wijaya</td>
                                                <td>Kontrol hipertensi</td>
                                                <td><span class="badge bg-secondary">Belum Datang</span></td>
                                                <td>
                                                    <button class="btn btn-sm btn-outline-primary">Detail</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Dewi Lestari</td>
                                                <td>11:00 - 11:30</td>
                                                <td>dr. Citra A.</td>
                                                <td>Imunisasi anak</td>
                                                <td><span class="badge bg-secondary">Belum Datang</span></td>
                                                <td>
                                                    <button class="btn btn-sm btn-outline-primary">Detail</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
