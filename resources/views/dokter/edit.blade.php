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
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="nip" class="form-label" style="color: #3fbbc0; font-weight: 600;">NIP</label>
                        <input type="text" class="form-control @error('nip') is-invalid @enderror" 
                               id="nip" name="nip" value="{{ old('nip', $dokter->nip) }}" 
                               placeholder="Masukkan 16 digit NIP" maxlength="16">
                        @error('nip')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="nama_dokter" class="form-label" style="color: #3fbbc0; font-weight: 600;">Nama Dokter</label>
                        <input type="text" class="form-control @error('nama_dokter') is-invalid @enderror" 
                               id="nama_dokter" name="nama_dokter" value="{{ old('nama_dokter', $dokter->nama_dokter) }}"
                               placeholder="Masukkan nama lengkap dokter">
                        @error('nama_dokter')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="jabatan_dokter" class="form-label" style="color: #3fbbc0; font-weight: 600;">Jabatan</label>
                        <input type="text" class="form-control @error('jabatan_dokter') is-invalid @enderror" 
                               id="jabatan_dokter" name="jabatan_dokter" value="{{ old('jabatan_dokter', $dokter->jabatan_dokter) }}"
                               placeholder="Contoh: Dokter Spesialis, Dokter Umum">
                        @error('jabatan_dokter')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="poli_id" class="form-label" style="color: #3fbbc0; font-weight: 600;">Poli</label>
                        <select class="form-select @error('poli_id') is-invalid @enderror" id="poli_id" name="poli_id">
                            <option value="">Pilih Poli</option>
                            @foreach($polis as $poli)
                                <option value="{{ $poli->id }}" 
                                    {{ (old('poli_id', $dokter->poli_id) == $poli->id) ? 'selected' : '' }}>
                                    {{ $poli->nama_poli }}
                                </option>
                            @endforeach
                        </select>
                        @error('poli_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            
            <div class="d-flex justify-content-between align-items-center">
                <a href="{{ route('dokter.index') }}" class="btn btn-secondary">
                    <i class="fas fa-arrow-left me-1"></i> Kembali
                </a>
                <button type="submit" class="btn text-white" style="background-color: #3fbbc0;">
                    <i class="fas fa-save me-1"></i> Simpan
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    document.getElementById('nip').addEventListener('input', function(e) {
        this.value = this.value.replace(/[^0-9]/g, '');
    });
</script>
@endsection