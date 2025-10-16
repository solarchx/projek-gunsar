<!doctype html>
<html lang="id" data-bs-theme="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Obat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        /* ... CSS sama seperti sebelumnya ... */
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{ route('farmasi.index') }}"><i class="fa-solid fa-capsules"></i> Farmasi</a>
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
                    <a href="{{ route('farmasi.index') }}" class="btn btn-secondary">Kembali</a>
                </div>

                <div class="card-body p-4">
                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <form action="{{ route('farmasi.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="nama_obat" class="form-label">Nama Obat</label>
                            <input type="text" id="nama_obat" name="nama_obat" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="jenis_obat" class="form-label">Jenis Obat</label>
                            <select id="jenis_obat" name="jenis_obat" class="form-select" required>
                                <option value="">-- Pilih Jenis --</option>
                                <option value="Kapsul">Kapsul</option>
                                <option value="Tablet">Tablet</option>
                                <option value="Sirup">Sirup</option>
                                <option value="Salep">Salep</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="no_obat" class="form-label">No Obat</label>
                            <input type="text" id="no_obat" name="no_obat" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="stok_obat" class="form-label">Stok Obat</label>
                            <input type="number" id="stok_obat" name="stok_obat" class="form-control" min="1" required>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary me-2">Simpan</button>
                            <a href="{{ route('farmasi.index') }}" class="btn btn-light">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>
</html>