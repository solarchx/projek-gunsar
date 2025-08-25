@extends('layoutdokter')
@section('konten')
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Janji Temu Pasien</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body {
      background: #f4f7fa;
      font-family: "Segoe UI", sans-serif;
    }
    .header-bar {
      text-align: center;
      margin-bottom: 30px;
    }
    .header-bar h2 {
      font-weight: 700;
      font-size: 1.8rem;
      color: #004d40;
    }
    .header-bar p {
      color: #6c757d;
      font-size: 0.95rem;
    }
    .patient-card {
      background: white;
      border-radius: 20px;
      padding: 20px;
      margin-bottom: 20px;
      box-shadow: 0 6px 18px rgba(0,0,0,0.06);
      transition: transform 0.2s ease, box-shadow 0.2s ease;
    }
    .patient-card:hover {
      transform: translateY(-3px);
      box-shadow: 0 8px 22px rgba(0,0,0,0.08);
    }
    .patient-name {
      font-size: 1.15rem;
      font-weight: 600;
      color: #333;
    }
    .patient-info {
      font-size: 0.9rem;
      color: #6c757d;
    }
    .status-line {
      display: flex;
      align-items: center;
      gap: 8px;
      margin-top: 12px;
    }
    .status-badge {
      border-radius: 30px;
      padding: 6px 14px;
      font-size: 0.8rem;
    }
    .btn-action {
      border-radius: 25px;
      font-size: 0.85rem;
      padding: 6px 14px;
    }
  </style>
</head>
<body>

<div class="container py-4">
  <!-- Header -->
  <div class="header-bar">
    <h2><i class="bi bi-hospital me-2 text-success"></i>Janji Temu Pasien</h2>
    <p>Daftar pasien poli umum yang terjadwal hari ini</p>
  </div>

  <!-- List pasien -->
  <div id="patientList"></div>
</div>

<script>
// Data pasien contoh
let patients = [
  { id: 1, nama: "Ahmad Fulan", poli: "Umum", jam: "09:00", status: "Menunggu" },
  { id: 2, nama: "Budi Santoso", poli: "Umum", jam: "11:00", status: "Menunggu" },
  { id: 3, nama: "Siti Aminah", poli: "Umum", jam: "10:30", status: "Menunggu" }
];

// Fungsi render pasien
function renderPatients() {
  const list = document.getElementById("patientList");
  list.innerHTML = "";
  
  patients.forEach(p => {
    let badgeClass = "bg-secondary";
    if (p.status === "Menunggu") badgeClass = "bg-success";
    if (p.status === "Dipanggil") badgeClass = "bg-warning text-dark";
    if (p.status === "Selesai") badgeClass = "bg-info text-dark";
    
    list.innerHTML += `
      <div class="patient-card">
        <div class="d-flex justify-content-between align-items-start">
          <div>
            <div class="patient-name"><i class="bi bi-person-circle me-2 text-primary"></i>${p.nama}</div>
            <div class="patient-info">Poli ${p.poli} • Jam ${p.jam}</div>
          </div>
          <div>
            <span class="status-badge badge ${badgeClass}">${p.status}</span>
          </div>
        </div>
        
        <div class="status-line">
          ${p.status === "Menunggu" ? `<button class="btn btn-primary btn-action" onclick="updateStatus(${p.id}, 'Dipanggil')"><i class="bi bi-bell"></i> Panggil</button>` : ""}
          ${p.status === "Dipanggil" ? `<button class="btn btn-success btn-action" onclick="updateStatus(${p.id}, 'Selesai')"><i class="bi bi-check-circle"></i> Selesai</button>` : ""}
        </div>
      </div>
    `;
  });
}

// Fungsi update status pasien
function updateStatus(id, newStatus) {
  const patient = patients.find(p => p.id === id);
  if (patient) patient.status = newStatus;
  renderPatients();
}

// Render pertama kali
renderPatients();
</script>

</body>
</html>


@endsection