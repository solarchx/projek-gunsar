@extends('layoutdokter')
@section('konten')

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Resep Obat - Medical System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <style>
        :root {
            --teal-primary: #008080;
            --teal-light: #4da6a6;
            --teal-dark: #006666;
            --teal-bg: #e6f2f2;
            --teal-border: #99cccc;
        }
        
        body {
            background: linear-gradient(135deg, var(--teal-bg) 0%, #f0f8f8 100%);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            min-height: 100vh;
            padding: 0;
            margin: 0;
        }
        
        .main-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        
        .header {
            background: linear-gradient(135deg, var(--teal-primary) 0%, var(--teal-dark) 100%);
            color: white;
            padding: 25px 30px;
            border-radius: 12px 12px 0 0;
            margin-bottom: 20px;
            box-shadow: 0 5px 15px rgba(0, 80, 80, 0.2);
        }
        
        .card {
            border: none;
            border-radius: 10px;
            overflow: hidden;
            transition: transform 0.3s, box-shadow 0.3s;
            margin-bottom: 25px;
            box-shadow: 0 4px 12px rgba(0, 80, 80, 0.1);
            background-color: rgba(255, 255, 255, 0.95);
        }
        
        .card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0, 80, 80, 0.15);
        }
        
        .card-header {
            border-radius: 0 !important;
            font-size: 1.2rem;
            padding: 15px 20px;
            border-bottom: 1px solid var(--teal-border);
            background: linear-gradient(135deg, var(--teal-primary) 0%, var(--teal-light) 100%);
            color: white;
            font-weight: 600;
        }
        
        .table {
            margin-bottom: 0;
            border-collapse: separate;
            border-spacing: 0;
        }
        
        .table thead th {
            border-bottom: 2px solid var(--teal-border);
            background-color: rgba(0, 128, 128, 0.1);
            font-weight: 600;
            padding: 14px 12px;
            color: var(--teal-dark);
            text-align: center;
        }
        
        .table td {
            padding: 16px 12px;
            vertical-align: middle;
            border-top: 1px solid #e6f2f2;
        }
        
        .table tbody tr:hover {
            background-color: rgba(0, 128, 128, 0.05);
        }
        
        .form-check-input {
            width: 20px;
            height: 20px;
            margin-top: 0.15rem;
            border: 2px solid var(--teal-light);
            cursor: pointer;
        }
        
        .form-check-input:checked {
            background-color: var(--teal-primary);
            border-color: var(--teal-primary);
        }
        
        .form-check-label {
            margin-left: 10px;
            font-weight: 500;
            color: #333;
            cursor: pointer;
        }
        
        .form-control {
            border-radius: 8px;
            border: 2px solid var(--teal-border);
            padding: 12px 15px;
            transition: all 0.3s;
        }
        
        .form-control:focus {
            box-shadow: 0 0 0 3px rgba(0, 128, 128, 0.2);
            border-color: var(--teal-primary);
        }
        
        .btn-primary {
            background: linear-gradient(135deg, var(--teal-primary) 0%, var(--teal-dark) 100%);
            border: none;
            border-radius: 8px;
            padding: 12px 30px;
            font-weight: 600;
            transition: all 0.3s;
            box-shadow: 0 4px 8px rgba(0, 80, 80, 0.2);
        }
        
        .btn-primary:hover {
            background: linear-gradient(135deg, var(--teal-dark) 0%, #005555 100%);
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(0, 80, 80, 0.25);
        }
        
        .btn-outline-secondary {
            border: 2px solid var(--teal-light);
            color: var(--teal-dark);
            border-radius: 8px;
            padding: 12px 25px;
            font-weight: 600;
            transition: all 0.3s;
        }
        
        .btn-outline-secondary:hover {
            background-color: var(--teal-light);
            color: white;
            border-color: var(--teal-light);
        }
        
        .section-icon {
            margin-right: 10px;
            font-size: 1.3rem;
        }
        
        .medication-item {
            transition: background-color 0.2s;
        }
        
        textarea {
            min-height: 100px;
            resize: vertical;
        }
        
        .footer {
            text-align: center;
            padding: 20px;
            margin-top: 30px;
            color: var(--teal-dark);
            font-size: 0.9rem;
        }
        
        .decoration {
            position: absolute;
            opacity: 0.03;
            z-index: -1;
            pointer-events: none;
        }
        
        .decoration-1 {
            top: 10%;
            right: 5%;
            font-size: 12rem;
            transform: rotate(15deg);
        }
        
        .decoration-2 {
            bottom: 10%;
            left: 5%;
            font-size: 10rem;
            transform: rotate(-10deg);
        }
        
        @media (max-width: 768px) {
            .table thead {
                display: none;
            }
            
            .table, .table tbody, .table tr, .table td {
                display: block;
                width: 100%;
            }
            
            .table tr {
                margin-bottom: 15px;
                border: 1px solid var(--teal-border);
                border-radius: 8px;
                padding: 10px;
            }
            
            .table td {
                text-align: right;
                padding-left: 50%;
                position: relative;
                border-top: none;
            }
            
            .table td::before {
                content: attr(data-label);
                position: absolute;
                left: 15px;
                width: calc(50% - 15px);
                padding-right: 10px;
                text-align: left;
                font-weight: 600;
                color: var(--teal-dark);
            }
        }
    </style>
</head>
<body>
    <div class="decoration decoration-1">
        <i class="bi bi-prescription2"></i>
    </div>
    <div class="decoration decoration-2">
        <i class="bi bi-capsule"></i>
    </div>

    <div class="main-container">
        <div class="header text-center">
            <h1><i class="bi bi-prescription2"></i> Formulir Resep Obat</h1>
            <p class="mb-0">Pilih dan atur resep obat untuk pasien</p>
        </div>

        <!-- OBAT PADAT -->
        <div class="card shadow-sm">
            <div class="card-header">
                <i class="bi bi-capsule section-icon"></i>Obat Padat
            </div>
            <div class="card-body p-0">
                <table class="table">
                    <thead>
                        <tr>
                            <th width="50%">Antibiotik</th>
                            <th width="50%">Biasa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td data-label="Antibiotik">
                                <div class="form-check ms-3">
                                    <input class="form-check-input" type="checkbox" name="obat_padat_antibiotik[]" value="Amoxicillin" id="amoxicillin">
                                    <label class="form-check-label" for="amoxicillin">Amoxicillin</label>
                                </div>
                            </td>
                            <td data-label="Biasa">
                                <div class="form-check ms-3">
                                    <input class="form-check-input" type="checkbox" name="obat_padat_biasa[]" value="Paracetamol" id="paracetamol">
                                    <label class="form-check-label" for="paracetamol">Paracetamol</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td data-label="Antibiotik">
                                <div class="form-check ms-3">
                                    <input class="form-check-input" type="checkbox" name="obat_padat_antibiotik[]" value="Cefadroxil" id="cefadroxil">
                                    <label class="form-check-label" for="cefadroxil">Cefadroxil</label>
                                </div>
                            </td>
                            <td data-label="Biasa">
                                <div class="form-check ms-3">
                                    <input class="form-check-input" type="checkbox" name="obat_padat_biasa[]" value="Ibuprofen" id="ibuprofen">
                                    <label class="form-check-label" for="ibuprofen">Ibuprofen</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td data-label="Antibiotik">
                                <div class="form-check ms-3">
                                    <input class="form-check-input" type="checkbox" name="obat_padat_antibiotik[]" value="Ciprofloxacin" id="ciprofloxacin">
                                    <label class="form-check-label" for="ciprofloxacin">Ciprofloxacin</label>
                                </div>
                            </td>
                            <td data-label="Biasa">
                                <div class="form-check ms-3">
                                    <input class="form-check-input" type="checkbox" name="obat_padat_biasa[]" value="Vitamin C" id="vitaminC">
                                    <label class="form-check-label" for="vitaminC">Vitamin C</label>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- OBAT CAIR -->
        <div class="card shadow-sm">
            <div class="card-header">
                <i class="bi bi-droplet section-icon"></i>Obat Cair
            </div>
            <div class="card-body p-0">
                <table class="table">
                    <thead>
                        <tr>
                            <th width="50%">Antibiotik</th>
                            <th width="50%">Biasa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td data-label="Antibiotik">
                                <div class="form-check ms-3">
                                    <input class="form-check-input" type="checkbox" name="obat_cair_antibiotik[]" value="Sirup Amoxicillin" id="sirupAmoxicillin">
                                    <label class="form-check-label" for="sirupAmoxicillin">Sirup Amoxicillin</label>
                                </div>
                            </td>
                            <td data-label="Biasa">
                                <div class="form-check ms-3">
                                    <input class="form-check-input" type="checkbox" name="obat_cair_biasa[]" value="Sirup Paracetamol" id="sirupParacetamol">
                                    <label class="form-check-label" for="sirupParacetamol">Sirup Paracetamol</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td data-label="Antibiotik">
                                <div class="form-check ms-3">
                                    <input class="form-check-input" type="checkbox" name="obat_cair_antibiotik[]" value="Sirup Cefadroxil" id="sirupCefadroxil">
                                    <label class="form-check-label" for="sirupCefadroxil">Sirup Cefadroxil</label>
                                </div>
                            </td>
                            <td data-label="Biasa">
                                <div class="form-check ms-3">
                                    <input class="form-check-input" type="checkbox" name="obat_cair_biasa[]" value="Sirup Vitamin C" id="sirupVitaminC">
                                    <label class="form-check-label" for="sirupVitaminC">Sirup Vitamin C</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td data-label="Antibiotik"></td>
                            <td data-label="Biasa">
                                <div class="form-check ms-3">
                                    <input class="form-check-input" type="checkbox" name="obat_cair_biasa[]" value="Obat Batuk Cair" id="obatBatuk">
                                    <label class="form-check-label" for="obatBatuk">Obat Batuk Cair</label>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- OBAT RACIK -->
        <div class="card shadow-sm">
            <div class="card-header">
                <i class="bi bi-mortarboard section-icon"></i>Obat Racik
            </div>
            <div class="card-body">
                <label for="obatRacik" class="form-label">Komposisi Racikan</label>
                <textarea class="form-control" name="obat_racik" id="obatRacik" rows="3" placeholder="Contoh: Paracetamol 500mg + Ibuprofen 200mg..."></textarea>
                <div class="form-text mt-2">Tuliskan komposisi dan dosis obat racikan</div>
            </div>
        </div>

        <!-- OBAT REKOMENDASI -->
        <div class="card shadow-sm">
            <div class="card-header">
                <i class="bi bi-lightbulb section-icon"></i>Obat yang Direkomendasikan Beli Sendiri
            </div>
            <div class="card-body">
                <label for="obatRekomendasi" class="form-label">Rekomendasi Obat</label>
                <textarea class="form-control" name="obat_rekomendasi" id="obatRekomendasi" rows="3" placeholder="Tulis rekomendasi obat yang dapat dibeli tanpa resep..."></textarea>
                <div class="form-text mt-2">Rekomendasi obat yang dapat dibeli tanpa resep dokter</div>
            </div>
        </div>

        <!-- BUTTON -->
        <div class="text-end mt-4">
            <button type="button" class="btn btn-outline-secondary me-2">
                <i class="bi bi-x-circle"></i> Batal
            </button>
            <button type="submit" class="btn btn-primary px-4">
                <i class="bi bi-check2-circle"></i> Simpan Resep
            </button>
        </div>

        <div class="footer">
            <p>© 2023 Medical Prescription System | Designed for Healthcare Professionals</p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


@endsection