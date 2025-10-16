<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Manajemen Obat - Pukesmas Gunung Sari</title>
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
        
        .table-container {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 3px 15px rgba(0, 0, 0, 0.05);
        }
        
        .table th {
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            color: white;
            border: none;
            font-weight: 600;
            padding: 15px;
        }
        
        .table td {
            padding: 12px 15px;
            vertical-align: middle;
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
        
        .btn-outline-secondary {
            border-radius: 8px;
            padding: 10px 20px;
            font-weight: 500;
        }
        
        .search-box {
            position: relative;
        }
        
        .search-box input {
            padding-left: 45px;
            border-radius: 25px;
            border: 1px solid #e0e0e0;
            height: 45px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
        }
        
        .search-box i {
            position: absolute;
            left: 18px;
            top: 13px;
            color: #9e9e9e;
            z-index: 10;
        }
        
        .action-buttons .btn {
            padding: 0.4rem 0.6rem;
            font-size: 0.875rem;
            border-radius: 6px;
            transition: all 0.2s ease;
        }
        
        .action-buttons .btn:hover {
            transform: scale(1.1);
        }
        
        .page-title {
            color: var(--primary-dark);
            font-weight: 700;
            padding-bottom: 10px;
            border-bottom: 2px solid var(--secondary);
            margin-bottom: 25px;
        }
        
        .card-info {
            border-left: 4px solid var(--primary);
            border-radius: 8px;
            background: linear-gradient(to right, #e8f8f5, #ffffff);
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
        
        .pagination .page-link {
            color: var(--primary-dark);
            border-radius: 6px;
            margin: 0 3px;
            border: 1px solid #e0e0e0;
        }
        
        .pagination .page-item.active .page-link {
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            border-color: var(--primary);
        }
        
        .table-hover tbody tr {
            transition: all 0.2s ease;
        }
        
        .table-hover tbody tr:hover {
            background-color: #e8f8f5;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .main-content {
            animation: fadeIn 0.5s ease;
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
        
        .info-panel {
            background: linear-gradient(135deg, #e0f7fa, #e8f8f5);
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 25px;
            border-left: 5px solid var(--primary);
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
            display: flex;
            align-items: center;
        }
        
        .info-panel i {
            font-size: 24px;
            color: var(--primary);
            margin-right: 15px;
        }
        
        .info-panel p {
            margin: 0;
            font-size: 1rem;
            color: #2c6bac;
        }
        
        .modal-content {
            border-radius: 12px;
            border: none;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.15);
        }
        
        .modal-header {
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            color: white;
            border-top-left-radius: 12px;
            border-top-right-radius: 12px;
            border-bottom: none;
        }
        
        .modal-footer {
            border-top: 1px solid #eaeaea;
            padding: 15px 20px;
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
        
        .filter-dropdown {
            position: absolute;
            right: 0;
            top: 100%;
            margin-top: 5px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            padding: 15px;
            width: 200px;
            z-index: 1000;
            display: none;
        }
        
        .filter-dropdown.show {
            display: block;
        }
        
        .filter-option {
            padding: 8px 10px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.2s;
        }
        
        .filter-option:hover {
            background-color: #f0f0f0;
        }
        
        .filter-option.active {
            background-color: #e8f8f5;
            color: var(--primary-dark);
            font-weight: 500;
        }
        
        .filter-container {
            position: relative;
            display: inline-block;
        }

        .toast-container {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 9999;
        }
        
        .usage-info {
            background-color: #f8f9fa;
            border-radius: 8px;
            padding: 15px;
            margin-top: 15px;
            border-left: 4px solid var(--primary);
        }
        
        .usage-info h6 {
            color: var(--primary-dark);
            margin-bottom: 10px;
            font-weight: 600;
        }
        
        .usage-item {
            display: flex;
            align-items: center;
            margin-bottom: 8px;
        }
        
        .usage-item i {
            color: var(--primary);
            margin-right: 10px;
            font-size: 14px;
        }
        
        .usage-item span {
            font-size: 0.9rem;
        }
        
        .section-header {
            color: var(--primary-dark);
            font-weight: 600;
            margin: 20px 0 15px 0;
            padding-bottom: 8px;
            border-bottom: 2px solid var(--secondary);
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
        <div class="toast-container">
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
                <i class="fas fa-pills me-2"></i>Manajemen Data Obat
            </h4>
            
            <!-- Info Panel Baru -->
            <div class="info-panel">
                <i class="fas fa-info-circle"></i>
                <p>Fitur ini memudahkan Anda mengelola data obat dengan tampilan yang lebih sederhana dan fokus pada informasi penting.</p>
            </div>
            
            <!-- Action Bar -->
            <div class="row mb-4">
                <div class="col-md-6">
                    <div class="search-box">
                        <i class="fas fa-search"></i>
                        <input type="text" class="form-control" id="searchInput" placeholder="Cari obat...">
                    </div>
                </div>
                <div class="col-md-6 text-end">
                    <a href="{{ route('obat.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus me-2"></i>Tambah Obat
                    </a>
                    <div class="filter-container d-inline-block">
                        <button class="btn btn-outline-secondary" id="filterButton">
                            <i class="fas fa-filter me-2"></i>Filter
                        </button>
                        <div class="filter-dropdown" id="filterDropdown">
                            <div class="filter-option active" data-filter="all">Semua Kategori</div>
                            <div class="filter-option" data-filter="Analgesik">Analgesik</div>
                            <div class="filter-option" data-filter="Antibiotik">Antibiotik</div>
                            <div class="filter-option" data-filter="Vitamin">Vitamin</div>
                            <div class="filter-option" data-filter="Antidiabetes">Antidiabetes</div>
                            <div class="filter-option" data-filter="Antihistamin">Antihistamin</div>
                            <div class="filter-option" data-filter="Antasida">Antasida</div>
                            <div class="filter-option" data-filter="Antikolesterol">Antikolesterol</div>
                            <div class="filter-option" data-filter="Lainnya">Lainnya</div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Data Table -->
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Obat</th>
                            <th>Kategori</th>
                            <th>Stok</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="medicineTableBody">
                        @foreach($obat as $item)
                        <tr>
                            <td>{{ ($obat->currentPage() - 1) * $obat->perPage() + $loop->iteration }}</td>
                            <td>{{ $item->nama_obat }}</td>
                            <td><span class="badge-category">{{ $item->kategori }}</span></td>
                            <td>
                                @php
                                    $stockClass = $item->stok == 0 ? 'stok-rendah' : ($item->stok < 5 ? 'stok-sedang' : 'stok-tinggi');
                                @endphp
                                <span class="badge-stok {{ $stockClass }}">{{ $item->stok }}</span>
                            </td>
                            <td class="action-buttons">
                                <a href="{{ route('obat.show', $item->id) }}" class="btn btn-sm btn-info">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{ route('obat.edit', $item->id) }}" class="btn btn-sm btn-warning">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('obat.destroy', $item->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus obat ini?')">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
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

            // Toggle dropdown filter
            const filterButton = document.getElementById('filterButton');
            const filterDropdown = document.getElementById('filterDropdown');
            
            if (filterButton && filterDropdown) {
                filterButton.addEventListener('click', function(e) {
                    e.stopPropagation();
                    filterDropdown.classList.toggle('show');
                });
                
                // Tutup dropdown saat klik di luar
                document.addEventListener('click', function(e) {
                    if (!filterButton.contains(e.target) && !filterDropdown.contains(e.target)) {
                        filterDropdown.classList.remove('show');
                    }
                });
            }
        });
    </script>
</body>
</html>