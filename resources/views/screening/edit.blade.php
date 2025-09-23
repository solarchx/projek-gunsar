@extends('layoutdokter')

@section('konten')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-5 border-bottom">
    <h1 class="h2" style="color: #3fbbc0;">Edit Data Screening</h1>
</div>

<div class="card shadow border-0" style="border-top: 3px solid #3fbbc0;">
    <div class="card-header py-3" style="background: linear-gradient(135deg, #3fbbc0 0%, #38a9ad 100%); color: white;">
        <h5 class="mb-0"><i class="fas fa-edit me-2"></i>Form Edit Screening</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('screening.update', $screening->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="NIK_pasien" class="form-label" style="color: #3fbbc0; font-weight: 600;">NIK Pasien</label>
                        <input type="text" class="form-control @error('NIK_pasien') is-invalid @enderror" 
                               id="NIK_pasien" name="NIK_pasien" value="{{ old('NIK_pasien', $screening->NIK_pasien) }}" 
                               placeholder="Masukkan 16 digit NIK" maxlength="16">
                        @error('NIK_pasien')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="tanggal_screening" class="form-label" style="color: #3fbbc0; font-weight: 600;">Tanggal Screening</label>
                        <input type="date" class="form-control @error('tanggal_screening') is-invalid @enderror" 
                               id="tanggal_screening" name="tanggal_screening" value="{{ old('tanggal_screening', $screening->tanggal_screening->format('Y-m-d')) }}">
                        @error('tanggal_screening')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-3">
                    <div class="mb-3">
                        <label for="tinggi_badan" class="form-label" style="color: #3fbbc0; font-weight: 600;">Tinggi Badan (cm)</label>
                        <input type="number" class="form-control @error('tinggi_badan') is-invalid @enderror" 
                               id="tinggi_badan" name="tinggi_badan" value="{{ old('tinggi_badan', $screening->tinggi_badan) }}"
                               placeholder="Contoh: 170" min="50" max="250">
                        @error('tinggi_badan')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="mb-3">
                        <label for="berat_badan" class="form-label" style="color: #3fbbc0; font-weight: 600;">Berat Badan (kg)</label>
                        <input type="number" class="form-control @error('berat_badan') is-invalid @enderror" 
                               id="berat_badan" name="berat_badan" value="{{ old('berat_badan', $screening->berat_badan) }}"
                               placeholder="Contoh: 65" min="10" max="300">
                        @error('berat_badan')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="mb-3">
                        <label for="suhu_badan" class="form-label" style="color: #3fbbc0; font-weight: 600;">Suhu Badan (°C)</label>
                        <input type="number" step="0.1" class="form-control @error('suhu_badan') is-invalid @enderror" 
                               id="suhu_badan" name="suhu_badan" value="{{ old('suhu_badan', $screening->suhu_badan) }}"
                               placeholder="Contoh: 36.5" min="30" max="45">
                        @error('suhu_badan')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="mb-3">
                        <label for="tekanan_darah" class="form-label" style="color: #3fbbc0; font-weight: 600;">Tekanan Darah</label>
                        <input type="text" class="form-control @error('tekanan_darah') is-invalid @enderror" 
                               id="tekanan_darah" name="tekanan_darah" value="{{ old('tekanan_darah', $screening->tekanan_darah) }}"
                               placeholder="Contoh: 120/80">
                        @error('tekanan_darah')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            
            <div class="d-flex justify-content-between align-items-center">
                <a href="{{ route('screening.index') }}" class="btn btn-secondary">
                    <i class="fas fa-arrow-left me-1"></i> Kembali
                </a>
                <button type="submit" class="btn text-white" style="background-color: #3fbbc0;">
                    <i class="fas fa-save me-1"></i> Update
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    document.getElementById('NIK_pasien').addEventListener('input', function(e) {
        this.value = this.value.replace(/[^0-9]/g, '');
    });
</script>
@endsection