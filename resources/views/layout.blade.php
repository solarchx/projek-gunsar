<!-- resources/views/layout.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('assets/css/dokterdash.css') }}" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 col-lg-2 d-md-block sidebar collapse">
                <div class="position-sticky pt-3">
                    <div class="text-center mb-4">
                        <h4>Puskes GunSar</h4>
                        <hr>
                    </div>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link @if(Request::is('dokterdash')) active @endif" href="{{ url('dokterdash') }}">
                                <i class="fas fa-tachometer-alt me-2"></i>Dashboard
                            </a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-user-injured me-2"></i>Pasien</a></li>
                        <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-calendar-check me-2"></i>Janji Temu</a></li>
                        <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-pills me-2"></i>Obat</a></li>
                        <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-file-medical me-2"></i>Rekam Medis</a></li>
                        <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-chart-bar me-2"></i>Laporan</a></li>
                        <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-users me-2"></i>Staf</a></li>
                        <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-cog me-2"></i>Pengaturan</a></li>
                    </ul>
                </div>
            </div>
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Dashboard Puskesmas</h1>
                </div>

            <!-- Main Content -->
            <main class="col-md-5  9ms-sm-auto col-lg-11 px-md-4 py-4">
                @yield('konten')
            </main>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
