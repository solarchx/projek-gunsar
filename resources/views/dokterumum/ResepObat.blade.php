@section('konten')
@extends('layout')
 <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-5 border-bottom">
                    <h1 class="h2">Resep Obat</h1>
                </div>
<div class="container mt-4">

    <!-- OBAT PADAT -->
    <h5>Obat Padat</h5>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Antibiotik</th>
                <th>Biasa</th>
            </tr>
        </thead>
        <tbody>
            @php
                $padat_antibiotik = ['Amoxicillin', 'Cefadroxil', 'Ciprofloxacin'];
                $padat_biasa = ['Paracetamol', 'Ibuprofen', 'Vitamin C'];
                $maxRows = max(count($padat_antibiotik), count($padat_biasa));
            @endphp
            @for($i = 0; $i < $maxRows; $i++)
                <tr>
                    <td>
                        @if(isset($padat_antibiotik[$i]))
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="obat_padat_antibiotik[]" value="{{ $padat_antibiotik[$i] }}">
                                <label class="form-check-label">{{ $padat_antibiotik[$i] }}</label>
                            </div>
                        @endif
                    </td>
                    <td>
                        @if(isset($padat_biasa[$i]))
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="obat_padat_biasa[]" value="{{ $padat_biasa[$i] }}">
                                <label class="form-check-label">{{ $padat_biasa[$i] }}</label>
                            </div>
                        @endif
                    </td>
                </tr>
            @endfor
        </tbody>
    </table>

    <!-- OBAT CAIR -->
    <h5>Obat Cair</h5>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Antibiotik</th>
                <th>Biasa</th>
            </tr>
        </thead>
        <tbody>
            @php
                $cair_antibiotik = ['Sirup Amoxicillin', 'Sirup Cefadroxil'];
                $cair_biasa = ['Sirup Paracetamol', 'Sirup Vitamin C', 'Obat Batuk Cair'];
                $maxRowsCair = max(count($cair_antibiotik), count($cair_biasa));
            @endphp
            @for($i = 0; $i < $maxRowsCair; $i++)
                <tr>
                    <td>
                        @if(isset($cair_antibiotik[$i]))
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="obat_cair_antibiotik[]" value="{{ $cair_antibiotik[$i] }}">
                                <label class="form-check-label">{{ $cair_antibiotik[$i] }}</label>
                            </div>
                        @endif
                    </td>
                    <td>
                        @if(isset($cair_biasa[$i]))
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="obat_cair_biasa[]" value="{{ $cair_biasa[$i] }}">
                                <label class="form-check-label">{{ $cair_biasa[$i] }}</label>
                            </div>
                        @endif
                    </td>
                </tr>
            @endfor
        </tbody>
    </table>

    <!-- OBAT RACIK -->
    <div class="mb-3">
        <label class="form-label fw-bold">Obat Racik</label>
        <textarea class="form-control" name="obat_racik" rows="2" placeholder="Tulis komposisi racikan..."></textarea>
    </div>

    <!-- OBAT REKOMENDASI -->
    <div class="mb-3">
        <label class="form-label fw-bold">Obat yang Direkomendasikan Beli Sendiri</label>
        <textarea class="form-control" name="obat_rekomendasi" rows="2" placeholder="Tulis rekomendasi obat..."></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Simpan Resep</button>
</div>

@endsection