@extends('layoutdokter')

@section('konten')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-5 border-bottom">
    <h1 class="h2" style="color: #3fbbc0;">Data Screening</h1>
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
            <h5 class="mb-0"><i class="fas fa-stethoscope me-2"></i>Daftar Screening Pasien</h5>
            <a href="{{ route('screening.create') }}" class="btn btn-light btn-sm" style="color: #3fbbc0;">
                <i class="fas fa-plus me-1"></i> Tambah Screening
            </a>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead style="background-color: #f8f9fa; color: #3fbbc0;">
                    <tr>
                        <th>NIK Pasien</th>
                        <th>Tinggi Badan (cm)</th>
                        <th>Berat Badan (kg)</th>
                        <th>Suhu Badan (°C)</th>
                        <th>Tekanan Darah</th>
                        <th>Tanggal Screening</th>
                        <th width="150">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($screenings as $screening)
                    <tr>
                        <td>{{ $screening->NIK_pasien }}</td>
                        <td>{{ $screening->tinggi_badan }} cm</td>
                        <td>{{ $screening->berat_badan }} kg</td>
                        <td>{{ $screening->suhu_badan }}°C</td>
                        <td>{{ $screening->tekanan_darah }}</td>
                        <td>{{ \Carbon\Carbon::parse($screening->tanggal_screening)->format('d/m/Y') }}</td>
                        <td>
                            <div class="btn-group" role="group">
                                <a href="{{ route('screening.show', $screening->id) }}" class="btn btn-sm text-white" style="background-color: #3fbbc0;" title="Lihat Detail">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{ route('screening.edit', $screening->id) }}" class="btn btn-sm text-white" style="background-color: #6c757d;" title="Edit">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('screening.destroy', $screening->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm text-white" style="background-color: #dc3545;" title="Hapus" onclick="return confirm('Apakah Anda yakin ingin menghapus data screening ini?')">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="text-center py-4">
                            <i class="fas fa-stethoscope fa-2x mb-3" style="color: #3fbbc0;"></i>
                            <p class="text-muted">Tidak ada data screening</p>
                            <a href="{{ route('screening.create') }}" class="btn text-white" style="background-color: #3fbbc0;">
                                <i class="fas fa-plus me-1"></i> Tambah Screening Pertama
                            </a>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection