<x-guest-layout>
<head>
    <style>
        body {
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            font-family: "Segoe UI", sans-serif;
        }

        .container {
            max-width: 720px;
        }

        h2.title {
            font-weight: 800;
            font-size: 2rem;
            text-align: center;
            margin-bottom: 1.5rem;
            color: #007bff; /* Biru */
        }

        .card-custom {
            background: #ffffff;
            border-radius: 1rem;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
            padding: 1.5rem;
        }

        .form-label {
            font-weight: 600;
            color: #333;
        }

        .form-control {
            border: 2px solid #2575fc;
            border-radius: 0.75rem;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: #6a11cb;
            box-shadow: 0 0 10px rgba(106, 17, 203, 0.3);
        }

        .btn-custom {
            font-weight: 600;
            border-radius: 0.75rem;
            padding: 0.6rem 1rem;
            transition: all 0.3s ease;
        }

        .btn-custom:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .result-box {
            border-radius: 0.75rem;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .result-box .header {
            background: #2575fc;
            color: white;
            font-weight: 600;
            padding: 0.5rem 1rem;
        }

        .result-box .body {
            background: #f8f9fa;
            padding: 0.75rem 1rem;
            color: #333;
            font-size: 0.9rem;
        }

        .info-card {
            border-radius: 0.75rem;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .btn-next {
            background: linear-gradient(90deg, #28a745, #20c997);
            color: white;
            border: 2px solid #1e9e62;
        }

        .btn-next:hover {
            background: linear-gradient(90deg, #20c997, #28a745);
        }

        .btn-home {
            background: linear-gradient(90deg, #007bff, #6610f2);
            color: white;
            border: 2px solid #4b0ea0;
        }

        .btn-home:hover {
            background: linear-gradient(90deg, #6610f2, #007bff);
        }

        p.note {
            text-align: center;
            margin-top: 1rem;
            font-size: 0.9rem;
            color: white;
            font-weight: 500;
        }

        .captcha-box {
            border: 2px solid #2575fc;
            border-radius: 0.5rem;
            background: #e9f2ff;
            padding: 0.5rem 1rem;
            font-weight: bold;
            color: #2575fc;
            letter-spacing: 3px;
            font-size: 1.2rem;
            user-select: none;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
    </style>
</head>

<body>
<div class="container my-5">
    <!-- Judul -->
    <h2 class="title">Skrining Kesehatan</h2>

    <!-- Card Form -->
    <div class="card-custom">
        <form>
            <div class="mb-3">
                <label for="noKartu" class="form-label">No Kartu</label>
                <input type="text" class="form-control" id="noKartu">
            </div>

            <div class="mb-3">
                <label for="tglLahir" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tglLahir">
            </div>

            <div class="mb-3">
                <label for="captcha" class="form-label">Captcha</label>
                <div class="d-flex align-items-center gap-2">
                    <input type="text" class="form-control" id="captchaInput" placeholder="Masukkan kode">
                    <div id="captchaCode" class="captcha-box">0000</div>
                    <button type="button" onclick="refreshCaptcha()" class="btn btn-outline-secondary rounded border fw-bold">
                        ↻
                    </button>
                </div>
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-primary btn-custom">Cari Peserta</button>
            </div>
        </form>

        <!-- Kotak Hasil -->
        <div class="result-box mt-4">
            <div class="header">Risiko Rendah Diabetes, Hipertensi, Jantung, Ginjal</div>
            <div class="body">Jaga pola hidup sehat, lakukan latihan fisik rutin minimal 30 menit /hari.</div>
        </div>

        <!-- Info Sekunder -->
        <div class="card info-card mt-3 border">
            <div class="card-header fw-bold bg-light">Info Skrining</div>
            <div class="card-body p-0">
                <table class="table table-sm mb-0">
                    <tr><td class="fw-semibold">No Kartu</td><td>0002261101274</td></tr>
                    <tr><td class="fw-semibold">Nama</td><td>SUSMA H D</td></tr>
                    <tr><td class="fw-semibold">Tgl Skrining</td><td>20/01/2023</td></tr>
                    <tr><td class="fw-semibold">Faskes</td><td>PUSKESMAS TUMBANG LAPAN</td></tr>
                </table>
            </div>
            <div class="card-footer small text-danger">
                Skrining selanjutnya hanya dapat dilakukan mulai tanggal 01/01/2024
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

<script>
    // Fungsi untuk generate captcha random
    function generateCaptcha() {
        let chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        let captcha = "";
        for (let i = 0; i < 5; i++) {
            captcha += chars.charAt(Math.floor(Math.random() * chars.length));
        }
        document.getElementById("captchaCode").textContent = captcha;
    }

    function refreshCaptcha() {
        generateCaptcha();
    }

    // Generate captcha pertama kali saat halaman load
    window.onload = generateCaptcha;
</script>
</body>
</x-guest-layout>
