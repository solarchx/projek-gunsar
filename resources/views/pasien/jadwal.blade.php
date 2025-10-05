<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Dokter - Dashboard</title>
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
        
        .doctor-card {
            border-left: 4px solid var(--primary-color);
            transition: all 0.3s;
        }
        
        .doctor-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }
        
        .doctor-avatar {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-dark) 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.5rem;
            font-weight: bold;
        }
        
        .schedule-badge {
            background-color: var(--primary-light);
            color: var(--primary-dark);
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 600;
        }
        
        .day-tabs .nav-link {
            color: #666;
            font-weight: 600;
            padding: 1rem 1.5rem;
            border: none;
        }
        
        .day-tabs .nav-link.active {
            color: var(--primary-color);
            border-bottom: 3px solid var(--primary-color);
            background: transparent;
        }
        
        .availability-badge {
            font-size: 0.8rem;
            padding: 0.3rem 0.8rem;
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
                <h2 class="mb-1">Jadwal Dokter</h2>
                <p class="text-muted mb-0">Jadwal praktek dokter poli umum</p>
            </div>
        </div>

        <!-- Info Poli -->
        <div class="card mb-4">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h5 class="text-primary mb-2">Poli Umum</h5>
                        <p class="mb-0">Melayani pemeriksaan kesehatan umum, konsultasi medis, dan pengobatan penyakit ringan hingga menengah.</p>
                    </div>
                    <div class="col-md-4 text-end">
                        <div class="schedule-badge">
                            <i class="fas fa-clock me-2"></i>Jam Operasional: 08:00 - 14:00 WIB
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tabs Hari -->
        <div class="card">
            <div class="card-header">
                <ul class="nav nav-tabs day-tabs" id="dayTabs">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#senin">Senin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#selasa">Selasa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#rabu">Rabu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#kamis">Kamis</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#jumat">Jumat</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#sabtu">Sabtu</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content">
                    <!-- Senin -->
                    <div class="tab-pane fade show active" id="senin">
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="card doctor-card h-100">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="doctor-avatar">SI</div>
                                            </div>
                                            <div class="col-9">
                                                <h5 class="mb-1">Dr. Sari Indah</h5>
                                                <p class="text-muted mb-2">Dokter Umum</p>
                                                <div class="mb-2">
                                                    <span class="badge bg-primary availability-badge">Tersedia</span>
                                                </div>
                                                <div class="text-success mb-2">
                                                    <i class="fas fa-clock me-1"></i>08:00 - 12:00 WIB
                                                </div>
                                                <small class="text-muted">Spesialis penyakit dalam dan konsultasi umum</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="card doctor-card h-100">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="doctor-avatar">BS</div>
                                            </div>
                                            <div class="col-9">
                                                <h5 class="mb-1">Dr. Budi Santoso</h5>
                                                <p class="text-muted mb-2">Dokter Umum</p>
                                                <div class="mb-2">
                                                    <span class="badge bg-primary availability-badge">Tersedia</span>
                                                </div>
                                                <div class="text-success mb-2">
                                                    <i class="fas fa-clock me-1"></i>10:00 - 14:00 WIB
                                                </div>
                                                <small class="text-muted">Spesialis kesehatan keluarga dan imunisasi</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Selasa -->
                    <div class="tab-pane fade" id="selasa">
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="card doctor-card h-100">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="doctor-avatar">AW</div>
                                            </div>
                                            <div class="col-9">
                                                <h5 class="mb-1">Dr. Andi Wijaya</h5>
                                                <p class="text-muted mb-2">Dokter Umum</p>
                                                <div class="mb-2">
                                                    <span class="badge bg-primary availability-badge">Tersedia</span>
                                                </div>
                                                <div class="text-success mb-2">
                                                    <i class="fas fa-clock me-1"></i>08:00 - 14:00 WIB
                                                </div>
                                                <small class="text-muted">Spesialis pemeriksaan rutin dan penanganan darurat</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Rabu -->
                    <div class="tab-pane fade" id="rabu">
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="card doctor-card h-100">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="doctor-avatar">MS</div>
                                            </div>
                                            <div class="col-9">
                                                <h5 class="mb-1">Dr. Maya Sari</h5>
                                                <p class="text-muted mb-2">Dokter Umum</p>
                                                <div class="mb-2">
                                                    <span class="badge bg-primary availability-badge">Tersedia</span>
                                                </div>
                                                <div class="text-success mb-2">
                                                    <i class="fas fa-clock me-1"></i>08:00 - 12:00 WIB
                                                </div>
                                                <small class="text-muted">Spesialis kesehatan wanita dan anak</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="card doctor-card h-100">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="doctor-avatar">SI</div>
                                            </div>
                                            <div class="col-9">
                                                <h5 class="mb-1">Dr. Sari Indah</h5>
                                                <p class="text-muted mb-2">Dokter Umum</p>
                                                <div class="mb-2">
                                                    <span class="badge bg-primary availability-badge">Tersedia</span>
                                                </div>
                                                <div class="text-success mb-2">
                                                    <i class="fas fa-clock me-1"></i>13:00 - 14:00 WIB
                                                </div>
                                                <small class="text-muted">Spesialis penyakit dalam dan konsultasi umum</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Kamis -->
                    <div class="tab-pane fade" id="kamis">
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="card doctor-card h-100">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="doctor-avatar">BS</div>
                                            </div>
                                            <div class="col-9">
                                                <h5 class="mb-1">Dr. Budi Santoso</h5>
                                                <p class="text-muted mb-2">Dokter Umum</p>
                                                <div class="mb-2">
                                                    <span class="badge bg-primary availability-badge">Tersedia</span>
                                                </div>
                                                <div class="text-success mb-2">
                                                    <i class="fas fa-clock me-1"></i>08:00 - 14:00 WIB
                                                </div>
                                                <small class="text-muted">Spesialis kesehatan keluarga dan imunisasi</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Jumat -->
                    <div class="tab-pane fade" id="jumat">
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="card doctor-card h-100">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="doctor-avatar">AW</div>
                                            </div>
                                            <div class="col-9">
                                                <h5 class="mb-1">Dr. Andi Wijaya</h5>
                                                <p class="text-muted mb-2">Dokter Umum</p>
                                                <div class="mb-2">
                                                    <span class="badge bg-primary availability-badge">Tersedia</span>
                                                </div>
                                                <div class="text-success mb-2">
                                                    <i class="fas fa-clock me-1"></i>08:00 - 11:00 WIB
                                                </div>
                                                <small class="text-muted">Spesialis pemeriksaan rutin dan penanganan darurat</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="card doctor-card h-100">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="doctor-avatar">MS</div>
                                            </div>
                                            <div class="col-9">
                                                <h5 class="mb-1">Dr. Maya Sari</h5>
                                                <p class="text-muted mb-2">Dokter Umum</p>
                                                <div class="mb-2">
                                                    <span class="badge bg-primary availability-badge">Tersedia</span>
                                                </div>
                                                <div class="text-success mb-2">
                                                    <i class="fas fa-clock me-1"></i>11:00 - 14:00 WIB
                                                </div>
                                                <small class="text-muted">Spesialis kesehatan wanita dan anak</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Sabtu -->
                    <div class="tab-pane fade" id="sabtu">
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="card doctor-card h-100">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="doctor-avatar">SI</div>
                                            </div>
                                            <div class="col-9">
                                                <h5 class="mb-1">Dr. Sari Indah</h5>
                                                <p class="text-muted mb-2">Dokter Umum</p>
                                                <div class="mb-2">
                                                    <span class="badge bg-warning availability-badge">Libur</span>
                                                </div>
                                                <div class="text-muted mb-2">
                                                    <i class="fas fa-clock me-1"></i>Tidak ada jadwal
                                                </div>
                                                <small class="text-muted">Spesialis penyakit dalam dan konsultasi umum</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="card doctor-card h-100">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="doctor-avatar">BS</div>
                                            </div>
                                            <div class="col-9">
                                                <h5 class="mb-1">Dr. Budi Santoso</h5>
                                                <p class="text-muted mb-2">Dokter Umum</p>
                                                <div class="mb-2">
                                                    <span class="badge bg-primary availability-badge">Tersedia</span>
                                                </div>
                                                <div class="text-success mb-2">
                                                    <i class="fas fa-clock me-1"></i>08:00 - 12:00 WIB
                                                </div>
                                                <small class="text-muted">Spesialis kesehatan keluarga dan imunisasi</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Informasi Tambahan -->
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <i class="fas fa-info-circle me-2"></i>Informasi Penting
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Daftar online minimal 1 jam sebelum jam praktek</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Bawa kartu berobat atau KTP asli</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Datang 15 menit sebelum jadwal konsultasi</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Untuk keadaan darurat, langsung ke IGD</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <i class="fas fa-phone me-2"></i>Kontak Poli Umum
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <strong>Telepon:</strong> (022) 1234-5678
                        </div>
                        <div class="mb-3">
                            <strong>Email:</strong> poli.umum@puskesgunsar.id
                        </div>
                        <div>
                            <strong>Lokasi:</strong> Lantai 1, Gedung Utama Puskesmas Gunsar
                        </div>
                    </div>
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

        // Auto-select current day
        const days = ['minggu', 'senin', 'selasa', 'rabu', 'kamis', 'jumat', 'sabtu'];
        const today = new Date().getDay();
        const currentDay = days[today];
        
        // Highlight current day tab if exists
        const currentTab = document.querySelector(`[href="#${currentDay}"]`);
        if (currentTab) {
            // Remove active from all tabs
            document.querySelectorAll('.day-tabs .nav-link').forEach(tab => {
                tab.classList.remove('active');
            });
            document.querySelectorAll('.tab-pane').forEach(pane => {
                pane.classList.remove('show', 'active');
            });
            
            // Add active to current day
            currentTab.classList.add('active');
            document.getElementById(currentDay).classList.add('show', 'active');
        }
    </script>
</body>
</html>