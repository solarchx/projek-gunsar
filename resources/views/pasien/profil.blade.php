<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Pasien - Dashboard</title>
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
        
        .profile-avatar {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-dark) 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 2.5rem;
            font-weight: bold;
            margin: 0 auto 1.5rem;
        }
        
        .form-label {
            color: #555;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }
        
        .form-control {
            border-radius: 8px;
            padding: 0.75rem 1rem;
            border: 1px solid #ddd;
        }
        
        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.2rem rgba(63, 187, 192, 0.25);
        }
        
        .form-control:read-only {
            background-color: #f8f9fa;
            border-color: #e9ecef;
        }
        
        .btn-primary {
            background-color: var(--primary-color);
            border: none;
            padding: 0.75rem 2rem;
            font-weight: 600;
        }
        
        .btn-primary:hover {
            background-color: var(--primary-dark);
        }
        
        .btn-outline-primary {
            color: var(--primary-color);
            border-color: var(--primary-color);
            padding: 0.75rem 2rem;
            font-weight: 600;
        }
        
        .btn-outline-primary:hover {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }
        
        .info-item {
            padding: 1rem 0;
            border-bottom: 1px solid #eee;
        }
        
        .info-item:last-child {
            border-bottom: none;
        }
        
        .info-label {
            color: #666;
            font-weight: 500;
            margin-bottom: 0.25rem;
        }
        
        .info-value {
            color: #333;
            font-weight: 600;
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
                <h2 class="mb-1">Profil Saya</h2>
                <p class="text-muted mb-0">Kelola informasi profil Anda</p>
            </div>
            <div class="d-flex align-items-center gap-3">
                <span class="text-muted">Terakhir update: 15 Mar 2024</span>
            </div>
        </div>
        
        <div class="row">
            <!-- Informasi Profil -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <div class="profile-avatar">
                            AB
                        </div>
                        <h4>Ahmad Budiman</h4>
                        <p class="text-muted">Pasien</p>
                        <div class="d-grid gap-2">
                            <button class="btn btn-outline-primary">
                                <i class="fas fa-camera me-2"></i>Ubah Foto
                            </button>
                            <button class="btn btn-outline-primary">
                                <i class="fas fa-key me-2"></i>Ubah Password
                            </button>
                        </div>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-header">
                        <i class="fas fa-info-circle me-2"></i>Status Akun
                    </div>
                    <div class="card-body">
                        <div class="info-item">
                            <div class="info-label">Status</div>
                            <div class="info-value"><span class="badge bg-success">Aktif</span></div>
                        </div>
                        <div class="info-item">
                            <div class="info-label">Terdaftar Sejak</div>
                            <div class="info-value">15 Januari 2023</div>
                        </div>
                        <div class="info-item">
                            <div class="info-label">Total Kunjungan</div>
                            <div class="info-value">8 Kali</div>
                        </div>
                        <div class="info-item">
                            <div class="info-label">Kunjungan Terakhir</div>
                            <div class="info-value">15 Maret 2024</div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Form Edit Profil -->
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <span><i class="fas fa-edit me-2"></i>Data Pribadi</span>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="editMode">
                            <label class="form-check-label" for="editMode">Mode Edit</label>
                        </div>
                    </div>
                    <div class="card-body">
                        <form id="profileForm">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="nama" class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="nama" value="Ahmad Budiman" readonly>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="nik" class="form-label">NIK</label>
                                    <input type="text" class="form-control" id="nik" value="3273011509950001" readonly>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                    <input type="date" class="form-control" id="tanggal_lahir" value="1995-09-15" readonly>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                    <select class="form-select" id="jenis_kelamin" disabled>
                                        <option value="L" selected>Laki-laki</option>
                                        <option value="P">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat Lengkap</label>
                                <textarea class="form-control" id="alamat" rows="3" readonly>Jl. Merdeka No. 123, RT 01/RW 05, Kelurahan Sukajadi, Kecamatan Sumur Bandung, Kota Bandung</textarea>
                            </div>
                            
                            <div class="d-flex justify-content-between mt-4">
                                <button type="button" class="btn btn-outline-primary" id="cancelBtn" style="display: none;">
                                    <i class="fas fa-times me-2"></i>Batal
                                </button>
                                <button type="submit" class="btn btn-primary" id="saveBtn" style="display: none;">
                                    <i class="fas fa-save me-2"></i>Simpan Perubahan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Toggle edit mode
        const editMode = document.getElementById('editMode');
        const formInputs = document.querySelectorAll('#profileForm input, #profileForm select, #profileForm textarea');
        const cancelBtn = document.getElementById('cancelBtn');
        const saveBtn = document.getElementById('saveBtn');
        
        editMode.addEventListener('change', function() {
            const isEdit = this.checked;
            
            formInputs.forEach(input => {
                if (input.type !== 'checkbox') {
                    input.readonly = !isEdit;
                    input.disabled = !isEdit;
                }
            });
            
            cancelBtn.style.display = isEdit ? 'block' : 'none';
            saveBtn.style.display = isEdit ? 'block' : 'none';
        });
        
        // Cancel edit
        cancelBtn.addEventListener('click', function() {
            editMode.checked = false;
            formInputs.forEach(input => {
                if (input.type !== 'checkbox') {
                    input.readonly = true;
                    input.disabled = true;
                }
            });
            cancelBtn.style.display = 'none';
            saveBtn.style.display = 'none';
        });
        
        // Form submission
        document.getElementById('profileForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Simpan perubahan (dalam aplikasi nyata, kirim ke server)
            alert('Profil berhasil diperbarui!');
            editMode.checked = false;
            cancelBtn.style.display = 'none';
            saveBtn.style.display = 'none';
            
            formInputs.forEach(input => {
                if (input.type !== 'checkbox') {
                    input.readonly = true;
                    input.disabled = true;
                }
            });
        });
        
        // Active menu handler
        document.querySelectorAll('.sidebar-menu a').forEach(link => {
            link.addEventListener('click', function() {
                document.querySelectorAll('.sidebar-menu a').forEach(a => a.classList.remove('active'));
                this.classList.add('active');
            });
        });
    </script>
</body>
</html>