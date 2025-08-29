@extends('layoutdokter')

@section('konten')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-5 border-bottom">
    <h1 class="h2" style="color: #3fbbc0;">Edit Data Dokter</h1>
</div>

<div class="card shadow border-0" style="border-top: 3px solid #3fbbc0;">
    <div class="card-header py-3" style="background: linear-gradient(135deg, #3fbbc0 0%, #38a9ad 100%); color: white;">
        <h5 class="mb-0"><i class="fas fa-edit me-2"></i>Form Edit Dokter</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('dokter.update', $dokter->id) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="row mb-4">
                <div class="col-md-6 mb-3">
                    <label class="form-label fw-bold" style="color: #3fbbc0;">NIP:</label>
                    <input type="text" name="nip" class="form-control" value="{{ old('nip', $dokter->nip) }}" required 
                           style="border-color: #3fbbc0; border-radius: 8px;">
                    @error('nip') <div class="text-danger mt-1">{{ $message }}</div> @enderror
                </div>
                
                <div class="col-md-6 mb-3">
                    <label class="form-label fw-bold" style="color: #3fbbc0;">Nama Dokter:</label>
                    <input type="text" name="nama_dokter" class="form-control" value="{{ old('nama_dokter', $dokter->nama_dokter) }}" required 
                           style="border-color: #3fbbc0; border-radius: 8px;">
                    @error('nama_dokter') <div class="text-danger mt-1">{{ $message }}</div> @enderror
                </div>
            </div>
            
            <div class="row mb-4">
                <div class="col-md-6 mb-3">
                    <label class="form-label fw-bold" style="color: #3fbbc0;">Jabatan:</label>
                    <input type="text" name="jabatan_dokter" class="form-control" value="{{ old('jabatan_dokter', $dokter->jabatan_dokter) }}" required 
                           style="border-color: #3fbbc0; border-radius: 8px;">
                    @error('jabatan_dokter') <div class="text-danger mt-1">{{ $message }}</div> @enderror
                </div>
                
                <div class="col-md-6 mb-3">
                    <label class="form-label fw-bold" style="color: #3fbbc0;">Poli:</label>
                    <select name="poli_id" class="form-control" required 
                            style="border-color: #3fbbc0; border-radius: 8px;">
                        <option value="">Pilih Poli</option>
                        @foreach($polis as $poli)
                        <option value="{{ $poli->id }}" {{ (old('poli_id', $dokter->poli_id) == $poli->id) ? 'selected' : '' }}>
                            {{ $poli->nama_poli }}
                        </option>
                        @endforeach
                    </select>
                    @error('poli_id') <div class="text-danger mt-1">{{ $message }}</div> @enderror
                </div>
            </div>
            
            <div class="d-flex justify-content-between mt-4">
                <button type="submit" class="btn text-white px-4 py-2" 
                        style="background-color: #3fbbc0; border-radius: 8px;">
                    <i class="fas fa-save me-1"></i> Update
                </button>
                <a href="{{ route('dokter.index') }}" class="btn btn-secondary px-4 py-2" style="border-radius: 8px;">
                    <i class="fas fa-times me-1"></i> Batal
                </a>
            </div>
        </form>
    </div>
</div>

<style>
    .form-control:focus {
        border-color: #3fbbc0;
        box-shadow: 0 0 0 0.2rem rgba(63, 187, 192, 0.25);
    }
    .card {
        border-radius: 12px;
        overflow: hidden;
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