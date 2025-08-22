<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Obat - Puskesmas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container py-5">
        <h2 class="mb-4">Dashboard Obat</h2>
        @php
        $obat = [
            ['kode' => 'OB001', 'nama' => 'Paracetamol', 'jenis' => 'Tablet', 'stok' => 120, 'expired' => '2026-01-10'],
            ['kode' => 'OB002', 'nama' => 'Amoxicillin', 'jenis' => 'Kapsul', 'stok' => 80, 'expired' => '2025-11-05'],
            ['kode' => 'OB003', 'nama' => 'Salbutamol', 'jenis' => 'Sirup', 'stok' => 45, 'expired' => '2025-09-20'],
            ['kode' => 'OB004', 'nama' => 'Vitamin C', 'jenis' => 'Tablet', 'stok' => 200, 'expired' => '2027-03-15'],
            ['kode' => 'OB005', 'nama' => 'Ibuprofen', 'jenis' => 'Tablet', 'stok' => 60, 'expired' => '2025-12-01'],
        ];
        @endphp
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Tabel Obat</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead class="table-light">
                            <tr>
                                <th>Kode Obat</th>
                                <th>Nama Obat</th>
                                <th>Jenis</th>
                                <th>Stok</th>
                                <th>Kadaluarsa</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($obat as $item)
                            <tr>
                                <td>{{ $item['kode'] }}</td>
                                <td>{{ $item['nama'] }}</td>
                                <td>{{ $item['jenis'] }}</td>
                                <td>{{ $item['stok'] }}</td>
                                <td>{{ $item['expired'] }}</td>
                                <td>
                                    <button class="btn btn-sm btn-outline-primary">Detail</button>
                                    <button class="btn btn-sm btn-outline-warning">Edit</button>
                                    <button class="btn btn-sm btn-outline-danger">Hapus</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>