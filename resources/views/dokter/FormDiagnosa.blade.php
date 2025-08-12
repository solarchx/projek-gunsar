@extends('layout')

@section('konten')
<div class="container">
        <div class="row">
            <!-- Lebar diperbesar, tidak center -->
            <div class="col-lg-15 col-md-12">
                <div class="card shadow-sm border-0">
                    <div class="card-header text-white" style="background-color: teal;">
                        <h4 class="mb-0">Form Diagnosa</h4>
                    </div>
                    <div class="card-body" style="background-color: #ffffff;">
                        <form>
                            <div class="mb-3">
                                <label class="form-label">Nama Pasien</label>
                                <input type="text" class="form-control" placeholder="Masukkan nama pasien">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Umur Pasien</label>
                                <input type="number" class="form-control" placeholder="Masukkan umur pasien">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Berat Badan (kg)</label>
                                <input type="number" class="form-control" placeholder="Masukkan berat badan">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Tinggi Badan (cm)</label>
                                <input type="number" class="form-control" placeholder="Masukkan tinggi badan">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Suhu Badan (cc)</label>
                                <input type="text" class="form-control" placeholder="Masukkan suhu badan">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Tensi Darah</label>
                                <input type="text" class="form-control" placeholder="Masukkan tensi darah">
                            </div>

                            <div class="mb-3"><label class="form-label">Alergi</label>
                                <div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="alergi" id="alergiYa" value="ya">
                                        <label class="form-check-label" for="alergiYa">Ya</label>
                                    </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="alergi" id="alergiTidak" value="tidak" checked>
                                <label class="form-check-label" for="alergiTidak">Tidak</label>
                            </div>
                                 </div>
                            </div>

<div class="mb-3" id="keteranganAlergi" style="display: none;">
    <label for="ketAlergi" class="form-label">Keterangan Alergi</label>
    <textarea class="form-control" id="ketAlergi" name="ket_alergi" rows="2" placeholder="Tuliskan keterangan alergi..."></textarea>
</div>

<script>
    document.getElementById('alergiYa').addEventListener('change', function() {
        document.getElementById('keteranganAlergi').style.display = 'block';
    });

    document.getElementById('alergiTidak').addEventListener('change', function() {
        document.getElementById('keteranganAlergi').style.display = 'none';
    });
</script>


                            <div class="mb-3">
                                <label class="form-label">Penyakit</label>
                                <input type="text" class="form-control" placeholder="Masukkan penyakit pasien">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Keluhan</label>
                                <textarea class="form-control" rows="3" placeholder="Tuliskan keluhan pasien"></textarea>
                            </div>

                            <div>
                                <button type="submit" class="btn text-white px-4" style="background-color: teal;">
                                    Simpan Diagnosa
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection