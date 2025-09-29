@extends('layoutdokter')

@section('konten')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-5 border-bottom">
    <h1 class="h2" style="color: #3fbbc0;">Detail Screening</h1>
</div>

<div class="card shadow border-0" style="border-top: 3px solid #3fbbc0;">
    <div class="card-header py-3" style="background: linear-gradient(135deg, #3fbbc0 0%, #38a9ad 100%); color: white;">
        <h5 class="mb-0"><i class="fas fa-stethoscope me-2"></i>Informasi Screening Pasien</h5>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <table class="table table-borderless">
                    <tr>
                        <th width="40%" style="color: #3fbbc0;">NIK Pasien</th>
                        <td>{{ $screening->NIK_pasien }}</td>
                    </tr>
                    <tr>
                        <th style="color: #3fbbc0;">Tinggi Badan</th>
                        <td>{{ $screening->tinggi_badan }} cm</td>
                    </tr>
                    <tr>
                        <th style="color: #3fbbc0;">Berat Badan</th>
                        <td>{{ $screening->berat_badan }} kg</td>
                    </tr>
                </table>
            </div>
            <div class="col-md-6">
                <table class="table table-borderless">
                    <tr>
                        <th width="40%" style="color: #3fbbc0;">Suhu Badan</th>
                        <td>{{ $screening->suhu_badan }}°C</td>
                    </tr>
                    <tr>
                        <th style="color: #3fbbc0;">Tekanan Darah</th>
                        <td>{{ $screening->tekanan_darah }}</td>
                    </tr>
                    <tr>
                        <th style="color: #3fbbc0;">Tanggal Screening</th>
                        <td>{{ \Carbon\Carbon::parse($screening->tanggal_screening)->format('d/m/Y') }}</td>
                    </tr>
                </table>
            </div>
        </div>
        
        <div class="d-flex gap-2 mt-4">
            <a href="{{ route('screening.edit', $screening->id) }}" class="btn text-white" style="background-color: #6c757d;">
                <i class="fas fa-edit me-1"></i> Edit
            </a>
            <a href="{{ route('screening.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left me-1"></i> Kembali
            </a>
        </div>
    </div>
</div>
@endsection