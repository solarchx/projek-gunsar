@extends('layoutdokter')

@section('konten')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-5 border-bottom">
    <h1 class="h2" style="color: #3fbbc0;">Data Dokter</h1>
</div>

@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert" style="border-left: 4px solid #3fbbc0;">
        <i class="fas fa-check-circle me-2" style="color: #3fbbc0;"></i>
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<div class="card shadow border-0 mb-4" style="border-top: 3px solid #3fbbc0;">
    <div class="card-header py-3" style="background: linear-gradient(135deg, #3fbbc0 0%, #38a9ad 100%); color: white;">
        <div class="d-flex justify-content-between align-items-center">
            <h5 class="mb-0"><i class="fas fa-user-md me-2"></i>Daftar Dokter</h5>
            <a href="{{ route('dokter.create') }}" class="btn btn-light btn-sm" style="color: #3fbbc0;">
                <i class="fas fa-plus me-1"></i> Tambah Dokter
            </a>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead style="background-color: #f8f9fa; color: #3fbbc0;">
                    <tr>
                        <th style="border-top: none;">NIP</th>
                        <th style="border-top: none;">Nama Dokter</th>
                        <th style="border-top: none;">Jabatan</th>
                        <th style="border-top: none;">Poli</th>
                        <th style="border-top: none; width: 150px;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($dokters as $dokter)
                    <tr>
                        <td>{{ $dokter->nip }}</td>
                        <td>{{ $dokter->nama_dokter }}</td>
                        <td>{{ $dokter->jabatan_dokter }}</td>
                        <td>{{ $dokter->poli->nama_poli }}</td>
                        <td>
                            <div class="btn-group" role="group">
                                <a href="{{ route('dokter.show', $dokter->id) }}" class="btn btn-sm text-white" style="background-color: #3fbbc0;" title="Lihat Detail">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{ route('dokter.edit', $dokter->id) }}" class="btn btn-sm text-white" style="background-color: #6c757d;" title="Edit">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('dokter.destroy', $dokter->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm text-white" style="background-color: #dc3545;" title="Hapus" onclick="return confirm('Apakah Anda yakin ingin menghapus dokter ini?')">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center py-4">
                            <i class="fas fa-user-md fa-2x mb-3" style="color: #3fbbc0;"></i>
                            <p class="text-muted">Tidak ada data dokter</p>
                            <a href="{{ route('dokter.create') }}" class="btn text-white" style="background-color: #3fbbc0;">
                                <i class="fas fa-plus me-1"></i> Tambah Dokter Pertama
                            </a>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

<style>
    .table th {
        font-weight: 600;
        border-bottom: 2px solid #3fbbc0;
    }
    .btn:hover {
        opacity: 0.9;
        transform: translateY(-2px);
        transition: all 0.3s ease;
    }
    .card {
        border-radius: 10px;
        overflow: hidden;
    }
</style>
@endsection