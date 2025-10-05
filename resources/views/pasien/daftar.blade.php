<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran Pasien</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #3fbbc0;
            --primary-dark: #38a9ad;
            --primary-light: #e1f5f6;
            --light-bg: #f8f9fa;
        }
        
        body {
            background: linear-gradient(135deg, #f0fdfe 0%, #e1f5f6 100%);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            min-height: 100vh;
            padding: 20px 0;
        }
        
        .registration-container {
            max-width: 800px;
            margin: 0 auto;
        }
        
        .page-header {
            text-align: center;
            margin-bottom: 2rem;
            padding: 1.5rem;
            border-radius: 15px;
            background: white;
            box-shadow: 0 5px 15px rgba(63, 187, 192, 0.1);
        }
        
        .page-title {
            color: var(--primary-color);
            font-weight: 700;
            margin-bottom: 0.5rem;
        }
        
        .page-subtitle {
            color: #666;
            font-size: 1.1rem;
        }
        
        .registration-card {
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
            border: none;
            overflow: hidden;
            margin-bottom: 2rem;
        }
        
        .card-header {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-dark) 100%);
            padding: 1.5rem;
            border-bottom: none;
        }
        
        .card-header h3 {
            margin: 0;
            font-weight: 600;
        }
        
        .card-body {
            padding: 2rem;
        }
        
        .form-label {
            color: var(--primary-color);
            font-weight: 600;
            margin-bottom: 0.5rem;
        }
        
        .required::after {
            content: " *";
            color: #ff4757;
        }
        
        .form-control, .form-select {
            border-radius: 8px;
            padding: 0.75rem 1rem;
            border: 1px solid #ddd;
            transition: all 0.3s;
        }
        
        .form-control:focus, .form-select:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.25rem rgba(63, 187, 192, 0.25);
        }
        
        .input-group-text {
            background-color: var(--primary-light);
            border: 1px solid #ddd;
            color: var(--primary-color);
        }
        
        .btn-primary {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-dark) 100%);
            border: none;
            border-radius: 8px;
            padding: 0.75rem 2rem;
            font-weight: 600;
            transition: all 0.3s;
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(63, 187, 192, 0.4);
        }
        
        .btn-outline-primary {
            color: var(--primary-color);
            border-color: var(--primary-color);
            border-radius: 8px;
            padding: 0.75rem 2rem;
            font-weight: 600;
            transition: all 0.3s;
        }
        
        .btn-outline-primary:hover {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            transform: translateY(-2px);
        }
        
        .info-box {
            background-color: var(--primary-light);
            border-left: 4px solid var(--primary-color);
            border-radius: 8px;
            padding: 1.5rem;
            margin-top: 2rem;
        }
        
        .steps {
            display: flex;
            justify-content: space-between;
            margin-bottom: 2rem;
            position: relative;
        }
        
        .steps::before {
            content: '';
            position: absolute;
            top: 20px;
            left: 0;
            right: 0;
            height: 2px;
            background-color: #e0e0e0;
            z-index: 1;
        }
        
        .step {
            text-align: center;
            position: relative;
            z-index: 2;
            flex: 1;
        }
        
        .step-number {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: white;
            border: 2px solid #e0e0e0;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 10px;
            font-weight: bold;
            color: #999;
        }
        
        .step.active .step-number {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            color: white;
        }
        
        .step-text {
            font-size: 0.9rem;
            color: #666;
        }
        
        .step.active .step-text {
            color: var(--primary-color);
            font-weight: 600;
        }
        
        .contact-info {
            text-align: center;
            padding: 1.5rem;
            background: white;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(63, 187, 192, 0.1);
        }
        
        @media (max-width: 768px) {
            .steps {
                flex-direction: column;
                gap: 1rem;
            }
            
            .steps::before {
                display: none;
            }
            
            .step {
                display: flex;
                align-items: center;
                text-align: left;
            }
            
            .step-number {
                margin: 0 15px 0 0;
                flex-shrink: 0;
            }
        }
    </style>
