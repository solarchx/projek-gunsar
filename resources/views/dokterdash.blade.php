<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Puskesmas</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/dokterdash.css" rel="stylesheet">

    <!-- Font Awesome untuk ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 col-lg-2 d-md-block sidebar collapse">
                <div class="position-fixed pt-3">
                    <div class="text-center mb-4">
                        <h4>Puskes GunSar</h4>
                        <hr>
                    </div>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">
                                <i class="fas fa-tachometer-alt me-2"></i>Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-user-injured me-2"></i>Pasien
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/dokter/JanjiTemu">
                                <i class="fas fa-calendar-check me-2"></i>Janji Temu
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-pills me-2"></i>Obat
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="dokter/RekamMedis">
                                <i class="fas fa-file-medical me-2"></i>Rekam Medis
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-chart-bar me-2"></i>Laporan
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-users me-2"></i>Staf
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-cog me-2"></i>Pengaturan
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Dashboard Puskesmas</h1>
                </div>

                <section class="animated-services py-4">
                    <div class="row g-4">
                        <div class="col-xl-3 col-md-6 d-flex">
                            <div class="item-trans position-relative shadow p-3 bg-body rounded">
                                <div class="icon"><i class="fas fa-user-injured icon"></i></div>
                                <h4><a href="/dokterumum/HalamanDokter" class="h4 stretched-link">Dokter Umum</a></h4>
                                <p>Pelayanan kesehatan menyeluruh untuk segala usia.</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 d-flex">
                            <div class="item-trans position-relative shadow p-3 bg-body rounded">
                                <div class="icon"><i class="fas fa-tooth icon"></i></div>
                                <h4><a href="" class="h4 stretched-link">Dokter Gigi</a></h4>
                                <p>Senyum sehat dimulai dari perawatan gigi terbaik.</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 d-flex">
                            <div class="item-trans position-relative shadow p-3 bg-body rounded">
                                <div class="icon"><i class="fas fa-child icon"></i></div>
                                <h4><a href="" class="h4 stretched-link">Dokter Anak</a></h4>
                                <p>Perawatan khusus untuk si kecil yang tumbuh sehat.</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 d-flex">
                            <div class="item-trans position-relative shadow p-3 bg-body rounded">
                                <div class="icon"><i class="fas fa-plus icon"></i></div>
                                <h4><a href="" class="h4 stretched-link">Farmasi</a></h4>
                                <p>Obat terpercaya, layanan ramah, dan cepat.</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 d-flex">
                            <div class="item-trans position-relative shadow p-3 bg-body rounded">
                                <div class="icon"><i class="fas fa-cash-register icon"></i></div>
                                <h4><a href="" class="h4 stretched-link">Kasir</a></h4>
                                <p>Pelayanan transaksi cepat dan akurat, aman dan sejahtera.</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 d-flex">
                            <div class="item-trans position-relative shadow p-3 bg-body rounded">
                                <div class="icon"><i class="fas fa-user-nurse icon"></i></div>
                                <h4><a href="" class="h4 stretched-link">Perawat</a></h4>
                                <p>Merawat dengan hati, peduli sepenuh hati.</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 d-flex">
                            <div class="item-trans position-relative shadow p-3 bg-body rounded">
                                <div class="icon"><i class="fas fa-user-md icon"></i></div>
                                <h4><a href="" class="h4 stretched-link">Staff</a></h4>
                                <p>Tim profesional yang siap membantu Anda.</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 d-flex">
                            <div class="item-trans position-relative shadow p-3 bg-body rounded">
                                <div class="icon"><i class="fas fa-marker icon"></i></div>
                                <h4><a href="" class="h4 stretched-link">DLL</a></h4>
                                <p>Layanan lainnya untuk menunjang kenyamanan Anda.</p>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Charts and Tables -->

                {{-- <section id="featured-animation" class="featured-animation section">
                    <div class="container">
                        <div class="row gy-4">
                            <div class="col-xl-3 col-md-6 d-flex">
                                <div class="position-relative">
                                    <div class="icon"><i class="fas fa-tooth icon"></i></div>
                                    <h4><a href="" class="stretched-link">Cabut Gigi</a></h4>
                                    <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                                </div>
                            </div><!-- End Service Item -->

                            <div class="col-xl-3 col-md-6 d-flex">
                                <div class="position-relative">
                                    <div class="icon"><i class="fas fa-pills icon"></i></div>
                                    <h4><a href="" class="stretched-link">Farmasi</a></h4>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                                </div>
                            </div><!-- End Service Item -->

                            <div class="col-xl-3 col-md-6 d-flex">
                                <div class="position-relative">
                                    <div class="icon"><i class="fas fa-stethoscope icon"></i></div>
                                    <h4><a href="" class="stretched-link">Pemeriksaan</a></h4>
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                                </div>
                            </div><!-- End Service Item -->

                            <div class="col-xl-3 col-md-6 d-flex">
                                <div class="position-relative">
                                    <div class="icon"><i class="fas fa-microscope icon"></i></div>
                                    <h4><a href="" class="stretched-link">Laboratorium</a></h4>
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                                </div>
                            </div><!-- End Service Item -->
                            <div class="col-xl-3 col-md-6 d-flex">
                                <div class="position-relative">
                                    <div class="icon"><i class="fas fa-tooth icon"></i></div>
                                    <h4><a href="" class="stretched-link">Cabut Gigi</a></h4>
                                    <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                                </div>
                            </div><!-- End Service Item -->

                            <div class="col-xl-3 col-md-6 d-flex">
                                <div class="position-relative">
                                    <div class="icon"><i class="fas fa-pills icon"></i></div>
                                    <h4><a href="" class="stretched-link">Farmasi</a></h4>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                                </div>
                            </div><!-- End Service Item -->

                            <div class="col-xl-3 col-md-6 d-flex">
                                <div class="position-relative">
                                    <div class="icon"><i class="fas fa-stethoscope icon"></i></div>
                                    <h4><a href="" class="stretched-link">Pemeriksaan</a></h4>
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                                </div>
                            </div><!-- End Service Item -->

                            <div class="col-xl-3 col-md-6 d-flex">
                                <div class="position-relative">
                                    <div class="icon"><i class="fas fa-microscope icon"></i></div>
                                    <h4><a href="" class="stretched-link">Laboratorium</a></h4>
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                                </div>
                            </div>
                        </div>

                    </div>

                </section> --}}

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h5>Janji Temu Hari Ini</h5>
                                <button class="btn btn-sm btn-outline-primary">Lihat Semua</button>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Nama Pasien</th>
                                                <th>Waktu</th>
                                                <th>Dokter</th>
                                                <th>Keluhan</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Budi Santoso</td>
                                                <td>08:00 - 08:30</td>
                                                <td>dr. Ani Wijaya</td>
                                                <td>Demam dan batuk</td>
                                                <td><span class="badge bg-success">Telah Dilayani</span></td>
                                                <td>
                                                    <button class="btn btn-sm btn-outline-primary">Detail</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Siti Rahayu</td>
                                                <td>09:00 - 09:30</td>
                                                <td>dr. Bambang S.</td>
                                                <td>Pemeriksaan rutin</td>
                                                <td><span class="badge bg-warning">Menunggu</span></td>
                                                <td>
                                                    <button class="btn btn-sm btn-outline-primary">Detail</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Ahmad Fauzi</td>
                                                <td>10:00 - 10:30</td>
                                                <td>dr. Ani Wijaya</td>
                                                <td>Kontrol hipertensi</td>
                                                <td><span class="badge bg-secondary">Belum Datang</span></td>
                                                <td>
                                                    <button class="btn btn-sm btn-outline-primary">Detail</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Dewi Lestari</td>
                                                <td>11:00 - 11:30</td>
                                                <td>dr. Citra A.</td>
                                                <td>Imunisasi anak</td>
                                                <td><span class="badge bg-secondary">Belum Datang</span></td>
                                                <td>
                                                    <button class="btn btn-sm btn-outline-primary">Detail</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
