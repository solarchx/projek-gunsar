@extends('layoutdokter')
@section('konten')
 <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-5 border-bottom">
                    <h1 class="h2">Janji Temu</h1>
                </div>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Pasien Hari Ini</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: #f0f8f8;
    }
    .card {
      border-radius: 15px;
      overflow: hidden;
    }
    .list-group-item {
      border: none;
      border-bottom: 1px solid #e6f0f0;
      padding: 15px 20px;
      transition: background 0.2s ease;
    }
    .list-group-item:hover {
      background: #f5fbfb;
    }
    .status-badge {
      font-size: 0.85rem;
      padding: 6px 10px;
      border-radius: 10px;
    }
    .btn-sm {
      border-radius: 10px;
      padding: 5px 12px;
    }
    .title-bar {
      background: #6AD4DD;
      color: white;
      padding: 15px;
      text-align: center;
      font-weight: bold;
      border-top-left-radius: 15px;
      border-top-right-radius: 15px;
    }
  </style>
</head>
<body>

<div class="container py-4">
  <div class="card shadow-sm border-0">
    <div class="title-bar">
      <h4>Daftar Pasien Poli Umum</h4>
    </div>
    <div class="card-body p-0" style="max-height: 500px; overflow-y: auto;">
      <ul class="list-group list-group-flush" id="patientList">
        <!-- Data pasien akan dimuat via JavaScript -->
      </ul>
    </div>
  </div>
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
      <li class="list-group-item d-flex justify-content-between align-items-center">
        <div>
          <h6 class="mb-1 fw-bold text-teal">${p.nama}</h6>
          <small class="text-muted">Poli ${p.poli} - ${p.jam}</small>
        </div>
        <div>
          <span class="status-badge badge ${badgeClass} me-2">${p.status}</span>
          ${p.status === "Menunggu" ? `<button class="btn btn-sm btn-primary" onclick="updateStatus(${p.id}, 'Dipanggil')">Panggil</button>` : ""}
          ${p.status === "Dipanggil" ? `<button class="btn btn-sm btn-success" onclick="updateStatus(${p.id}, 'Selesai')">Selesai</button>` : ""}
        </div>
      </li>
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