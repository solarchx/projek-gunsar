<x-guest-layout>
<head>
    <style>
        body {
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            font-family: "Segoe UI", sans-serif;
        }
        .container { max-width: 720px; }

        h2.title {
            font-weight: 800; font-size: 2rem; text-align: center;
            margin-bottom: 1.5rem; color: #007bff;
        }
        .card-custom {
            background: #ffffff; border-radius: 1rem;
            box-shadow: 0 8px 20px rgba(0,0,0,0.15); padding: 1.5rem;
        }
        .form-label { font-weight: 600; color: #333; }
        .btn-custom { font-weight: 600; border-radius: 0.75rem; padding: .6rem 1rem; transition: all .3s; }
        .btn-custom:hover { transform: scale(1.05); box-shadow: 0 4px 10px rgba(0,0,0,.2); }

        /* Tombol Cari Peserta biru */
        .btn-cari {
            background: linear-gradient(90deg,#007bff,#2575fc);
            color: #fff; border: none; font-weight: 700;
        }
        .btn-cari:hover {
            background: linear-gradient(90deg,#2575fc,#007bff);
            color: #fff;
        }

        .result-box { border-radius: .75rem; overflow: hidden; box-shadow: 0 4px 10px rgba(0,0,0,.1); }
        .result-box .header { background: #2575fc; color: #fff; font-weight: 600; padding: .5rem 1rem; }
        .result-box .body { background: #f8f9fa; padding: .75rem 1rem; color: #333; font-size: .9rem; }

        .info-card { border-radius: .75rem; box-shadow: 0 4px 10px rgba(0,0,0,.1); }

        .btn-next { background: linear-gradient(90deg,#28a745,#20c997); color: #fff; border: 2px solid #1e9e62; }
        .btn-next:hover { background: linear-gradient(90deg,#20c997,#28a745); }
        .btn-home { background: linear-gradient(90deg,#007bff,#6610f2); color: #fff; border: 2px solid #4b0ea0; }
        .btn-home:hover { background: linear-gradient(90deg,#6610f2,#007bff); }

        p.note { text-align: center; margin-top: 1rem; font-size: .9rem; color: #fff; font-weight: 500; }

        /* Tampilan display */
        .display-box {
            border: 2px solid #2575fc; background: #f9fbff; color: #333;
            border-radius: 0.75rem; padding: .55rem .85rem; font-weight: 600;
            min-height: 42px; display: flex; align-items: center;
        }
        .display-muted { font-weight: 500; color: #555; }
    </style>
</head>

<body>
<div class="container my-5">
    <!-- Judul -->
    <h2 class="title">Skrining Kesehatan</h2>

    <!-- Card Form -->
    <div class="card-custom">
        <form onsubmit="return false;">
            <!-- NIK -->
            <div class="mb-3">
                <label class="form-label">NIK</label>
                <div id="nikDisplay" class="display-box">3210098765432100</div>
            </div>

            <!-- Tinggi & Berat Badan -->
            <div class="row mb-3">
                <div class="col">
                    <label class="form-label">Tinggi Badan</label>
                    <div id="tinggiDisplay" class="display-box">158 cm</div>
                </div>
                <div class="col">
                    <label class="form-label">Berat Badan</label>
                    <div id="beratDisplay" class="display-box">46 kg</div>
                </div>
            </div>

            <!-- Suhu & Tekanan Darah -->
            <div class="row mb-3">
                <div class="col">
                    <label class="form-label">Suhu Badan</label>
                    <div id="suhuDisplay" class="display-box">36.7 °C</div>
                </div>
                <div class="col">
                    <label class="form-label">Tekanan Darah</label>
                    <div id="tekananDisplay" class="display-box">120/80 mmHg</div>
                </div>
            </div>

            <!-- Tanggal Screening -->
            <div class="mb-3">
                <label class="form-label">Tanggal Screening</label>
                <div id="tglScreeningDisplay" class="display-box">28/08/2025</div>
            </div>

            <!-- Tombol Cari Peserta -->
            <div class="d-grid">
                <button type="button" class="btn btn-cari btn-custom">
                    🔍 Cari Peserta
                </button>
            </div>
        </form>

        <!-- Kotak Riwayat Penyakit -->
        <div class="result-box mt-4">
            <div class="header">Riwayat Penyakit</div>
            <div class="body">
                - Diabetes Mellitus <br>
                - Hipertensi <br>
                - Penyakit Jantung <br>
                - Penyakit Ginjal
            </div>
        </div>

        <!-- Info Sekunder -->
        <div class="card info-card mt-3 border">
            <div class="card-header fw-bold bg-light">Info Skrining</div>
            <div class="card-body p-0">
                <table class="table table-sm mb-0">
                    <tr><td class="fw-semibold">NIK</td><td class="display-muted">3210098765432100</td></tr>
                    <tr><td class="fw-semibold">Nama</td><td class="display-muted">Aan</td></tr>
                    <tr><td class="fw-semibold">Tinggi Badan</td><td class="display-muted">158 cm</td></tr>
                    <tr><td class="fw-semibold">Berat Badan</td><td class="display-muted">46 kg</td></tr>
                    <tr><td class="fw-semibold">Suhu Badan</td><td class="display-muted">36.7 °C</td></tr>
                    <tr><td class="fw-semibold">Tekanan Darah</td><td class="display-muted">120/80 mmHg</td></tr>
                    <tr><td class="fw-semibold">Tanggal Screening</td><td class="display-muted">28/08/2025</td></tr>
                    <tr><td class="fw-semibold">Faskes</td><td class="display-muted">PUSKESMAS Gunung Sari</td></tr>
                </table>
            </div>
            <div class="card-footer small text-danger">
                Skrining selanjutnya hanya dapat dilakukan mulai tanggal 01/01/2026
            </div>
        </div>

        <!-- Tombol -->
        <div class="d-flex gap-2 mt-3">
            <a href="#" class="btn btn-home btn-custom">Halaman Utama</a>
            <a href="#" class="btn btn-next btn-custom">Lanjutkan →</a>
        </div>
    </div>

    <!-- Catatan bawah -->
    <p class="note">
        Bagi peserta usia ≥ 15 tahun diharapkan melakukan skrining riwayat kesehatan
        untuk mengetahui tingkat risiko terhadap penyakit Diabetes, Hipertensi, Jantung, dan Ginjal Kronis
    </p>
</div>
</body>
</x-guest-layout>
