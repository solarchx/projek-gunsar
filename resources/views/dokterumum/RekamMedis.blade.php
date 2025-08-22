@extends('layoutdokter')

@section('konten')
<div class="container mt-4">
  <!-- Kolom Pencarian -->
  <div class="mb-3 text-end">
    <input type="text" id="searchNIK" 
           class="form-control w-25 d-inline-block shadow-sm rounded-pill px-3" 
           placeholder="🔍 Cari berdasarkan NIK..." maxlength="16">
  </div>

  <div class="card shadow-lg border-0 rounded-3">
    <div class="card-body p-0">
      <div class="table-responsive">
        <table class="table table-hover align-middle mb-0">
          <thead class="text-white text-center" style="background: linear-gradient(90deg, teal, #009688);">
            <tr>
              <th class="py-3">No</th>
              <th>NIK</th>
              <th>Nama Pasien</th>
              <th>Poli</th>
              <th>Penyakit</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody id="riwayatTable">
            <tr>
              <td class="text-center fw-bold">1</td>
              <td class="text-muted">3212345678905678</td>
              <td class="fw-semibold">Siti Aisyah</td>
              <td><span class="badge bg-info text-dark px-3 py-2 rounded-pill">Poli Gigi</span></td>
              <td><span class="text-danger">Sakit Gigi</span></td>
              <td class="text-center">
                <button class="btn btn-sm text-white shadow-sm" style="background-color: teal;" 
                        data-bs-toggle="modal" data-bs-target="#detailModal2">
                  🩺 Screening
                </button>
                <a href="/dokterumum/RekamMedisdetail" 
                   class="btn btn-sm btn-outline-primary ms-1 shadow-sm">
                  📄 Detail
                </a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<!-- Modal Screening Pasien -->
<div class="modal fade" id="detailModal2" tabindex="-1" aria-labelledby="detailModalLabel2" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content shadow-lg border-0 rounded-3">
      <div class="modal-header text-white" style="background: linear-gradient(90deg, teal, #009688);">
        <h5 class="modal-title">Screening Awal - Ahmad Fulan</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <div class="row mb-2">
          <div class="col-md-6"><strong>Nama Dokter:</strong> dr. Andi</div>
          <div class="col-md-6"><strong>Poli:</strong> Poli Umum</div>
        </div>
        <div class="row mb-2">
          <div class="col-md-6"><strong>Tinggi Badan:</strong> 170 cm</div>
          <div class="col-md-6"><strong>Berat Badan:</strong> 65 kg</div>
        </div>
        <div class="row mb-2">
          <div class="col-md-6"><strong>Suhu:</strong> 37.2°C</div>
          <div class="col-md-6"><strong>Tensi:</strong> 120/80 mmHg</div>
        </div>
        <div class="mb-2"><strong>Alergi:</strong> Tidak</div>
        <div class="mb-2"><strong>Keluhan:</strong> Badan pegal dan panas</div>
        <div><strong>Rujukan:</strong> RSUD Cirebon</div>
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