<!doctype html>
<html lang="id" data-bs-theme="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Obat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --bg-gradient: linear-gradient(135deg, #41b3a3, #379683);
            --card-bg: rgba(255, 255, 255, 0.15);
            --card-header-bg: rgba(255, 255, 255, 0.2);
            --card-text: #fff;
            --btn-primary-bg: #fff;
            --btn-primary-text: #41b3a3;
            --btn-light-bg: rgba(255,255,255,0.5);
            --btn-light-text: #fff;
        }

        [data-bs-theme="dark"] {
            --bg-gradient: linear-gradient(135deg, #1c3a35, #162a28);
            --card-bg: rgba(0, 0, 0, 0.3);
            --card-header-bg: rgba(0, 0, 0, 0.4);
            --card-text: #e0e0e0;
            --btn-primary-bg: #41b3a3;
            --btn-primary-text: #fff;
            --btn-light-bg: rgba(255,255,255,0.1);
            --btn-light-text: #e0e0e0;
        }

        body {
            background: var(--bg-gradient);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            transition: background 0.5s ease;
        }

        .navbar {
            background-color: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
            transition: all 0.5s ease;
        }
        .navbar .nav-link,
        .navbar-brand {
            color: var(--card-text) !important;
            font-weight: 500;
        }
        .navbar .nav-link:hover {
            opacity: 0.8;
        }

        .custom-card {
            background: var(--card-bg);
            backdrop-filter: blur(12px);
            color: var(--card-text);
            border-radius: 16px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
            transition: all 0.5s ease;
        }

        .custom-card .card-header {
            background: var(--card-header-bg);
            border-bottom: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 16px 16px 0 0;
            font-weight: bold;
        }

        .form-control, .form-select {
            background: rgba(255, 255, 255, 0.9);
            border: none;
            border-radius: 8px;
        }

        .btn-primary {
            background-color: var(--btn-primary-bg);
            color: var(--btn-primary-text);
            font-weight: 600;
            border: none;
            transition: all 0.3s ease;
        }
        .btn-primary:hover {
            opacity: 0.9;
        }

        .btn-light {
            background: var(--btn-light-bg);
            color: var(--btn-light-text);
            border: none;
        }

        .dark-toggle {
            cursor: pointer;
            font-size: 1.3rem;
            color: var(--card-text);
        }

        .alert {
            border-radius: 8px;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="/farmasi"><i class="fa-solid fa-capsules"></i> Farmasi</a>
            <div class="ms-auto">
                <span class="dark-toggle" id="darkModeToggle" title="Ganti Tema">
                    <i class="fa-solid fa-moon"></i>
                </span>
            </div>
        </div>
    </nav>

    <!-- Konten -->
    <main class="d-flex align-items-center flex-grow-1">
        <div class="container" style="max-width: 600px;">
            <div class="card custom-card p-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0"><i class="fa-solid fa-plus"></i> Tambah Obat</h5>
                    <a href="/farmasi" class="btn btn-light btn-sm"><i class="fa-solid fa-arrow-left"></i> Kembali</a>
                </div>

                <div class="card-body p-4">
                    <div class="alert alert-success d-none" id="successAlert">✅ Data obat berhasil disimpan!</div>
                    <div class="alert alert-danger d-none" id="errorAlert">❌ Periksa kembali input Anda. Semua field harus diisi.</div>

                    <form id="obatForm" class="needs-validation" novalidate>
                        <div class="mb-3">
                            <label for="nama_obat" class="form-label">Nama Obat</label>
                            <input type="text" id="nama_obat" name="nama_obat" class="form-control" placeholder="Contoh: Paracetamol" required>
                            <div class="invalid-feedback">Nama obat wajib diisi.</div>
                        </div>
                        <div class="mb-3">
                            <label for="jenis_obat" class="form-label">Jenis Obat</label>
                            <select id="jenis_obat" name="jenis_obat" class="form-select" required>
                                <option value="">-- Pilih Jenis --</option>
                                <option value="Kapsul">Kapsul</option>
                                <option value="Tablet">Tablet</option>
                                <option value="Sirup">Sirup</option>
                                <option value="Salep">Salep</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                            <div class="invalid-feedback">Pilih jenis obat.</div>
                        </div>
                        <div class="mb-3">
                            <label for="no_obat" class="form-label">No Obat (kode)</label>
                            <input type="text" id="no_obat" name="no_obat" class="form-control" placeholder="Contoh: OBT-001" required>
                            <div class="invalid-feedback">No obat wajib diisi.</div>
                        </div>
                        <!-- Tambahan Stok Obat -->
                        <div class="mb-3">
                            <label for="stok_obat" class="form-label">Stok Obat</label>
                            <input type="number" id="stok_obat" name="stok_obat" class="form-control" placeholder="Contoh: 100" min="1" required>
                            <div class="invalid-feedback">Stok obat wajib diisi dan minimal 1.</div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary me-2"><i class="fa-solid fa-floppy-disk"></i> Simpan</button>
                            <a href="obat-index.html" class="btn btn-light"><i class="fa-solid fa-xmark"></i> Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        (function () {
            'use strict';
            const form = document.getElementById('obatForm');
            const successAlert = document.getElementById('successAlert');
            const errorAlert = document.getElementById('errorAlert');

            form.addEventListener('submit', function (event) {
                event.preventDefault();
                if (!form.checkValidity()) {
                    errorAlert.classList.remove('d-none');
                    successAlert.classList.add('d-none');
                } else {
                    errorAlert.classList.add('d-none');
                    successAlert.classList.remove('d-none');
                    form.reset();
                    form.classList.remove('was-validated');
                }
                form.classList.add('was-validated');
            }, false);
        })();

        const toggleBtn = document.getElementById('darkModeToggle');
        toggleBtn.addEventListener('click', () => {
            const html = document.documentElement;
            const isDark = html.getAttribute('data-bs-theme') === 'dark';
            html.setAttribute('data-bs-theme', isDark ? 'light' : 'dark');
            toggleBtn.innerHTML = isDark 
                ? '<i class="fa-solid fa-moon"></i>' 
                : '<i class="fa-solid fa-sun"></i>';
        });
    </script>
</body>
</html>
