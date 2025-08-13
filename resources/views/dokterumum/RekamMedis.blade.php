@extends('layout')

@section('konten')
 <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-5 border-bottom">
                    <h1 class="h2">Rekam Medis Pasien</h1>
                </div>
<div class="container mt-4">
    

    <!-- Kolom Pencarian -->
    <div class="mb-3 text-end">
        <input type="text" id="searchNIK" class="form-control w-25 d-inline-block" placeholder="Cari berdasarkan NIK..." maxlength="16">
    </div>

    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped align-middle" style="font-size: 1.1rem;">
            <thead style="background-color: teal; color: white;" class="text-center">
                <tr>
                    <th>No</th>
                    <th>NIK</th>
                    <th>Nama Pasien</th>
                    <th>Poli</th>
                    <th>Penyakit</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody id="riwayatTable">
                <tr>
                    <td class="text-center">1</td>
                    <td>3212345678901234</td>
                    <td>Ahmad Fulan</td>
                    <td>Poli Umum</td>
                    <td>Demam</td>
                    <td class="text-center">
                        <button class="btn btn-sm text-white" style="background-color: teal;" data-bs-toggle="modal" data-bs-target="#detailModal1">
                            Lihat Selengkapnya
                        </button>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">2</td>
                    <td>3212345678905678</td>
                    <td>Siti Aisyah</td>
                    <td>Poli Gigi</td>
                    <td>Sakit Gigi</td>
                    <td class="text-center">
                        <button class="btn btn-sm text-white" style="background-color: teal;" data-bs-toggle="modal" data-bs-target="#detailModal2">
                            Lihat Selengkapnya
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- Modal Detail Pasien -->
<div class="modal fade" id="detailModal1" tabindex="-1" aria-labelledby="detailModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header text-white" style="background-color: teal;">
                <h5 class="modal-title" id="detailModalLabel1">Detail Pasien - Ahmad Fulan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <p><strong>Nama Dokter:</strong> dr. Andi</p>
                <p><strong>Poli:</strong> Poli Umum</p>
                <p><strong>Nama Pasien:</strong> Ahmad Fulan</p>
                <p><strong>Tinggi Badan:</strong> 170 cm</p>
                <p><strong>Berat Badan:</strong> 65 kg</p>
                <p><strong>Suhu:</strong> 37.2°C</p>
                <p><strong>Tensi:</strong> 120/80 mmHg</p>
                <p><strong>Alergi:</strong> Tidak</p>
                <p><strong>Penyakit:</strong> Demam</p>
                <p><strong>Keluhan:</strong> Badan pegal dan panas</p>
                <p><strong>Rujukan:</strong> RSUD Cirebon</p> <!-- Tambahan baru -->
            </div>
        </div>
    </div>
</div>


<script>
    document.getElementById("searchNIK").addEventListener("keyup", function () {
        let input = this.value.toLowerCase();
        let rows = document.querySelectorAll("#riwayatTable tr");

        rows.forEach(function (row) {
            let nik = row.cells[1].textContent.toLowerCase();
            if (nik.includes(input) || input === "") {
                row.style.display = "";
            } else {
                row.style.display = "none";
            }
        });
    });
</script>
@endsection