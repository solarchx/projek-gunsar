<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Obat - Pukesmas Gunung Sari</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #1abc9c;
            --primary-dark: #16a085;
            --secondary: #2fe5c6;
            --accent: #0ff5d4;
            --light: #f8f9fa;
            --dark: #343a40;
            --success: #28a745;
            --warning: #ffc107;
            --danger: #dc3545;
        }
        
        body {
            background-color: #f5f7fa;
            font-family: 'Poppins', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #333;
        }
        
        .navbar {
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.15);
        }
        
        .main-content {
            background-color: white;
            border-radius: 12px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            padding: 25px;
            margin-top: 25px;
        }
        
        .btn-primary {
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            border: none;
            border-radius: 8px;
            padding: 10px 20px;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover {
            background: linear-gradient(135deg, var(--primary-dark), var(--primary));
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
        }
        
        .page-title {
            color: var(--primary-dark);
            font-weight: 700;
            padding-bottom: 10px;
            border-bottom: 2px solid var(--secondary);
            margin-bottom: 25px;
        }
        
        .header-info {
            background: linear-gradient(to right, #e0f7fa, #e8f8f5);
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 25px;
            border-left: 5px solid var(--primary);
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
        }
        
        .footer {
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            color: white;
            padding: 20px 0;
            margin-top: 40px;
            border-radius: 10px;
            box-shadow: 0 -3px 15px rgba(0, 0, 0, 0.08);
        }
        
        .form-label {
            font-weight: 500;
            color: #555;
        }
        
        .form-control, .form-select {
            border-radius: 8px;
            padding: 10px 15px;
            border: 1px solid #ddd;
            transition: all 0.3s;
        }
        
        .form-control:focus, .form-select:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 0.25rem rgba(26, 188, 156, 0.25);
        }
        
        .section-header {
            color: var(--primary-dark);
            font-weight: 600;
            margin: 20px 0 15px 0;
            padding-bottom: 8px;
            border-bottom: 2px solid var(--secondary);
        }
        
        .input-group-text {
            background-color: #f8f9fa;
            border: 1px solid #ddd;
            border-radius: 8px 0 0 8px;
        }
        
        .text-danger {
            font-size: 0.875rem;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="{{ route('obat.index') }}">
                <i class="fas fa-clinic-medical me-2 fs-3"></i>
                <span class="fw-bold">Pukesmas Gunung Sari</span>
            </a>
            <div class="navbar-nav ms-auto">
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                        <i class="fas fa-user-circle me-2 fs-5"></i> 
                        <span>Admin</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end shadow">
                        <li><a class="dropdown-item" href="#"><i class="fas fa-user me-2"></i>Profil</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fas fa-cog me-2"></i>Pengaturan</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt me-2"></i>Keluar</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <!-- Toast Notification -->
        @if(session('success'))
        <div class="toast-container position-fixed top-0 end-0 p-3">
            <div class="toast align-items-center text-white bg-success border-0 show" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="d-flex">
                    <div class="toast-body">
                        {{ session('success') }}
                    </div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
            </div>
        </div>
        @endif
        
        <!-- Header Info -->
        <div class="header-info">
            <h5 class="mb-1"><i class="fas fa-map-marker-alt me-2"></i>Pukesmas Gunung Sari</h5>
            <p class="mb-0">Jl. Tentara Pelajar No. 75, Pekiringan, Kec. Kesambi, Kota Cirebon, Jawa Barat 45131</p>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <h4 class="page-title mb-4">
                <i class="fas fa-edit me-2"></i>Edit Data Obat
            </h4>
            
            <form action="{{ route('obat.update', $obat->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="nama_obat" class="form-label">Nama Obat</label>
                        <input type="text" class="form-control" id="nama_obat" name="nama_obat" value="{{ old('nama_obat', $obat->nama_obat) }}" required>
                        @error('nama_obat')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="kategori" class="form-label">Kategori</label>
                        <select class="form-select" id="kategori" name="kategori" required>
                            <option value="" disabled>Pilih Kategori</option>
                            <option value="Analgesik" {{ old('kategori', $obat->kategori) == 'Analgesik' ? 'selected' : '' }}>Analgesik</option>
                            <option value="Antibiotik" {{ old('kategori', $obat->kategori) == 'Antibiotik' ? 'selected' : '' }}>Antibiotik</option>
                            <option value="Vitamin" {{ old('kategori', $obat->kategori) == 'Vitamin' ? 'selected' : '' }}>Vitamin</option>
                            <option value="Antidiabetes" {{ old('kategori', $obat->kategori) == 'Antidiabetes' ? 'selected' : '' }}>Antidiabetes</option>
                            <option value="Antihistamin" {{ old('kategori', $obat->kategori) == 'Antihistamin' ? 'selected' : '' }}>Antihistamin</option>
                            <option value="Antasida" {{ old('kategori', $obat->kategori) == 'Antasida' ? 'selected' : '' }}>Antasida</option>
                            <option value="Antikolesterol" {{ old('kategori', $obat->kategori) == 'Antikolesterol' ? 'selected' : '' }}>Antikolesterol</option>
                            <option value="Lainnya" {{ old('kategori', $obat->kategori) == 'Lainnya' ? 'selected' : '' }}>Lainnya</option>
                        </select>
                        @error('kategori')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="stok" class="form-label">Jumlah Stok</label>
                        <input type="number" class="form-control" id="stok" name="stok" value="{{ old('stok', $obat->stok) }}" min="0" required>
                        @error('stok')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="tanggal_kadaluarsa" class="form-label">Tanggal Kedaluwarsa</label>
                        <input type="date" class="form-control" id="tanggal_kadaluarsa" name="tanggal_kadaluarsa" value="{{ old('tanggal_kadaluarsa', $obat->tanggal_kadaluarsa) }}" required>
                        @error('tanggal_kadaluarsa')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="harga_beli" class="form-label">Harga Beli</label>
                        <div class="input-group">
                            <span class="input-group-text">Rp</span>
                            <input type="number" class="form-control" id="harga_beli" name="harga_beli" value="{{ old('harga_beli', $obat->harga_beli) }}" min="0" required>
                        </div>
                        @error('harga_beli')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="harga_jual" class="form-label">Harga Jual</label>
                        <div class="input-group">
                            <span class="input-group-text">Rp</span>
                            <input type="number" class="form-control" id="harga_jual" name="harga_jual" value="{{ old('harga_jual', $obat->harga_jual) }}" min="0" required>
                        </div>
                        @error('harga_jual')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi Obat</label>
                    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" placeholder="Masukkan deskripsi obat...">{{ old('deskripsi', $obat->deskripsi) }}</textarea>
                    @error('deskripsi')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                
                <!-- Petunjuk Penggunaan -->
                <h6 class="section-header"><i class="fas fa-info-circle me-2"></i>Petunjuk Penggunaan</h6>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="waktu_minum" class="form-label">Waktu Minum</label>
                        <select class="form-select" id="waktu_minum" name="waktu_minum" required>
                            <option value="" disabled>Pilih Waktu Minum</option>
                            <option value="Sebelum makan" {{ old('waktu_minum', $obat->waktu_minum) == 'Sebelum makan' ? 'selected' : '' }}>Sebelum makan</option>
                            <option value="Setelah makan" {{ old('waktu_minum', $obat->waktu_minum) == 'Setelah makan' ? 'selected' : '' }}>Setelah makan</option>
                            <option value="Saat makan" {{ old('waktu_minum', $obat->waktu_minum) == 'Saat makan' ? 'selected' : '' }}>Saat makan</option>
                            <option value="Sesuai kebutuhan" {{ old('waktu_minum', $obat->waktu_minum) == 'Sesuai kebutuhan' ? 'selected' : '' }}>Sesuai kebutuhan</option>
                            <option value="Pagi hari" {{ old('waktu_minum', $obat->waktu_minum) == 'Pagi hari' ? 'selected' : '' }}>Pagi hari</option>
                            <option value="Malam hari" {{ old('waktu_minum', $obat->waktu_minum) == 'Malam hari' ? 'selected' : '' }}>Malam hari</option>
                        </select>
                        @error('waktu_minum')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="frekuensi" class="form-label">Frekuensi</label>
                        <select class="form-select" id="frekuensi" name="frekuensi" required>
                            <option value="" disabled>Pilih Frekuensi</option>
                            <option value="1 kali sehari" {{ old('frekuensi', $obat->frekuensi) == '1 kali sehari' ? 'selected' : '' }}>1 kali sehari</option>
                            <option value="2 kali sehari" {{ old('frekuensi', $obat->frekuensi) == '2 kali sehari' ? 'selected' : '' }}>2 kali sehari</option>
                            <option value="3 kali sehari" {{ old('frekuensi', $obat->frekuensi) == '3 kali sehari' ? 'selected' : '' }}>3 kali sehari</option>
                            <option value="4 kali sehari" {{ old('frekuensi', $obat->frekuensi) == '4 kali sehari' ? 'selected' : '' }}>4 kali sehari</option>
                            <option value="Sesuai kebutuhan" {{ old('frekuensi', $obat->frekuensi) == 'Sesuai kebutuhan' ? 'selected' : '' }}>Sesuai kebutuhan</option>
                            <option value="Setiap 4-6 jam" {{ old('frekuensi', $obat->frekuensi) == 'Setiap 4-6 jam' ? 'selected' : '' }}>Setiap 4-6 jam</option>
                            <option value="Setiap 6-8 jam" {{ old('frekuensi', $obat->frekuensi) == 'Setiap 6-8 jam' ? 'selected' : '' }}>Setiap 6-8 jam</option>
                            <option value="Setiap 8-12 jam" {{ old('frekuensi', $obat->frekuensi) == 'Setiap 8-12 jam' ? 'selected' : '' }}>Setiap 8-12 jam</option>
                        </select>
                        @error('frekuensi')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="dosis" class="form-label">Dosis</label>
                        <input type="text" class="form-control" id="dosis" name="dosis" value="{{ old('dosis', $obat->dosis) }}" placeholder="Contoh: 1 tablet" required>
                        @error('dosis')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="catatan_penting" class="form-label">Catatan Penting</label>
                        <input type="text" class="form-control" id="catatan_penting" name="catatan_penting" value="{{ old('catatan_penting', $obat->catatan_penting) }}" placeholder="Contoh: Minum dengan air yang cukup">
                        @error('catatan_penting')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                
                <div class="d-flex justify-content-end mt-4">
                    <a href="{{ route('obat.index') }}" class="btn btn-secondary me-2">
                        <i class="fas fa-times me-2"></i>Batal
                    </a>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save me-2"></i>Perbarui Data
                    </button>
                </div>
            </form>
        </div>
        
        <!-- Footer -->
        <div class="footer text-center">
            <p class="mb-0">&copy; 2025 Pukesmas Gunung Sari - Sistem Manajemen Obat</p>
            <p class="mb-0">Jl. Tentara Pelajar No. 75, Pekiringan, Kec. Kesambi, Kota Cirebon, Jawa Barat 45131</p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Auto-hide toast after 3 seconds
        document.addEventListener('DOMContentLoaded', function() {
            const toastEl = document.querySelector('.toast');
            if (toastEl) {
                setTimeout(() => {
                    const toast = bootstrap.Toast.getInstance(toastEl);
                    if (toast) toast.hide();
                }, 3000);
            }
        });
    </script>
</body>
</html>