</head>
<body>
    <div class="registration-container">
        <div class="page-header">
            <h1 class="page-title"><i class="fas fa-hospital-user me-2"></i>Form Pendaftaran Pasien</h1>
            <p class="page-subtitle">Silakan lengkapi data diri Anda dengan benar dan lengkap</p>
        </div>
        
        <div class="card registration-card">
            <div class="card-header text-white">
                <h3><i class="fas fa-user-circle me-2"></i>Data Pribadi Pasien</h3>
            </div>
            <div class="card-body">
                <form id="registrationForm">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="nama" class="form-label required">Nama Lengkap</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama lengkap" required>
                            </div>
                            <div class="form-text">Isi sesuai dengan nama di KTP</div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="nik" class="form-label required">NIK</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                                <input type="text" class="form-control" id="nik" name="nik" placeholder="Masukkan NIK" maxlength="16" required>
                            </div>
                            <div class="form-text">Nomor Induk Kependudukan 16 digit</div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="tanggal_lahir" class="form-label required">Tanggal Lahir</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="jenis_kelamin" class="form-label required">Jenis Kelamin</label>
                            <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" required>
                                <option value="">Pilih Jenis Kelamin</option>
                                <option value="L">Laki-laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="alamat" class="form-label required">Alamat Lengkap</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-home"></i></span>
                            <textarea class="form-control" id="alamat" name="alamat" rows="3" placeholder="Masukkan alamat lengkap (jalan, RT/RW, kelurahan, kecamatan)" required></textarea>
                        </div>
                    </div>
                    
                    <div class="d-flex justify-content-between mt-4">
                        <button type="reset" class="btn btn-outline-primary">
                            <i class="fas fa-redo me-1"></i> Reset Form
                        </button>
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-paper-plane me-1"></i> Simpan & Lanjutkan
                        </button>
                    </div>
                </form>
                
                <div class="info-box">
                    <h5><i class="fas fa-info-circle me-2"></i>Informasi Penting</h5>
                    <p class="mb-0">Pastikan data yang Anda isi sudah benar dan lengkap. Data yang sudah disimpan tidak dapat diubah kecuali melalui petugas administrasi.</p>
                </div>
            </div>
        </div>
        
        <div class="contact-info">
            <h5 class="mb-3" style="color: var(--primary-color);">Butuh Bantuan?</h5>
            <p class="mb-2"><i class="fas fa-phone me-2"></i>Hubungi kami: <strong>+62 21 1234 5678</strong></p>
            <p class="mb-0"><i class="fas fa-envelope me-2"></i>Email: <strong>info@kliniksehat.com</strong></p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Validasi NIK hanya angka
        document.getElementById('nik').addEventListener('input', function(e) {
            this.value = this.value.replace(/[^0-9]/g, '');
        });
        
        // Validasi nomor telepon hanya angka
        document.getElementById('no_telepon').addEventListener('input', function(e) {
            this.value = this.value.replace(/[^0-9+]/g, '');
        });
        
        // Form submission
        document.getElementById('registrationForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Validasi sederhana
            const nama = document.getElementById('nama').value;
            const nik = document.getElementById('nik').value;
            const alamat = document.getElementById('alamat').value;
            const tanggalLahir = document.getElementById('tanggal_lahir').value;
            const jenisKelamin = document.getElementById('jenis_kelamin').value;
            const provinsi = document.getElementById('provinsi').value;
            const kota = document.getElementById('kota').value;
            const noTelepon = document.getElementById('no_telepon').value;
            
            if (!nama || !nik || !alamat || !tanggalLahir || !jenisKelamin || !provinsi || !kota || !noTelepon) {
                alert('Harap lengkapi semua field yang wajib diisi!');
                return;
            }
            
            if (nik.length !== 16) {
                alert('NIK harus terdiri dari 16 digit angka!');
                return;
            }
            
            // Jika validasi berhasil
            alert('Pendaftaran berhasil! Data Anda telah tersimpan.\n\nNama: ' + nama + '\nNIK: ' + nik + '\nAlamat: ' + alamat);
            // Di sini biasanya akan ada kode untuk mengirim data ke server
            // this.submit(); // Uncomment untuk mengaktifkan pengiriman form
        });
        
        // Set tanggal maksimum untuk tanggal lahir (hari ini)
        document.getElementById('tanggal_lahir').max = new Date().toISOString().split("T")[0];
    </script>
</body>
</html>