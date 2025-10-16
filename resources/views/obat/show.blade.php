<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Obat - Pukesmas Gunung Sari</title>
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
        
        .btn-warning {
            background: linear-gradient(135deg, #ffc107, #e0a800);
            border: none;
            border-radius: 8px;
            padding: 10px 20px;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        
        .btn-warning:hover {
            background: linear-gradient(135deg, #e0a800, #d39e00);
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
        }
        
        .btn-danger {
            background: linear-gradient(135deg, #dc3545, #c82333);
            border: none;
            border-radius: 8px;
            padding: 10px 20px;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        
        .btn-danger:hover {
            background: linear-gradient(135deg, #c82333, #bd2130);
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
        
        .badge-category {
            background: linear-gradient(135deg, var(--secondary), var(--primary));
            color: white;
            padding: 5px 12px;
            border-radius: 15px;
            font-size: 0.85rem;
            font-weight: 500;
        }
        
        .badge-stok {
            padding: 5px 10px;
            border-radius: 15px;
            font-size: 0.85rem;
            font-weight: 500;
        }
        
        .stok-rendah {
            background-color: #ffcccc;
            color: #dc3545;
        }
        
        .stok-sedang {
            background-color: #fff3cd;
            color: #856404;
        }
        
        .stok-tinggi {
            background-color: #d4edda;
            color: #155724;
        }
        
        .card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 3px 15px rgba(0, 0, 0, 0.08);
            margin-bottom: 20px;
        }
        
        .card-header {
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            color: white;
            border-top-left-radius: 12px !important;
            border-top-right-radius: 12px !important;
            border: none;
            font-weight: 600;
        }
        
        .usage-info {
            background-color: #f8f9fa;
            border-radius: 8px;
            padding: 20px;
            margin-top: 20px;
            border-left: 4px solid var(--primary);
        }
        
        .usage-info h6 {
            color: var(--primary-dark);
            margin-bottom: 15px;
            font-weight: 600;
        }
        
        .usage-item {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
            padding: 8px 0;
        }
        
        .usage-item i {
            color: var(--primary);
            margin-right: 15px;
            font-size: 16px;
            width: 20px;
            text-align: center;
        }
        
        .usage-item span {
            font-size: 0.95rem;
        }
        
        .table-borderless th {
            font-weight: 600;
            color: #555;
            width: 40%;
        }
        
        .table-borderless td {
            color: #333;
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
                <i class="fas fa-info-circle me-2"></i>Detail Obat
            </h4>
            
            <div class="row">
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h5 class="mb-0"><i class="fas fa-pills me-2"></i>Informasi Obat</h5>
                        </div>
                        <div class="card-body">
                            <table class="table table-borderless">
                                <tr>
                                    <th>Nama Obat</th>
                                    <td>{{ $obat->nama_obat }}</td>
                                </tr>
                                <tr>
                                    <th>Kategori</th>
                                    <td><span class="badge-category">{{ $obat->kategori }}</span></td>
                                </tr>
                                <tr>
                                    <th>Stok</th>
                                    <td>
                                        @php
                                            $stockClass = $obat->stok == 0 ? 'stok-rendah' : ($obat->stok < 5 ? 'stok-sedang' : 'stok-tinggi');
                                        @endphp
                                        <span class="badge-stok {{ $stockClass }}">{{ $obat->stok }}</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Tanggal Kedaluwarsa</th>
                                    <td>{{ \Carbon\Carbon::parse($obat->tanggal_kadaluarsa)->format('d F Y') }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h5 class="mb-0"><i class="fas fa-money-bill-wave me-2"></i>Informasi Harga</h5>
                        </div>
                        <div class="card-body">
                            <table class="table table-borderless">
                                <tr>
                                    <th>Harga Beli</th>
                                    <td>Rp {{ number_format($obat->harga_beli, 0, ',', '.') }}</td>
                                </tr>
                                <tr>
                                    <th>Harga Jual</th>
                                    <td>Rp {{ number_format($obat->harga_jual, 0, ',', '.') }}</td>
                                </tr>
                                <tr>
                                    <th>Keuntungan</th>
                                    <td class="fw-bold text-success">
                                        Rp {{ number_format($obat->harga_jual - $obat->harga_beli, 0, ',', '.') }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>Margin</th>
                                    <td class="fw-bold text-primary">
                                        {{ number_format((($obat->harga_jual - $obat->harga_beli) / $obat->harga_beli) * 100, 2) }}%
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h5 class="mb-0"><i class="fas fa-file-alt me-2"></i>Deskripsi Obat</h5>
                        </div>
                        <div class="card-body">
                            <p class="mb-0">{{ $obat->deskripsi ?: 'Tidak ada deskripsi yang tersedia.' }}</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="usage-info">
                <h6><i class="fas fa-info-circle me-2"></i>Petunjuk Penggunaan</h6>
                <div class="usage-item">
                    <i class="fas fa-clock"></i>
                    <span><strong>Waktu Minum:</strong> {{ $obat->waktu_minum }}</span>
                </div>
                <div class="usage-item">
                    <i class="fas fa-redo"></i>
                    <span><strong>Frekuensi:</strong> {{ $obat->frekuensi }}</span>
                </div>
                <div class="usage-item">
                    <i class="fas fa-pills"></i>
                    <span><strong>Dosis:</strong> {{ $obat->dosis }}</span>
                </div>
                <div class="usage-item">
                    <i class="fas fa-exclamation-triangle"></i>
                    <span><strong>Catatan Penting:</strong> {{ $obat->catatan_penting ?: 'Tidak ada catatan khusus' }}</span>
                </div>
            </div>
            
            <div class="d-flex justify-content-end mt-4">
                <a href="{{ route('obat.index') }}" class="btn btn-secondary me-2">
                    <i class="fas fa-arrow-left me-2"></i>Kembali ke Daftar
                </a>
                <a href="{{ route('obat.edit', $obat->id) }}" class="btn btn-warning me-2">
                    <i class="fas fa-edit me-2"></i>Edit Data
                </a>
                <form action="{{ route('obat.destroy', $obat->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus obat {{ $obat->nama_obat }}?')">
                        <i class="fas fa-trash me-2"></i>Hapus Obat
                    </button>
                </form>
            </div>
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