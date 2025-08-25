@extends('layoutdokter')
@section('konten')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-4 border-bottom">
  <h1 class="h3">Resep Obat</h1>
</div>

<div class="container mt-3">

  <!-- OBAT PADAT -->
  <div class="card shadow-sm mb-4">
    <div class="card-header bg-primary text-white fw-bold">
      Obat Padat
    </div>
    <div class="card-body p-0">
      <table class="table table-bordered table-hover mb-0 text-center align-middle">
        <thead class="table-light">
          <tr>
            <th>Antibiotik</th>
            <th>Biasa</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <div class="form-check text-start ms-2">
                <input class="form-check-input" type="checkbox" name="obat_padat_antibiotik[]" value="Amoxicillin">
                <label class="form-check-label">Amoxicillin</label>
              </div>
            </td>
            <td>
              <div class="form-check text-start ms-2">
                <input class="form-check-input" type="checkbox" name="obat_padat_biasa[]" value="Paracetamol">
                <label class="form-check-label">Paracetamol</label>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="form-check text-start ms-2">
                <input class="form-check-input" type="checkbox" name="obat_padat_antibiotik[]" value="Cefadroxil">
                <label class="form-check-label">Cefadroxil</label>
              </div>
            </td>
            <td>
              <div class="form-check text-start ms-2">
                <input class="form-check-input" type="checkbox" name="obat_padat_biasa[]" value="Ibuprofen">
                <label class="form-check-label">Ibuprofen</label>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="form-check text-start ms-2">
                <input class="form-check-input" type="checkbox" name="obat_padat_antibiotik[]" value="Ciprofloxacin">
                <label class="form-check-label">Ciprofloxacin</label>
              </div>
            </td>
            <td>
              <div class="form-check text-start ms-2">
                <input class="form-check-input" type="checkbox" name="obat_padat_biasa[]" value="Vitamin C">
                <label class="form-check-label">Vitamin C</label>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <!-- OBAT CAIR -->
  <div class="card shadow-sm mb-4">
    <div class="card-header bg-success text-white fw-bold">
      Obat Cair
    </div>
    <div class="card-body p-0">
      <table class="table table-bordered table-hover mb-0 text-center align-middle">
        <thead class="table-light">
          <tr>
            <th>Antibiotik</th>
            <th>Biasa</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <div class="form-check text-start ms-2">
                <input class="form-check-input" type="checkbox" name="obat_cair_antibiotik[]" value="Sirup Amoxicillin">
                <label class="form-check-label">Sirup Amoxicillin</label>
              </div>
            </td>
            <td>
              <div class="form-check text-start ms-2">
                <input class="form-check-input" type="checkbox" name="obat_cair_biasa[]" value="Sirup Paracetamol">
                <label class="form-check-label">Sirup Paracetamol</label>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="form-check text-start ms-2">
                <input class="form-check-input" type="checkbox" name="obat_cair_antibiotik[]" value="Sirup Cefadroxil">
                <label class="form-check-label">Sirup Cefadroxil</label>
              </div>
            </td>
            <td>
              <div class="form-check text-start ms-2">
                <input class="form-check-input" type="checkbox" name="obat_cair_biasa[]" value="Sirup Vitamin C">
                <label class="form-check-label">Sirup Vitamin C</label>
              </div>
            </td>
          </tr>
          <tr>
            <td></td>
            <td>
              <div class="form-check text-start ms-2">
                <input class="form-check-input" type="checkbox" name="obat_cair_biasa[]" value="Obat Batuk Cair">
                <label class="form-check-label">Obat Batuk Cair</label>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <!-- OBAT RACIK -->
  <div class="card shadow-sm mb-4">
    <div class="card-header bg-warning fw-bold">
      Obat Racik
    </div>
    <div class="card-body">
      <textarea class="form-control" name="obat_racik" rows="2" placeholder="Tulis komposisi racikan..."></textarea>
    </div>
  </div>

  <!-- OBAT REKOMENDASI -->
  <div class="card shadow-sm mb-4">
    <div class="card-header bg-info text-white fw-bold">
      Obat yang Direkomendasikan Beli Sendiri
    </div>
    <div class="card-body">
      <textarea class="form-control" name="obat_rekomendasi" rows="2" placeholder="Tulis rekomendasi obat..."></textarea>
    </div>
  </div>

  <!-- BUTTON -->
  <div class="text-end">
    <button type="submit" class="btn btn-primary px-4">
      <i class="bi bi-save"></i> Simpan Resep
    </button>
  </div>

</div>


@endsection