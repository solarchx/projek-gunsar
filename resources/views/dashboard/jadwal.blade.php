@extends('layouts.app')

@section('content')
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-5">
    <h3 class="mb-4 text-primary">Jadwal Pemeriksaan</h3>
    <table class="table table-striped table-bordered shadow-sm">
        <thead class="table-dark">
            <tr>
                <th>Tanggal</th>
                <th>Poli</th>
                <th>Dokter</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($jadwals as $jadwal)
                <tr>
                    <td>{{ $jadwal['tanggal'] }}</td>
                    <td>{{ $jadwal['poli'] }}</td>
                    <td>{{ $jadwal['dokter'] }}</td>
                    <td>
                        @if($jadwal['status'] === 'Menunggu')
                            <span class="badge bg-warning text-dark">Menunggu</span>
                        @else
                            <span class="badge bg-success">Terkonfirmasi</span>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Bootstrap JS (untuk interaksi) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
@endsection
