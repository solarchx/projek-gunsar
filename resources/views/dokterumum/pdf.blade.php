<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Resep Dokter</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: #fff;
            color: #333;
            font-size: 12px;
        }
        .header {
            text-align: center;
            border-bottom: 3px solid #2e7d32;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        .header h2 {
            margin: 0;
            color: #2e7d32;
        }
        .header p {
            margin: 2px 0;
            font-size: 11px;
        }
        .info {
            margin-bottom: 20px;
        }
        .info table {
            width: 100%;
            border-collapse: collapse;
        }
        .info td {
            padding: 4px;
        }
        .resep-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        .resep-table th, .resep-table td {
            border: 1px solid #ddd;
            padding: 6px;
            font-size: 12px;
        }
        .resep-table th {
            background: #e8f5e9;
            color: #2e7d32;
            text-align: left;
        }
        .footer {
            margin-top: 30px;
            text-align: right;
            font-size: 12px;
        }
        .signature {
            margin-top: 60px;
            text-align: right;
        }
        .signature p {
            margin: 2px 0;
        }
    </style>
</head>
<body>

<div class="header">
    <h2>Puskesmas Sehat Selalu</h2>
    <p>Jl. Merdeka No. 123, Cirebon, Jawa Barat</p>
    <p>Telp: (0231) 123456 • Email: info@puskesmas.com</p>
</div>

<div class="info">
    <table>
        <tr>
            <td><strong>NIK Pasien:</strong> {{ $resep->NIK_pasien }}</td>
            <td><strong>NIP Dokter:</strong> {{ $resep->NIP_dokter }}</td>
        </tr>
        <tr>
            <td><strong>Tanggal:</strong> {{ \Carbon\Carbon::parse($resep->tanggal)->translatedFormat('d F Y') }}</td>
            <td><strong>Obat Racikan:</strong> {{ $resep->obat_racikan }}</td>
        </tr>
        <tr>
            <td colspan="2"><strong>Obat Rekomendasi:</strong> {{ $resep->obat_rekomendasi }}</td>
        </tr>
    </table>
</div>

<h4>Detail Resep</h4>
<table class="resep-table">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Obat</th>
            <th>Kemasan</th>
            <th>Jumlah</th>
        </tr>
    </thead>
    <tbody>
        @foreach($resep->detailReseps as $i => $detail)
        <tr>
            <td>{{ $i+1 }}</td>
            <td>{{ $detail->obat->nama_obat }}</td>
            <td>{{ $detail->obat->kemasan }}</td>
            <td>{{ $detail->jumlah }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="footer">
    <p>Cirebon, {{ \Carbon\Carbon::now()->translatedFormat('d F Y') }}</p>
</div>

<div class="signature">
    <p><strong>{{ $resep->dokter->nama ?? '________________' }}</strong></p>
    <p>Dokter Penanggung Jawab</p>
</div>

</body>
</html>
