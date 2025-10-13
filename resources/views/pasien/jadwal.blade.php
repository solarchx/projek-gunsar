<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Kunjungan - Dashboard Pasien</title>
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
        
        .schedule-card {
            border-left: 4px solid var(--primary-color);
            transition: all 0.3s;
        }
        
        .schedule-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }
        
        .doctor-avatar {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-dark) 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.2rem;
            font-weight: bold;
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
        
        .poli-badge {
            background-color: var(--primary-color);
            color: white;
            padding: 0.3rem 0.8rem;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
        }
        
        .time-slot {
            border: 1px solid #dee2e6;
            border-radius: 8px;
            padding: 0.75rem 1rem;
            margin-bottom: 0.5rem;
            cursor: pointer;
            transition: all 0.3s;
            text-align: center;
        }
        
        .time-slot:hover {
            border-color: var(--primary-color);
            background-color: var(--primary-light);
        }
        
        .time-slot.selected {
            background-color: var(--primary-color);
            color: white;
            border-color: var(--primary-color);
        }
        
        .time-slot.disabled {
            background-color: #f8f9fa;
            color: #6c757d;
            cursor: not-allowed;
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
                <h2 class="mb-1">Jadwal Kunjungan Saya</h2>
                <p class="text-muted mb-0">Lihat dan kelola jadwal kunjungan Anda di Poli Umum</p>
            </div>
            <div class="d-flex align-items-center gap-3">
                <span class="poli-badge">Poli Umum</span>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#buatJanjiModal">
                    <i class="fas fa-plus me-2"></i>Buat Janji Baru
                </button>
            </div>
        </div>

        <!-- Jadwal Mendatang -->
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <span><i class="fas fa-calendar-check me-2"></i>Janji Mendatang</span>
                <span class="badge bg-primary">2 Janji</span>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div class="card schedule-card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-2">
                                        <div class="doctor-avatar">SI</div>
                                    </div>
                                    <div class="col-8">
                                        <h6 class="mb-1">Dr. Sari Indah</h6>
                                        <p class="text-muted mb-1">Poli Umum</p>
                                        <div class="d-flex align-items-center">
                                            <i class="fas fa-clock text-primary me-2"></i>
                                            <span class="fw-bold">18 Mar 2024 - 10:00 WIB</span>
                                        </div>
                                        <small class="text-muted">Kontrol rutin pasca flu</small>
                                    </div>
                                    <div class="col-2 text-end">
                                        <span class="badge bg-warning">Menunggu</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="card schedule-card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-2">
                                        <div class="doctor-avatar">AW</div>
                                    </div>
                                    <div class="col-8">
                                        <h6 class="mb-1">Dr. Andi Wijaya</h6>
                                        <p class="text-muted mb-1">Poli Umum</p>
                                        <div class="d-flex align-items-center">
                                            <i class="fas fa-clock text-primary me-2"></i>
                                            <span class="fw-bold">22 Mar 2024 - 13:00 WIB</span>
                                        </div>
                                        <small class="text-muted">Pemeriksaan tekanan darah</small>
                                    </div>
                                    <div class="col-2 text-end">
                                        <span class="badge bg-warning">Menunggu</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Jadwal Bulan Ini -->
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <i class="fas fa-calendar me-2"></i>Riwayat Kunjungan Poli Umum
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Tanggal</th>
                                        <th>Waktu</th>
                                        <th>Dokter</th>
                                        <th>Keluhan</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>18 Mar 2024</td>
                                        <td>10:00 WIB</td>
                                        <td>Dr. Sari Indah</td>
                                        <td>Kontrol rutin pasca flu</td>
                                        <td><span class="badge bg-warning">Menunggu</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-danger">
                                                <i class="fas fa-times"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>22 Mar 2024</td>
                                        <td>13:00 WIB</td>
                                        <td>Dr. Andi Wijaya</td>
                                        <td>Pemeriksaan tekanan darah</td>
                                        <td><span class="badge bg-warning">Menunggu</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-danger">
                                                <i class="fas fa-times"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>05 Mar 2024</td>
                                        <td>09:00 WIB</td>
                                        <td>Dr. Maya Sari</td>
                                        <td>Konsultasi kesehatan umum</td>
                                        <td><span class="badge bg-success">Selesai</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>28 Feb 2024</td>
                                        <td>11:00 WIB</td>
                                        <td>Dr. Sari Indah</td>
                                        <td>Pemeriksaan rutin tahunan</td>
                                        <td><span class="badge bg-success">Selesai</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>15 Feb 2024</td>
                                        <td>14:00 WIB</td>
                                        <td>Dr. Budi Santoso</td>
                                        <td>Pengobatan flu dan batuk</td>
                                        <td><span class="badge bg-success">Selesai</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Statistik Kunjungan -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <i class="fas fa-chart-bar me-2"></i>Statistik Kunjungan
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <div class="d-flex justify-content-between mb-1">
                                <span>Total Kunjungan</span>
                                <strong>8</strong>
                            </div>
                            <div class="progress" style="height: 8px;">
                                <div class="progress-bar bg-success" style="width: 100%"></div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="d-flex justify-content-between mb-1">
                                <span>Menunggu Konfirmasi</span>
                                <strong>2</strong>
                            </div>
                            <div class="progress" style="height: 8px;">
                                <div class="progress-bar bg-warning" style="width: 25%"></div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="d-flex justify-content-between mb-1">
                                <span>Selesai</span>
                                <strong>6</strong>
                            </div>
                            <div class="progress" style="height: 8px;">
                                <div class="progress-bar bg-info" style="width: 75%"></div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="d-flex justify-content-between mb-1">
                                <span>Dibatalkan</span>
                                <strong>0</strong>
                            </div>
                            <div class="progress" style="height: 8px;">
                                <div class="progress-bar bg-danger" style="width: 0%"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Dokter Poli Umum -->
                <div class="card">
                    <div class="card-header">
                        <i class="fas fa-user-md me-2"></i>Dokter Poli Umum
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <div class="doctor-avatar me-3">SI</div>
                            <div>
                                <h6 class="mb-0">Dr. Sari Indah</h6>
                                <small class="text-muted">Spesialis Penyakit Dalam</small>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <div class="doctor-avatar me-3">AW</div>
                            <div>
                                <h6 class="mb-0">Dr. Andi Wijaya</h6>
                                <small class="text-muted">Dokter Umum</small>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <div class="doctor-avatar me-3">MS</div>
                            <div>
                                <h6 class="mb-0">Dr. Maya Sari</h6>
                                <small class="text-muted">Dokter Keluarga</small>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="doctor-avatar me-3">BS</div>
                            <div>
                                <h6 class="mb-0">Dr. Budi Santoso</h6>
                                <small class="text-muted">Dokter Umum</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Buat Janji Baru -->
    <div class="modal fade" id="buatJanjiModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Buat Janji Baru - Poli Umum</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="appointmentForm">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Pilih Dokter</label>
                                <select class="form-select" required>
                                    <option value="">Pilih Dokter</option>
                                    <option value="sari">Dr. Sari Indah</option>
                                    <option value="andi">Dr. Andi Wijaya</option>
                                    <option value="maya">Dr. Maya Sari</option>
                                    <option value="budi">Dr. Budi Santoso</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Pilih Tanggal</label>
                                <input type="date" class="form-control" min="<?= date('Y-m-d') ?>" required>
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">Pilih Waktu</label>
                            <div class="row">
                                <div class="col-4 mb-2">
                                    <div class="time-slot">08:00</div>
                                </div>
                                <div class="col-4 mb-2">
                                    <div class="time-slot">09:00</div>
                                </div>
                                <div class="col-4 mb-2">
                                    <div class="time-slot">10:00</div>
                                </div>
                                <div class="col-4 mb-2">
                                    <div class="time-slot">11:00</div>
                                </div>
                                <div class="col-4 mb-2">
                                    <div class="time-slot">13:00</div>
                                </div>
                                <div class="col-4 mb-2">
                                    <div class="time-slot">14:00</div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">Keluhan</label>
                            <textarea class="form-control" rows="3" placeholder="Jelaskan keluhan atau alasan kunjungan" required></textarea>
                        </div>
                        
                        <div class="alert alert-info">
                            <small>
                                <i class="fas fa-info-circle me-2"></i>
                                <strong>Poli Umum</strong> - Melayani konsultasi kesehatan umum, pemeriksaan rutin, dan pengobatan penyakit ringan.
                            </small>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary">Buat Janji</button>
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

        // Time slot selection
        document.querySelectorAll('.time-slot').forEach(slot => {
            slot.addEventListener('click', function() {
                if (!this.classList.contains('disabled')) {
                    document.querySelectorAll('.time-slot').forEach(s => s.classList.remove('selected'));
                    this.classList.add('selected');
                }
            });
        });

        // Set minimum date to today
        const dateInput = document.querySelector('input[type="date"]');
        if (dateInput) {
            const today = new Date();
            const tomorrow = new Date(today);
            tomorrow.setDate(today.getDate() + 1);
            dateInput.min = tomorrow.toISOString().split('T')[0];
        }

        // Handle form submission
        document.querySelector('.modal-footer .btn-primary').addEventListener('click', function() {
            const form = document.getElementById('appointmentForm');
            const selectedTime = document.querySelector('.time-slot.selected');
            
            if (!form.checkValidity()) {
                alert('Harap lengkapi semua data yang diperlukan');
                return;
            }
            
            if (!selectedTime) {
                alert('Harap pilih waktu kunjungan');
                return;
            }
            
            alert('Janji berhasil dibuat! Menunggu konfirmasi dari puskesmas.');
            const modal = bootstrap.Modal.getInstance(document.getElementById('buatJanjiModal'));
            modal.hide();
        });
    </script>
</body>
</html>