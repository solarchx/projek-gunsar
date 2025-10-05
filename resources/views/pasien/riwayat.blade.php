<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Kunjungan - Dashboard</title>
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
            background-color: #f8f9fa;
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
        
        .badge-info {
            background-color: #17a2b8;
        }
        
        .btn-primary {
            background-color: var(--primary-color);
            border: none;
        }
        
        .btn-primary:hover {
            background-color: var(--primary-dark);
        }
        
        .btn-outline-primary {
            color: var(--primary-color);
            border-color: var(--primary-color);
        }
        
        .btn-outline-primary:hover {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }
        
        .visit-card {
            border-left: 4px solid var(--primary-color);
            transition: all 0.3s;
        }
        
        .visit-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }
        
        .filter-section {
            background: white;
            padding: 1.5rem;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            margin-bottom: 1.5rem;
        }
        
        .stats-card {
            background: white;
            border-radius: 10px;
            padding: 1.5rem;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            border-top: 4px solid var(--primary-color);
            text-align: center;
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
        
        .modal-header {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-dark) 100%);
            color: white;
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
                <h2 class="mb-1">Riwayat Kunjungan</h2>
                <p class="text-muted mb-0">Lihat semua riwayat kunjungan Anda</p>
            </div>
            <div class="d-flex align-items-center gap-3">
            </div>
        </div>
        
        <!-- Statistik -->
        <div class="row mb-4">
            <div class="col-md-3">
                <div class="stats-card">
                    <div class="stats-number">12</div>
                    <div class="stats-label">Total Kunjungan</div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stats-card">
                    <div class="stats-number">8</div>
                    <div class="stats-label">Kunjungan Tahun Ini</div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stats-card">
                    <div class="stats-number">4</div>
                    <div class="stats-label">Poli Berbeda</div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stats-card">
                    <div class="stats-number">6</div>
                    <div class="stats-label">Dokter Dikunjungi</div>
                </div>
            </div>
        </div>
        
        <!-- Tabel Riwayat -->
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <span><i class="fas fa-list me-2"></i>Daftar Riwayat Kunjungan</span>
                <div class="d-flex gap-2">
                    <input type="text" class="form-control" placeholder="Cari riwayat..." style="width: 250px;">
                    <button class="btn btn-outline-primary">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>No. Kunjungan</th>
                                <th>Dokter</th>
                                <th>Poli</th>
                                <th>Diagnosa</th>
                                <th>Tindakan</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>15 Mar 2024<br><small class="text-muted">10:00 WIB</small></td>
                                <td>KJN-2024-0012</td>
                                <td>
                                    <div class="fw-bold">Dr. Sari Indah</div>
                                    <small class="text-muted">Dokter Umum</small>
                                </td>
                                <td>Poli Umum</td>
                                <td>Flu dan Batuk</td>
                                <td>Konsultasi & Resep</td>
                                <td><span class="badge bg-success">Selesai</span></td>
                                <td>
                                    <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#detailModal">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>10 Mar 2024<br><small class="text-muted">14:30 WIB</small></td>
                                <td>KJN-2024-0011</td>
                                <td>
                                    <div class="fw-bold">Dr. Budi Santoso</div>
                                    <small class="text-muted">Dokter Gigi</small>
                                </td>
                                <td>Poli Gigi</td>
                                <td>Pembersihan Karang Gigi</td>
                                <td>Scaling</td>
                                <td><span class="badge bg-success">Selesai</span></td>
                                <td>
                                    <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#detailModal">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>05 Mar 2024<br><small class="text-muted">09:15 WIB</small></td>
                                <td>KJN-2024-0010</td>
                                <td>
                                    <div class="fw-bold">Dr. Maya Sari</div>
                                    <small class="text-muted">Dokter Anak</small>
                                </td>
                                <td>Poli Anak</td>
                                <td>Imunisasi DPT</td>
                                <td>Vaksinasi</td>
                                <td><span class="badge bg-success">Selesai</span></td>
                                <td>
                                    <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#detailModal">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>28 Feb 2024<br><small class="text-muted">11:00 WIB</small></td>
                                <td>KJN-2024-0009</td>
                                <td>
                                    <div class="fw-bold">Dr. Andi Wijaya</div>
                                    <small class="text-muted">Dokter Mata</small>
                                </td>
                                <td>Poli Mata</td>
                                <td>Mata Minus</td>
                                <td>Pemeriksaan Refraksi</td>
                                <td><span class="badge bg-success">Selesai</span></td>
                                <td>
                                    <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#detailModal">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>20 Feb 2024<br><small class="text-muted">08:45 WIB</small></td>
                                <td>KJN-2024-0008</td>
                                <td>
                                    <div class="fw-bold">Dr. Sari Indah</div>
                                    <small class="text-muted">Dokter Umum</small>
                                </td>
                                <td>Poli Umum</td>
                                <td>Pemeriksaan Rutin</td>
                                <td>Konsultasi</td>
                                <td><span class="badge bg-success">Selesai</span></td>
                                <td>
                                    <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#detailModal">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <!-- Pagination -->
                <nav>
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#">Previous</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <!-- Modal Detail Kunjungan -->
    <div class="modal fade" id="detailModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Detail Kunjungan</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h6>Informasi Kunjungan</h6>
                            <table class="table table-sm">
                                <tr>
                                    <td width="40%"><strong>No. Kunjungan</strong></td>
                                    <td>KJN-2024-0012</td>
                                </tr>
                                <tr>
                                    <td><strong>Tanggal</strong></td>
                                    <td>15 Maret 2024, 10:00 WIB</td>
                                </tr>
                                <tr>
                                    <td><strong>Dokter</strong></td>
                                    <td>Dr. Sari Indah</td>
                                </tr>
                                <tr>
                                    <td><strong>Poli</strong></td>
                                    <td>Poli Umum</td>
                                </tr>
                                <tr>
                                    <td><strong>Status</strong></td>
                                    <td><span class="badge bg-success">Selesai</span></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <h6>Informasi Medis</h6>
                            <table class="table table-sm">
                                <tr>
                                    <td width="40%"><strong>Diagnosa</strong></td>
                                    <td>Flu dan Batuk</td>
                                </tr>
                                <tr>
                                    <td><strong>Tindakan</strong></td>
                                    <td>Konsultasi & Resep Obat</td>
                                </tr>
                                <tr>
                                    <td><strong>Keluhan</strong></td>
                                    <td>Demam, pilek, dan batuk selama 3 hari</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    
                    <div class="row mt-3">
                        <div class="col-12">
                            <h6>Resep Obat</h6>
                            <div class="table-responsive">
                                <table class="table table-sm">
                                    <thead>
                                        <tr>
                                            <th>Nama Obat</th>
                                            <th>Dosis</th>
                                            <th>Aturan Pakai</th>
                                            <th>Jumlah</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Paracetamol 500mg</td>
                                            <td>1 tablet</td>
                                            <td>3x sehari setelah makan</td>
                                            <td>10 tablet</td>
                                        </tr>
                                        <tr>
                                            <td>CTM 4mg</td>
                                            <td>1 tablet</td>
                                            <td>2x sehari</td>
                                            <td>6 tablet</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row mt-3">
                        <div class="col-12">
                            <h6>Catatan Dokter</h6>
                            <div class="alert alert-info">
                                <small>
                                    Istirahat yang cukup, perbanyak minum air putih, dan kontrol kembali jika demam tidak turun dalam 3 hari.
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary">
                        <i class="fas fa-print me-2"></i>Cetak Detail
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Active menu handler
        document.querySelectorAll('.sidebar-menu a').forEach(link => {
            link.addEventListener('click', function() {
                document.querySelectorAll('.sidebar-menu a').forEach(a => a.classList.remove('active'));
                this.classList.add('active');
            });
        });

        // Search functionality
        document.querySelector('input[placeholder="Cari riwayat..."]').addEventListener('input', function(e) {
            const searchTerm = e.target.value.toLowerCase();
            // Implement search logic here
            console.log('Searching for:', searchTerm);
        });
    </script>
</body>
</html>