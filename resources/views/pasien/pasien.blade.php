<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Pasien</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #3fbbc0;
            --primary-dark: #38a9ad;
            --primary-light: #e1f5f6;
            --sidebar-width: 250px;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
        }
        
        .sidebar {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-dark) 100%);
            color: white;
            height: 100vh;
            position: fixed;
            width: var(--sidebar-width);
            padding: 0;
            box-shadow: 2px 0 10px rgba(0,0,0,0.1);
        }
        
        .sidebar-brand {
            padding: 1.5rem;
            text-align: center;
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }
        
        .sidebar-menu {
            list-style: none;
            padding: 0;
            margin: 1rem 0;
        }
        
        .sidebar-menu li {
            margin: 0;
        }
        
        .sidebar-menu a {
            color: white;
            text-decoration: none;
            padding: 1rem 1.5rem;
            display: block;
            transition: all 0.3s;
            border-left: 4px solid transparent;
        }
        
        .sidebar-menu a:hover, .sidebar-menu a.active {
            background-color: rgba(255,255,255,0.1);
            border-left-color: white;
        }
        
        .sidebar-menu i {
            width: 20px;
            margin-right: 10px;
        }
        
        .main-content {
            margin-left: var(--sidebar-width);
            padding: 2rem;
        }
        
        .header {
            background: white;
            padding: 1rem 2rem;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            margin-bottom: 2rem;
        }
        
        .stats-card {
            background: white;
            border-radius: 10px;
            padding: 1.5rem;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            border-top: 4px solid var(--primary-color);
            margin-bottom: 1.5rem;
        }
        
        .stats-number {
            font-size: 2rem;
            font-weight: bold;
            color: var(--primary-color);
        }
        
        .stats-label {
            color: #666;
            font-size: 0.9rem;
        }
        
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            margin-bottom: 1.5rem;
        }
        
        .card-header {
            background: white;
            border-bottom: 1px solid #eee;
            padding: 1rem 1.5rem;
            font-weight: 600;
            color: var(--primary-color);
        }
        
        .table th {
            border-top: none;
            font-weight: 600;
            color: #555;
        }
        
        .badge-success {
            background-color: #28a745;
        }
        
        .badge-warning {
            background-color: #ffc107;
            color: #000;
        }
        
        .badge-danger {
            background-color: #dc3545;
        }
        
        .user-profile {
            display: flex;
            align-items: center;
            gap: 1rem;
        }
        
        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: var(--primary-light);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary-color);
            font-weight: bold;
        }
        
        .btn-primary {
            background-color: var(--primary-color);
            border: none;
        }
        
        .btn-primary:hover {
            background-color: var(--primary-dark);
        }
        
        @media (max-width: 768px) {
            .sidebar {
                width: 60px;
            }
            
            .sidebar-brand span, .sidebar-menu span {
                display: none;
            }
            
            .sidebar-menu i {
                margin-right: 0;
                font-size: 1.2rem;
            }
            
            .main-content {
                margin-left: 60px;
            }
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <div class="sidebar-brand">
            <h4><i class="fas fa-hospital-alt me-2"></i> <span>Puskes Gunsar</span></h4>
        </div>
        
        <ul class="sidebar-menu">
            <li><a href="/pasien/pasien" class="active"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a></li>
            <li><a href="/pasien/profil"><i class="fas fa-user"></i> <span>Profil Saya</span></a></li>
            <li><a href="/pasien/riwayat"><i class="fas fa-history"></i> <span>Riwayat Kunjungan</span></a></li>
            <li><a href="/pasien/jadwal"><i class="fas fa-calendar-alt"></i> <span>Jadwal Dokter</span></a></li>
            <li><a href="/pasien/daftar"><i class="fas fa-edit"></i> <span>Pendaftaran</span></a></li>
            <li><a href="#"><i class="fas fa-sign-out-alt"></i> <span>Keluar</span></a></li>
        </ul>
    </div>
    
    <div class="main-content">
        <div class="header d-flex justify-content-between align-items-center">
            <div>
                <h2 class="mb-1">Dashboard Pasien</h2>
                <p class="text-muted mb-0">Selamat datang kembali, <strong>Ahmad Budiman</strong></p>
            </div>
        </div>
        
        <!-- Stats Cards -->
        <div class="row">
            <div class="col-md-3">
                <div class="stats-card">
                    <div class="stats-number">5</div>
                    <div class="stats-label">Total Kunjungan</div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stats-card">
                    <div class="stats-number">2</div>
                    <div class="stats-label">Janji Mendatang</div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stats-card">
                    <div class="stats-number">3</div>
                    <div class="stats-label">Resep Aktif</div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stats-card">
                    <div class="stats-number">1</div>
                    <div class="stats-label">Notifikasi</div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <!-- Riwayat Kunjungan -->
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <span><i class="fas fa-history me-2"></i>Riwayat Kunjungan Terbaru</span>
                        <a href="#" class="btn btn-sm btn-primary">Lihat Semua</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Tanggal</th>
                                        <th>Dokter</th>
                                        <th>Poli</th>
                                        <th>Diagnosa</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>15 Mar 2024</td>
                                        <td>Dr. Sari Indah</td>
                                        <td>Poli Umum</td>
                                        <td>Flu dan Batuk</td>
                                        <td><span class="badge badge-success">Selesai</span></td>
                                    </tr>
                                    <tr>
                                        <td>10 Mar 2024</td>
                                        <td>Dr. Budi Santoso</td>
                                        <td>Poli Gigi</td>
                                        <td>Pembersihan Karang Gigi</td>
                                        <td><span class="badge badge-success">Selesai</span></td>
                                    </tr>
                                    <tr>
                                        <td>05 Mar 2024</td>
                                        <td>Dr. Maya Sari</td>
                                        <td>Poli Anak</td>
                                        <td>Imunisasi</td>
                                        <td><span class="badge badge-success">Selesai</span></td>
                                    </tr>
                                    <tr>
                                        <td>28 Feb 2024</td>
                                        <td>Dr. Andi Wijaya</td>
                                        <td>Poli Mata</td>
                                        <td>Pemeriksaan Mata</td>
                                        <td><span class="badge badge-success">Selesai</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Jadwal Mendatang & Aksi Cepat -->
            <div class="col-md-4">
                <!-- Jadwal Mendatang -->
                <div class="card">
                    <div class="card-header">
                        <i class="fas fa-calendar-check me-2"></i>Janji Mendatang
                    </div>
                    <div class="card-body">
                        <div class="mb-3 p-3 border rounded">
                            <div class="fw-bold text-primary">18 Mar 2024 - 10:00</div>
                            <div class="small">Dr. Sari Indah - Poli Umum</div>
                            <div class="small text-muted">Kontrol rutin</div>
                            <span class="badge bg-warning text-dark mt-2">Menunggu</span>
                        </div>
                        <div class="p-3 border rounded">
                            <div class="fw-bold text-primary">25 Mar 2024 - 14:30</div>
                            <div class="small">Dr. Budi Santoso - Poli Gigi</div>
                            <div class="small text-muted">Pemeriksaan lanjutan</div>
                            <span class="badge bg-warning text-dark mt-2">Menunggu</span>
                        </div>
                    </div>
                </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Simple active menu handler
        document.querySelectorAll('.sidebar-menu a').forEach(link => {
            link.addEventListener('click', function() {
                document.querySelectorAll('.sidebar-menu a').forEach(a => a.classList.remove('active'));
                this.classList.add('active');
            });
        });
    </script>
</body>
</html>