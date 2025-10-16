<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Farmasi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            background-color: #f8f9fa;
            color: #212529;
            transition: background-color 0.3s, color 0.3s;
        }

        /* Sidebar */
        .sidebar {
            width: 250px;
            height: 100vh;
            background: #41b3a3;
            color: #fff;
            position: fixed;
            top: 0;
            left: 0;
            padding-top: 20px;
            overflow: hidden;
        }

        .sidebar h4 {
            text-align: center;
            margin-bottom: 30px;
            font-size: 20px;
        }

        .sidebar a {
            display: block;
            padding: 12px 20px;
            color: #fff;
            text-decoration: none;
            font-size: 16px;
            margin-bottom: 10px;
            white-space: nowrap;
            transition: background 0.3s ease;
        }

        .sidebar a:hover {
            background: rgba(255, 255, 255, 0.2);
            border-radius: 5px;
        }

        /* Content */
        .content {
            margin-left: 260px;
            padding: 20px;
            margin-top: 50px;
        }

        /* Dark Mode Styles */
        body.dark-mode {
            background-color: #121212;
            color: #e4e4e4;
        }

        body.dark-mode .dashboard-card {
            background-color: #1f1f1f;
            color: #fff;
        }

        body.dark-mode .sidebar {
            background-color: #1f2d3d;
        }

        /* Dashboard Card */
        .dashboard-card {
            background: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            transition: background-color 0.3s, color 0.3s;
        }

        .table th {
            background-color: #e9ecef;
        }

        body.dark-mode .table th {
            background-color: #333;
            color: #fff;
        }

        /* Dark Mode Toggle Button */
        .dark-toggle {
            position: fixed;
            top: 15px;
            right: 20px;
            background: transparent;
            color: #fff;
            border: none;
            padding: 8px 12px;
            cursor: pointer;
            border-radius: 4px;
            z-index: 1000;
            transition: background-color 0.3s;
        }

        body.dark-mode .dark-toggle {
            background: transparent;
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <h4>Farmasi</h4>
        <a href="#">🏠 Dashboard</a>
        <a href="#">💊 Data Obat</a>
        <a href="#">📄 Laporan</a>
        <a href="#">⚙ Pengaturan</a>
        <a href="#">🚪 Logout</a>
    </div>

    <!-- Dark Mode Toggle Button -->
    <button class="dark-toggle" id="darkToggle">🌙</button>

    <!-- Main Content -->
    <div class="content" id="content">
        <div class="dashboard-card">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h2 class="mb-0">Daftar Obat</h2>
                <a href="{{ route('farmasi.create') }}" class="btn btn-primary">+ Tambah Obat</a>
            </div>

            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Obat</th>
                        <th>Jenis Obat</th>
                        <th>No Obat</th>
                        <th>Stok</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @if($farmasis->count())
                        @foreach($farmasis as $index => $obat)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $obat->nama_obat }}</td>
                            <td>{{ $obat->jenis_obat }}</td>
                            <td>{{ $obat->no_obat }}</td>
                            <td>{{ $obat->stok_obat }}</td>
                            <td>
                                <a href="{{ route('farmasi.edit', $obat->id) }}" class="btn btn-warning btn-sm">Update</a>
                                <form action="{{ route('farmasi.destroy', $obat->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="6" class="text-center">Data obat belum ada</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>

    <script>
        const darkToggle = document.getElementById('darkToggle');
        const body = document.body;

        // Dark mode toggle
        darkToggle.addEventListener('click', () => {
            body.classList.toggle('dark-mode');
            darkToggle.textContent = body.classList.contains('dark-mode') ? '☀' : '🌙';
        });
    </script>
</body>
</html>