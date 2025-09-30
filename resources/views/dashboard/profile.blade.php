@extends('layouts.app')

@section('content')
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-5">
    <h3 class="mb-4 text-primary">Profil Pasien</h3>

    <div class="card shadow-sm border-0">
        <div class="card-body">
            <p class="mb-2"><strong>Nama:</strong> {{ Auth::user()->name }}</p>
            <p class="mb-2"><strong>Email:</strong> {{ Auth::user()->email }}</p>
            <p class="mb-0"><strong>Tanggal Daftar:</strong> {{ Auth::user()->created_at->format('d M Y') }}</p>
        </div>
    </div>
</div>

<!-- Bootstrap JS (agar interaktif: dropdown, modal, dsb) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
@endsection
