<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Pasien</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="d-flex">
    <!-- Sidebar -->
    <div class="bg-light border-end vh-100" style="width: 220px;">
        <div class="p-3">
            <h4 class="text-primary">Admin</h4>
            <ul class="nav flex-column">
                <li class="nav-item"><a href="{{ route('dashboard') }}" class="nav-link">Dashboard</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Pasien</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Data Pendaftaran</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Laporan</a></li>
                <li class="nav-item"><a href="#" class="nav-link text-danger">Logout</a></li>
            </ul>
        </div>
    </div>

    <!-- Main Content -->
    <div class="flex-grow-1 p-4">
        @yield('content')
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>