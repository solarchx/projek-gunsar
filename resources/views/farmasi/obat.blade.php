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
        
        /* Efek Hover pada Tabel */
        .table-hover tbody tr {
            transition: all 0.2s ease;
        }
        
        .table-hover tbody tr:hover {
            background-color: #e8f8f5;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
        }
        
        /* Animasi untuk elemen */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .main-content {
            animation: fadeIn 0.5s ease;
        }
        
        /* Custom Badge untuk Kategori */
        .badge-category {
            background: linear-gradient(135deg, var(--secondary), var(--primary));
            color: white;
            padding: 5px 12px;
            border-radius: 15px;
            font-size: 0.85rem;
            font-weight: 500;
        }
        
        /* Badge untuk Stok */
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
        
        /* Info panel baru */
        .info-panel {
            background: linear-gradient(135deg, #e0f7fa, #e8f8f5);
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 25px;
            border-left: 5px solid var(--primary);
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
            display: flex;
            align-items: 20px;
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
        
        /* Modal styles */
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
        
        /* Filter Dropdown */
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
        
        .filter-option active {
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
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
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
        <div class="toast-container" id="toastContainer"></div>
        
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
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahObatModal">
                        <i class="fas fa-plus me-2"></i>Tambah Obat
                    </button>
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
                        <!-- Data akan diisi oleh JavaScript -->
                    </tbody>
                </table>
            </div>
            
            <!-- Pagination -->
            <nav class="mt-4">
                <ul class="pagination justify-content-center">
                    <li class="page-item" id="prevPage">
                        <a class="page-link" href="#"><i class="fas fa-chevron-left me-1"></i>Sebelumnya</a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item" id="nextPage">
                        <a class="page-link" href="#">Selanjutnya<i class="fas fa-chevron-right ms-1"></i></a>
                    </li>
                </ul>
            </nav>
        </div>
        
        <!-- Footer -->
        <div class="footer text-center">
            <p class="mb-0">&copy; 2025 Pukesmas Gunung Sari - Sistem Manajemen Obat</p>
            <p class="mb-0">Jl. Tentara Pelajar No. 75, Pekiringan, Kec. Kesambi, Kota Cirebon, Jawa Barat 45131</p>
        </div>
    </div>

    <!-- Modal Tambah Obat -->
    <div class="modal fade" id="tambahObatModal" tabindex="-1" aria-labelledby="tambahObatModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tambahObatModalLabel"><i class="fas fa-plus-circle me-2"></i>Tambah Obat Baru</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="formTambahObat">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="namaObat" class="form-label">Nama Obat</label>
                                <input type="text" class="form-control" id="namaObat" required>
                            </div>
                            <div class="col-md-6">
                                <label for="kategori" class="form-label">Kategori</label>
                                <select class="form-select" id="kategori" required>
                                    <option value="" selected disabled>Pilih Kategori</option>
                                    <option value="Analgesik">Analgesik</option>
                                    <option value="Antibiotik">Antibiotik</option>
                                    <option value="Vitamin">Vitamin</option>
                                    <option value="Antidiabetes">Antidiabetes</option>
                                    <option value="Antihistamin">Antihistamin</option>
                                    <option value="Antasida">Antasida</option>
                                    <option value="Antikolesterol">Antikolesterol</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="stok" class="form-label">Jumlah Stok</label>
                                <input type="number" class="form-control" id="stok" min="0" required>
                            </div>
                            <div class="col-md-6">
                                <label for="expiredDate" class="form-label">Tanggal Kedaluwarsa</label>
                                <input type="date" class="form-control" id="expiredDate" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="hargaBeli" class="form-label">Harga Beli</label>
                                <div class="input-group">
                                    <span class="input-group-text">Rp</span>
                                    <input type="number" class="form-control" id="hargaBeli" min="0" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="hargaJual" class="form-label">Harga Jual</label>
                                <div class="input-group">
                                    <span class="input-group-text">Rp</span>
                                    <input type="number" class="form-control" id="hargaJual" min="0" required>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi Obat</label>
                            <textarea class="form-control" id="deskripsi" rows="3"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary" id="simpanObat">Simpan Obat</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Detail Obat -->
    <div class="modal fade" id="detailObatModal" tabindex="-1" aria-labelledby="detailObatModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="detailObatModalLabel"><i class="fas fa-info-circle me-2"></i>Detail Obat</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="detailObatContent">
                    <!-- Detail obat akan diisi oleh JavaScript -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Edit Obat -->
    <div class="modal fade" id="editObatModal" tabindex="-1" aria-labelledby="editObatModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editObatModalLabel"><i class="fas fa-edit me-2"></i>Edit Data Obat</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="formEditObat">
                        <input type="hidden" id="editId">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="editNamaObat" class="form-label">Nama Obat</label>
                                <input type="text" class="form-control" id="editNamaObat" required>
                            </div>
                            <div class="col-md-6">
                                <label for="editKategori" class="form-label">Kategori</label>
                                <select class="form-select" id="editKategori" required>
                                    <option value="" selected disabled>Pilih Kategori</option>
                                    <option value="Analgesik">Analgesik</option>
                                    <option value="Antibiotik">Antibiotik</option>
                                    <option value="Vitamin">Vitamin</option>
                                    <option value="Antidiabetes">Antidiabetes</option>
                                    <option value="Antihistamin">Antihistamin</option>
                                    <option value="Antasida">Antasida</option>
                                    <option value="Antikolesterol">Antikolesterol</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="editStok" class="form-label">Jumlah Stok</label>
                                <input type="number" class="form-control" id="editStok" min="0" required>
                            </div>
                            <div class="col-md-6">
                                <label for="editExpiredDate" class="form-label">Tanggal Kedaluwarsa</label>
                                <input type="date" class="form-control" id="editExpiredDate" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="editHargaBeli" class="form-label">Harga Beli</label>
                                <div class="input-group">
                                    <span class="input-group-text">Rp</span>
                                    <input type="number" class="form-control" id="editHargaBeli" min="0" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="editHargaJual" class="form-label">Harga Jual</label>
                                <div class="input-group">
                                    <span class="input-group-text">Rp</span>
                                    <input type="number" class="form-control" id="editHargaJual" min="0" required>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="editDeskripsi" class="form-label">Deskripsi Obat</label>
                            <textarea class="form-control" id="editDeskripsi" rows="3"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary" id="updateObat">Perbarui Data</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Data obat dari gambar yang diberikan
    let medicineData = [
        { 
            id: 1, 
            name: "Alopurinol tablet 100 mg", 
            category: "Asam Urat", 
            stock: 5, 
            expired: "2024-08-15",
            buyPrice: 15000,
            sellPrice: 20000,
            description: "Obat untuk mengatasi asam urat tinggi"
        },
        { 
            id: 2, 
            name: "Amoksisilin kaplet 500 mg", 
            category: "Antibiotik", 
            stock: 3, 
            expired: "2024-07-22",
            buyPrice: 25000,
            sellPrice: 35000,
            description: "Antibiotik untuk infeksi bakteri"
        },
        { 
            id: 3, 
            name: "Amoksisilin sirup kering 125 mg/5 ml 60 ml", 
            category: "Antibiotik", 
            stock: 3, 
            expired: "2024-06-10",
            buyPrice: 30000,
            sellPrice: 45000,
            description: "Antibiotik sirup untuk anak"
        },
        { 
            id: 4, 
            name: "Garam Oralit", 
            category: "Elektrolit", 
            stock: 1, 
            expired: "2025-01-30",
            buyPrice: 5000,
            sellPrice: 8000,
            description: "Oralit untuk dehidrasi"
        },
        { 
            id: 5, 
            name: "Ibuprofen tablet 400 mg", 
            category: "Analgesik", 
            stock: 3, 
            expired: "2024-09-15",
            buyPrice: 12000,
            sellPrice: 18000,
            description: "Obat pereda nyeri dan antiradang"
        },
        { 
            id: 6, 
            name: "Kotrimoksazol DOEN I (dewasa)", 
            category: "Antibiotik", 
            stock: 2, 
            expired: "2024-10-20",
            buyPrice: 18000,
            sellPrice: 25000,
            description: "Antibiotik kombinasi"
        },
        { 
            id: 7, 
            name: "Parasetamol sirup 120 mg/5 ml-60 ml", 
            category: "Analgesik", 
            stock: 4, 
            expired: "2024-11-05",
            buyPrice: 15000,
            sellPrice: 22000,
            description: "Pereda demam dan nyeri untuk anak"
        },
        { 
            id: 8, 
            name: "Piridoksin (Vitamin B6) tablet 10 mg (HCl)", 
            category: "Vitamin", 
            stock: 5, 
            expired: "2025-03-15",
            buyPrice: 8000,
            sellPrice: 12000,
            description: "Suplemen vitamin B6"
        },
        { 
            id: 9, 
            name: "Prednison tablet 5 mg", 
            category: "Kortikosteroid", 
            stock: 2, 
            expired: "2024-12-10",
            buyPrice: 10000,
            sellPrice: 15000,
            description: "Obat antiradang steroid"
        },
        { 
            id: 10, 
            name: "Retinol (Vitamin A) 200.000 IU kapsul lunak", 
            category: "Vitamin", 
            stock: 0, 
            expired: "2024-08-25",
            buyPrice: 12000,
            sellPrice: 18000,
            description: "Suplemen vitamin A dosis tinggi"
        },
        { 
            id: 11, 
            name: "Salep 2-4", 
            category: "Topikal", 
            stock: 6, 
            expired: "2025-02-28",
            buyPrice: 15000,
            sellPrice: 22000,
            description: "Salep untuk infeksi kulit"
        },
        { 
            id: 12, 
            name: "Salisil bedak 2% 50 g", 
            category: "Topikal", 
            stock: 7, 
            expired: "2025-01-15",
            buyPrice: 12000,
            sellPrice: 18000,
            description: "Bedak untuk masalah kulit"
        },
        { 
            id: 13, 
            name: "Tiamin (Vitamin B1) tablet 50 mg (HCl/Nitrat)", 
            category: "Vitamin", 
            stock: 3, 
            expired: "2024-10-30",
            buyPrice: 9000,
            sellPrice: 14000,
            description: "Suplemen vitamin B1"
        },
        { 
            id: 14, 
            name: "Ambroxol tablet 30 mg", 
            category: "Ekspektoran", 
            stock: 3, 
            expired: "2024-09-20",
            buyPrice: 13000,
            sellPrice: 19000,
            description: "Obat pengencer dahak"
        },
        { 
            id: 15, 
            name: "Antasida DOEN II suspensi 60 ml", 
            category: "Antasida", 
            stock: 7, 
            expired: "2024-11-15",
            buyPrice: 14000,
            sellPrice: 20000,
            description: "Obat penetral asam lambung"
        },
        { 
            id: 16, 
            name: "Asam Mefenamat tablet salut selaput 500 mg", 
            category: "Analgesik", 
            stock: 1, 
            expired: "2024-08-10",
            buyPrice: 16000,
            sellPrice: 23000,
            description: "Obat pereda nyeri"
        },
        { 
            id: 17, 
            name: "Domperidon tablet 10 mg", 
            category: "Antiemetik", 
            stock: 0, 
            expired: "2024-07-05",
            buyPrice: 11000,
            sellPrice: 17000,
            description: "Obat untuk mual dan muntah"
        },
        { 
            id: 18, 
            name: "Kaptopril tablet 25 mg", 
            category: "Antihipertensi", 
            stock: 0, 
            expired: "2024-09-12",
            buyPrice: 17000,
            sellPrice: 25000,
            description: "Obat untuk tekanan darah tinggi"
        },
        { 
            id: 19, 
            name: "Metformin HCl tablet 500 mg", 
            category: "Antidiabetes", 
            stock: 0, 
            expired: "2024-10-08",
            buyPrice: 14000,
            sellPrice: 21000,
            description: "Obat untuk diabetes tipe 2"
        },
        { 
            id: 20, 
            name: "Natrium Diklofenak tablet 50 mg", 
            category: "Analgesik", 
            stock: 0, 
            expired: "2024-08-20",
            buyPrice: 15000,
            sellPrice: 22000,
            description: "Obat antiradang nonsteroid"
        }
    ];

    // Variabel global
    let currentPage = 1;
    const itemsPerPage = 10;
    let currentFilter = "all";
    let filteredData = [...medicineData];

    // Fungsi untuk menentukan kelas CSS berdasarkan jumlah stok
    function getStockClass(stock) {
        if (stock === 0) {
            return "stok-rendah";
        } else if (stock < 5) {
            return "stok-sedang";
        } else {
            return "stok-tinggi";
        }
    }

    document.addEventListener('DOMContentLoaded', function() {
        // Inisialisasi data
        renderTable();
        setupPagination();
        
        // Fitur pencarian
        const searchInput = document.getElementById('searchInput');
        searchInput.addEventListener('keyup', function() {
            applyFilters();
        });
        
        // Toggle dropdown filter
        const filterButton = document.getElementById('filterButton');
        const filterDropdown = document.getElementById('filterDropdown');
        
        filterButton.addEventListener('click', function(e) {
            e.stopPropagation();
            filterDropdown.classList.toggle('show');
        });
        
        // Pilih opsi filter
        const filterOptions = document.querySelectorAll('.filter-option');
        filterOptions.forEach(option => {
            option.addEventListener('click', function() {
                const filterValue = this.getAttribute('data-filter');
                
                // Hapus kelas active dari semua opsi
                filterOptions.forEach(opt => opt.classList.remove('active'));
                
                // Tambah kelas active ke opsi yang dipilih
                this.classList.add('active');
                
                // Terapkan filter
                currentFilter = filterValue;
                applyFilters();
                
                // Sembunyikan dropdown
                filterDropdown.classList.remove('show');
            });
        });
        
        // Tutup dropdown saat klik di luar
        document.addEventListener('click', function(e) {
            if (!filterButton.contains(e.target) && !filterDropdown.contains(e.target)) {
                filterDropdown.classList.remove('show');
            }
        });
        
        // Navigasi pagination
        document.getElementById('prevPage').addEventListener('click', function() {
            if (currentPage > 1) {
                currentPage--;
                renderTable();
                updatePagination();
            }
        });
        
        document.getElementById('nextPage').addEventListener('click', function() {
            const totalPages = Math.ceil(filteredData.length / itemsPerPage);
            if (currentPage < totalPages) {
                currentPage++;
                renderTable();
                updatePagination();
            }
        });
        
        // Simulasi penyimpanan data obat
        document.getElementById('simpanObat').addEventListener('click', function() {
            const namaObat = document.getElementById('namaObat').value;
            const kategori = document.getElementById('kategori').value;
            const stok = document.getElementById('stok').value;
            const expiredDate = document.getElementById('expiredDate').value;
            const hargaBeli = document.getElementById('hargaBeli').value;
            const hargaJual = document.getElementById('hargaJual').value;
            const deskripsi = document.getElementById('deskripsi').value;
            
            if (!namaObat || !kategori || !stok || !expiredDate || !hargaBeli || !hargaJual) {
                showToast('Harap isi semua field yang wajib diisi!', 'danger');
                return;
            }
            
            // Generate ID baru
            const newId = medicineData.length > 0 ? Math.max(...medicineData.map(item => item.id)) + 1 : 1;
            
            // Tambahkan obat baru ke array
            const newMedicine = {
                id: newId,
                name: namaObat,
                category: kategori,
                stock: parseInt(stok),
                expired: expiredDate,
                buyPrice: parseInt(hargaBeli),
                sellPrice: parseInt(hargaJual),
                description: deskripsi
            };
            
            medicineData.push(newMedicine);
            
            // Perbarui tampilan
            applyFilters();
            
            // Tampilkan notifikasi
            showToast(`Obat "${namaObat}" berhasil ditambahkan!`, 'success');
            
            // Tutup modal
            const modal = bootstrap.Modal.getInstance(document.getElementById('tambahObatModal'));
            modal.hide();
            
            // Reset form
            document.getElementById('formTambahObat').reset();
        });

        // Tombol update data obat
        document.getElementById('updateObat').addEventListener('click', function() {
            const id = parseInt(document.getElementById('editId').value);
            const namaObat = document.getElementById('editNamaObat').value;
            const kategori = document.getElementById('editKategori').value;
            const stok = document.getElementById('editStok').value;
            const expiredDate = document.getElementById('editExpiredDate').value;
            const hargaBeli = document.getElementById('editHargaBeli').value;
            const hargaJual = document.getElementById('editHargaJual').value;
            const deskripsi = document.getElementById('editDeskripsi').value;
            
            if (!namaObat || !kategori || !stok || !expiredDate || !hargaBeli || !hargaJual) {
                showToast('Harap isi semua field yang wajib diisi!', 'danger');
                return;
            }
            
            // Cari index obat yang akan diupdate
            const index = medicineData.findIndex(item => item.id === id);
            
            if (index !== -1) {
                // Update data obat
                medicineData[index] = {
                    id: id,
                    name: namaObat,
                    category: kategori,
                    stock: parseInt(stok),
                    expired: expiredDate,
                    buyPrice: parseInt(hargaBeli),
                    sellPrice: parseInt(hargaJual),
                    description: deskripsi
                };
                
                // Perbarui tampilan
                applyFilters();
                
                // Tampilkan notifikasi
                showToast(`Data obat "${namaObat}" berhasil diperbarui!`, 'success');
                
                // Tutup modal
                const modal = bootstrap.Modal.getInstance(document.getElementById('editObatModal'));
                modal.hide();
            } else {
                showToast('Obat tidak ditemukan!', 'danger');
            }
        });
    });

    // Fungsi untuk menampilkan notifikasi toast
    function showToast(message, type = 'info') {
        const toastContainer = document.getElementById('toastContainer');
        const toastId = 'toast-' + Date.now();
        
        const toast = document.createElement('div');
        toast.className = `toast align-items-center text-white bg-${type} border-0`;
        toast.id = toastId;
        toast.setAttribute('role', 'alert');
        toast.setAttribute('aria-live', 'assertive');
        toast.setAttribute('aria-atomic', 'true');
        
        toast.innerHTML = `
            <div class="d-flex">
                <div class="toast-body">
                    ${message}
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        `;
        
        toastContainer.appendChild(toast);
        
        const bsToast = new bootstrap.Toast(toast, {
            autohide: true,
            delay: 3000
        });
        
        bsToast.show();
        
        // Hapus toast dari DOM setelah disembunyikan
        toast.addEventListener('hidden.bs.toast', function() {
            toast.remove();
        });
    }

    // Fungsi untuk menerapkan filter dan pencarian
    function applyFilters() {
        const searchText = document.getElementById('searchInput').value.toLowerCase();
        
        // Filter berdasarkan kategori
        if (currentFilter === "all") {
            filteredData = medicineData;
        } else {
            filteredData = medicineData.filter(item => item.category === currentFilter);
        }
        
        // Filter berdasarkan pencarian
        if (searchText) {
            filteredData = filteredData.filter(item => 
                item.name.toLowerCase().includes(searchText) || 
                item.category.toLowerCase().includes(searchText)
            );
        }
        
        // Reset ke halaman pertama
        currentPage = 1;
        renderTable();
        setupPagination();
    }

    // Fungsi untuk menampilkan detail obat
    function showDetail(id) {
        const medicine = medicineData.find(item => item.id === id);
        if (!medicine) return;
        
        const detailContent = document.getElementById('detailObatContent');
        detailContent.innerHTML = `
            <div class="row">
                <div class="col-md-6">
                    <p><strong>Nama Obat:</strong><br>${medicine.name}</p>
                    <p><strong>Kategori:</strong><br>${medicine.category}</p>
                    <p><strong>Stok:</strong><br>${medicine.stock}</p>
                </div>
                <div class="col-md-6">
                    <p><strong>Tanggal Kedaluwarsa:</strong><br>${medicine.expired}</p>
                    <p><strong>Harga Beli:</strong><br>Rp ${medicine.buyPrice.toLocaleString('id-ID')}</p>
                    <p><strong>Harga Jual:</strong><br>Rp ${medicine.sellPrice.toLocaleString('id-ID')}</p>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12">
                    <p><strong>Deskripsi:</strong><br>${medicine.description || '-'}</p>
                </div>
            </div>
        `;
        
        // Tampilkan modal detail
        const detailModal = new bootstrap.Modal(document.getElementById('detailObatModal'));
        detailModal.show();
    }

    // Fungsi untuk menampilkan form edit obat
    function showEditForm(id) {
        const medicine = medicineData.find(item => item.id === id);
        if (!medicine) return;
        
        // Isi form dengan data yang ada
        document.getElementById('editId').value = medicine.id;
        document.getElementById('editNamaObat').value = medicine.name;
        document.getElementById('editKategori').value = medicine.category;
        document.getElementById('editStok').value = medicine.stock;
        document.getElementById('editExpiredDate').value = medicine.expired;
        document.getElementById('editHargaBeli').value = medicine.buyPrice;
        document.getElementById('editHargaJual').value = medicine.sellPrice;
        document.getElementById('editDeskripsi').value = medicine.description || '';
        
        // Tampilkan modal edit
        const editModal = new bootstrap.Modal(document.getElementById('editObatModal'));
        editModal.show();
    }

    // Fungsi untuk merender tabel
    function renderTable() {
        const tableBody = document.getElementById('medicineTableBody');
        tableBody.innerHTML = '';
        
        // Hitung data yang akan ditampilkan
        const startIndex = (currentPage - 1) * itemsPerPage;
        const endIndex = Math.min(startIndex + itemsPerPage, filteredData.length);
        const currentData = filteredData.slice(startIndex, endIndex);
        
        if (currentData.length === 0) {
            const row = document.createElement('tr');
            row.innerHTML = `
                <td colspan="5" class="text-center py-4">
                    <i class="fas fa-search fa-2x mb-3 text-muted"></i>
                    <p class="text-muted">Tidak ada data obat yang ditemukan</p>
                </td>
            `;
            tableBody.appendChild(row);
            return;
        }
        
        // Isi tabel dengan data
        currentData.forEach((item, index) => {
            const stockClass = getStockClass(item.stock);
            const row = document.createElement('tr');
            row.innerHTML = `
                <td>${startIndex + index + 1}</td>
                <td>${item.name}</td>
                <td><span class="badge-category">${item.category}</span></td>
                <td><span class="badge-stok ${stockClass}">${item.stock}</span></td>
                <td class="action-buttons">
                    <button class="btn btn-sm btn-info" onclick="showDetail(${item.id})"><i class="fas fa-eye"></i></button>
                    <button class="btn btn-sm btn-warning" onclick="showEditForm(${item.id})"><i class="fas fa-edit"></i></button>
                </td>
            `;
            tableBody.appendChild(row);
        });
    }

    // Fungsi untuk setup pagination
    function setupPagination() {
        const totalPages = Math.ceil(filteredData.length / itemsPerPage);
        const pagination = document.querySelector('.pagination');
        
        // Hapus nomor halaman yang ada (kecuali tombol prev/next)
        const pageItems = pagination.querySelectorAll('.page-item');
        pageItems.forEach(item => {
            if (!item.id) { // Hapus hanya item yang bukan prev/next
                item.remove();
            }
        });
        
        // Tambahkan nomor halaman
        const prevItem = document.getElementById('prevPage');
        for (let i = 1; i <= totalPages; i++) {
            const pageItem = document.createElement('li');
            pageItem.className = `page-item ${i === currentPage ? 'active' : ''}`;
            pageItem.innerHTML = `<a class="page-link" href="#">${i}</a>`;
            
            // Event listener untuk setiap nomor halaman
            pageItem.addEventListener('click', function(e) {
                e.preventDefault();
                currentPage = i;
                renderTable();
                updatePagination();
            });
            
            pagination.insertBefore(pageItem, document.getElementById('nextPage'));
        }
        
        // Update status tombol prev/next
        updatePagination();
    }

    // Fungsi untuk update status pagination
    function updatePagination() {
        const totalPages = Math.ceil(filteredData.length / itemsPerPage);
        
        // Update tombol previous
        if (currentPage === 1) {
            document.getElementById('prevPage').classList.add('disabled');
        } else {
            document.getElementById('prevPage').classList.remove('disabled');
        }
        
        // Update tombol next
        if (currentPage === totalPages || totalPages === 0) {
            document.getElementById('nextPage').classList.add('disabled');
        } else {
            document.getElementById('nextPage').classList.remove('disabled');
        }
        
        // Update active class untuk nomor halaman
        const pageItems = document.querySelectorAll('.pagination .page-item');
        pageItems.forEach(item => {
            if (item.id) return; // Skip tombol prev/next
            
            const pageNum = parseInt(item.textContent);
            if (pageNum === currentPage) {
                item.classList.add('active');
            } else {
                item.classList.remove('active');
            }
        });
    }
</script>
</body>
</html>