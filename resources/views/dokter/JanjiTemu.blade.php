@extends('layout')
@section('konten')
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Janji Temu Dokter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">
    <h2 class="text-center mb-4">Janji Temu Dokter</h2>
    <div class="row">
        
        <!-- Kalender -->
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-header text-white text-center" style="background-color: teal;">
                    Pilih Tanggal
                </div>
                <div class="card-body">
                    <div id="datepicker"></div>
                </div>
            </div>
        </div>

        <!-- Rincian Pasien -->
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header text-white text-center" style="background-color: teal;">
                    Daftar Pasien
                </div>
                <div class="card-body" id="patientList">
                    <p class="text-muted text-center">Silakan pilih tanggal untuk melihat daftar pasien.</p>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Script -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script>
    // Data contoh pasien
    const appointments = {
        "12-08-2025": [
            { nama: "Ahmad Fulan", nik: "3212345678901234", poli: "Umum", jam: "09:00" },
            { nama: "Budi Santoso", nik: "3212345678905678", poli: "Gigi", jam: "11:00" }
        ],
        "13-08-2025": [
            { nama: "Siti Aminah", nik: "3212345678909876", poli: "Kandungan", jam: "10:30" }
        ]
    };

    // Inisialisasi datepicker
    $('#datepicker').datepicker({
        format: "dd-mm-yyyy",
        todayHighlight: true
    }).on('changeDate', function(e) {
        const selectedDate = e.format();
        const listContainer = document.getElementById("patientList");

        if (appointments[selectedDate]) {
            let html = `<ul class="list-group">`;
            appointments[selectedDate].forEach(p => {
                html += `
                    <li class="list-group-item">
                        <strong>${p.nama}</strong> <br>
                        NIK: ${p.nik} <br>
                        Poli: ${p.poli} <br>
                        Jam: ${p.jam}
                    </li>
                `;
            });
            html += `</ul>`;
            listContainer.innerHTML = html;
        } else {
            listContainer.innerHTML = `<p class="text-muted text-center">Tidak ada janji temu untuk tanggal ini.</p>`;
        }
    });
</script>

</body>
</html>
@endsection