@extends('layoutdokter')

@section('konten')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-5 border-bottom">
    <h1 class="h2" style="color: #3fbbc0;">Detail Dokter</h1>
</div>

<div class="card shadow border-0" style="border-top: 3px solid #3fbbc0;">
    <div class="card-header py-3" style="background: linear-gradient(135deg, #3fbbc0 0%, #38a9ad 100%); color: white;">
        <h5 class="mb-0"><i class="fas fa-info-circle me-2"></i>Informasi Dokter</h5>
    </div>
    <div class="card-body">
        <div class="row mb-4">
            <div class="col-md-6">
                <div class="info-card mb-4 p-3 rounded" style="background-color: #f8f9fa; border-left: 4px solid #3fbbc0;">
                    <label class="form-label fw-bold mb-1" style="color: #3fbbc0;">NIP:</label>
                    <p class="mb-0 fs-5">{{ $dokter->nip }}</p>
                </div>
                
                <div class="info-card mb-4 p-3 rounded" style="background-color: #f8f9fa; border-left: 4px solid #3fbbc0;">
                    <label class="form-label fw-bold mb-1" style="color: #3fbbc0;">Nama Dokter:</label>
                    <p class="mb-0 fs-5">{{ $dokter->nama_dokter }}</p>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="info-card mb-4 p-3 rounded" style="background-color: #f8f9fa; border-left: 4px solid #3fbbc0;">
                    <label class="form-label fw-bold mb-1" style="color: #3fbbc0;">Jabatan:</label>
                    <p class="mb-0 fs-5">{{ $dokter->jabatan_dokter }}</p>
                </div>
                
                <div class="info-card mb-4 p-3 rounded" style="background-color: #f8f9fa; border-left: 4px solid #3fbbc0;">
                    <label class="form-label fw-bold mb-1" style="color: #3fbbc0;">Poli:</label>
                    <p class="mb-0 fs-5">{{ $dokter->poli->nama_poli }}</p>
                </div>
            </div>
        </div>
        
        <div class="d-flex justify-content-between mt-4">
            <a href="{{ route('dokter.index') }}" class="btn btn-secondary px-4 py-2" style="border-radius: 8px;">
                <i class="fas fa-arrow-left me-1"></i> Kembali
            </a>
            <div>
                <a href="{{ route('dokter.edit', $dokter->id) }}" class="btn text-white px-4 py-2" 
                   style="background-color: #3fbbc0; border-radius: 8px;">
                    <i class="fas fa-edit me-1"></i> Edit
                </a>
            </div>
        </div>
    </div>
</div>

<style>
    .card {
        border-radius: 12px;
        overflow: hidden;
    }
    .info-card {
        transition: transform 0.3s ease;
    }
    .info-card:hover {
        transform: translateY(-3px);
    }
    .btn {
        transition: all 0.3s ease;
    }
    .btn:hover {
        transform: translateY(-2px);
        opacity: 0.9;
    }
</style>
@endsection