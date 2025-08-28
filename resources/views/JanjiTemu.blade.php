@extends('layoutdokter')
@section('konten')
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Janji Temu Pasien</title>
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
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
    }
    
    .header-bar {
      background: linear-gradient(135deg, var(--teal-primary) 0%, var(--teal-dark) 100%);
      color: white;
      padding: 25px 30px;
      border-radius: 12px;
      margin-bottom: 25px;
      box-shadow: 0 5px 15px rgba(0, 80, 80, 0.2);
      text-align: center;
    }
    
    .header-bar h2 {
      font-weight: 700;
      font-size: 1.8rem;
      margin-bottom: 5px;
    }
    
    .header-bar p {
      margin-bottom: 0;
      opacity: 0.9;
    }
    
    .patient-card {
      background: white;
      border-radius: 12px;
      padding: 20px;
      margin-bottom: 20px;
      box-shadow: 0 4px 12px rgba(0, 80, 80, 0.1);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      border-left: 4px solid var(--teal-primary);
    }
    
    .patient-card:hover {
      transform: translateY(-3px);
      box-shadow: 0 8px 20px rgba(0, 80, 80, 0.15);
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
      gap: 10px;
      margin-top: 15px;
    }
    
    .status-badge {
      border-radius: 30px;
      padding: 6px 14px;
      font-size: 0.8rem;
      font-weight: 500;
    }
    
    .btn-action {
      border-radius: 25px;
      font-size: 0.85rem;
      padding: 7px 16px;
      font-weight: 500;
      transition: all 0.2s;
    }
    
    .btn-primary {
      background: linear-gradient(135deg, var(--teal-primary) 0%, var(--teal-dark) 100%);
      border: none;
      box-shadow: 0 3px 8px rgba(0, 80, 80, 0.2);
    }
    
    .btn-primary:hover {
      background: linear-gradient(135deg, var(--teal-dark) 0%, #005555 100%);
      transform: translateY(-2px);
      box-shadow: 0 5px 12px rgba(0, 80, 80, 0.25);
    }
    
    .btn-success {
      background: linear-gradient(135deg, #28a745 0%, #1e7e34 100%);
      border: none;
      box-shadow: 0 3px 8px rgba(40, 167, 69, 0.2);
    }
    
    .btn-success:hover {
      background: linear-gradient(135deg, #218838 0%, #155724 100%);
      transform: translateY(-2px);
      box-shadow: 0 5px 12px rgba(40, 167, 69, 0.25);
    }
    
    .badge-waiting {
      background: linear-gradient(135deg, var(--teal-primary) 0%, var(--teal-light) 100%);
      color: white;
    }
    
    .badge-called {
      background: linear-gradient(135deg, #ffc107 0%, #e0a800 100%);
      color: #212529;
    }
    
    .badge-completed {
      background: linear-gradient(135deg, #17a2b8 0%, #138496 100%);
      color: white;
    }
    
    .filter-bar {
      background: white;
      border-radius: 12px;
      padding: 15px 20px;
      margin-bottom: 20px;
      box-shadow: 0 4px 12px rgba(0, 80, 80, 0.1);
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    
    .filter-select {
      border: 2px solid var(--teal-border);
      border-radius: 8px;
      padding: 8px 15px;
      color: var(--teal-dark);
      font-weight: 500;
    }
    
    .filter-select:focus {
      box-shadow: 0 0 0 3px rgba(0, 128, 128, 0.2);
      border-color: var(--teal-primary);
      outline: none;
    }
    
    .stats-box {
      background: white;
      border-radius: 12px;
      padding: 15px;
      margin-bottom: 20px;
      box-shadow: 0 4px 12px rgba(0, 80, 80, 0.1);
      display: flex;
      justify-content: space-around;
      text-align: center;
    }
    
    .stat-item {
      padding: 10px;
    }
    
    .stat-number {
      font-size: 1.8rem;
      font-weight: 700;
      color: var(--teal-primary);
      margin-bottom: 5px;
    }
    
    .stat-label {
      font-size: 0.85rem;
      color: #6c757d;
    }
    
    .decoration {
      position: absolute;
      opacity: 0.03;
      z-index: -1;
      pointer-events: none;
    }
    
    .decoration-1 {
      top: 15%;
      right: 10%;
      font-size: 10rem;
      transform: rotate(15deg);
    }
    
    .decoration-2 {
      bottom: 15%;
      left: 10%;
      font-size: 8rem;
      transform: rotate(-10deg);
    }
    
    @media (max-width: 768px) {
      .filter-bar {
        flex-direction: column;
        gap: 15px;
      }
      
      .stats-box {
        flex-wrap: wrap;
      }
      
      .stat-item {
        flex: 0 0 50%;
        margin-bottom: 10px;
      }
    }
    html, body {
      height: 100%;
      width: 100%;
    }

    .main-container {
      max-width: 100% !important;
      width: 100%;
      height: 100%;
      padding: 30px;
      box-sizing: border-box;
    }
    
    .text-teal {
      color: var(--teal-primary);
    }
  </style>
</head>
<body>
  <div class="decoration decoration-1">
    <i class="bi bi-calendar-check"></i>
  </div>
  <div class="decoration decoration-2">
    <i class="bi bi-person-heart"></i>
  </div>

  <div class="main-container">
    <!-- Header -->
    <div class="header-bar">
      <h2><i class="bi bi-calendar2-check me-2"></i>Janji Temu Pasien</h2>
      <p>Daftar pasien yang terjadwal hari ini</p>
    </div>
    
    <!-- Stats Box -->
    <div class="stats-box">
      <div class="stat-item">
        <div class="stat-number" id="totalPatients">6</div>
        <div class="stat-label">Total Pasien</div>
      </div>
      <div class="stat-item">
        <div class="stat-number" id="waitingPatients">6</div>
        <div class="stat-label">Menunggu</div>
      </div>
      <div class="stat-item">
        <div class="stat-number" id="calledPatients">0</div>
        <div class="stat-label">Dipanggil</div>
      </div>
      <div class="stat-item">
        <div class="stat-number" id="completedPatients">0</div>
        <div class="stat-label">Selesai</div>
      </div>
    </div>
    
    <!-- Filter Bar -->
    <div class="filter-bar">
      <div>
        <span class="fw-bold text-teal">Filter:</span>
        <select id="statusFilter" class="filter-select ms-2">
          <option value="semua">Semua Status</option>
          <option value="Menunggu">Menunggu</option>
          <option value="Dipanggil">Dipanggil</option>
          <option value="Selesai">Selesai</option>
        </select>
      </div>
      <div>
        <span class="fw-bold text-teal">Poli:</span>
        <select id="poliFilter" class="filter-select ms-2">
          <option value="semua">Semua Poli</option>
          <option value="Umum">Umum</option>
          <option value="Gigi">Gigi</option>
          <option value="Anak">Anak</option>
        </select>
      </div>
    </div>

    <!-- List pasien -->
    <div id="patientList"></div>
  </div>

  <script>
    // Data pasien contoh dengan berbagai poli
    let patients = [
      { id: 1, nama: "Ahmad Fulan", poli: "Umum", jam: "09:00", status: "Menunggu" },
      { id: 2, nama: "Budi Santoso", poli: "Umum", jam: "11:00", status: "Menunggu" },
      { id: 3, nama: "Siti Aminah", poli: "Umum", jam: "10:30", status: "Menunggu" },
      { id: 4, nama: "Dewi Lestari", poli: "Gigi", jam: "09:30", status: "Menunggu" },
      { id: 5, nama: "Rina Wati", poli: "Gigi", jam: "10:00", status: "Menunggu" },
      { id: 6, nama: "Joko Widodo", poli: "Anak", jam: "11:30", status: "Menunggu" }
    ];

    // Variabel untuk menyimpan filter yang aktif
    let activeStatusFilter = "semua";
    let activePoliFilter = "semua";

    // Fungsi untuk update statistik
    function updateStats() {
      const total = patients.length;
      const waiting = patients.filter(p => p.status === "Menunggu").length;
      const called = patients.filter(p => p.status === "Dipanggil").length;
      const completed = patients.filter(p => p.status === "Selesai").length;
      
      document.getElementById('totalPatients').textContent = total;
      document.getElementById('waitingPatients').textContent = waiting;
      document.getElementById('calledPatients').textContent = called;
      document.getElementById('completedPatients').textContent = completed;
    }

    // Fungsi untuk memfilter pasien berdasarkan status dan poli
    function filterPatients() {
      let filteredPatients = patients;
      
      // Filter berdasarkan status
      if (activeStatusFilter !== "semua") {
        filteredPatients = filteredPatients.filter(p => p.status === activeStatusFilter);
      }
      
      // Filter berdasarkan poli
      if (activePoliFilter !== "semua") {
        filteredPatients = filteredPatients.filter(p => p.poli === activePoliFilter);
      }
      
      return filteredPatients;
    }

    // Fungsi render pasien dengan filter
    function renderPatients() {
      const list = document.getElementById("patientList");
      list.innerHTML = "";
      
      const filteredPatients = filterPatients();
      
      if (filteredPatients.length === 0) {
        list.innerHTML = `
          <div class="text-center p-4">
            <i class="bi bi-inbox" style="font-size: 3rem; color: #ccc;"></i>
            <p class="mt-3 text-muted">Tidak ada pasien yang sesuai dengan filter</p>
          </div>
        `;
        return;
      }
      
      filteredPatients.forEach(p => {
        let badgeClass = "badge-waiting";
        if (p.status === "Dipanggil") badgeClass = "badge-called";
        if (p.status === "Selesai") badgeClass = "badge-completed";
        
        list.innerHTML += `
          <div class="patient-card">
            <div class="d-flex justify-content-between align-items-start">
              <div>
                <div class="patient-name"><i class="bi bi-person-circle me-2" style="color: var(--teal-primary);"></i>${p.nama}</div>
                <div class="patient-info">Poli ${p.poli} • Jam ${p.jam}</div>
              </div>
              <div>
                <span class="status-badge ${badgeClass}">${p.status}</span>
              </div>
            </div>
            
            <div class="status-line">
              ${p.status === "Menunggu" ? `<button class="btn btn-primary btn-action" onclick="updateStatus(${p.id}, 'Dipanggil')"><i class="bi bi-bell"></i> Panggil</button>` : ""}
              ${p.status === "Dipanggil" ? `<button class="btn btn-success btn-action" onclick="updateStatus(${p.id}, 'Selesai')"><i class="bi bi-check-circle"></i> Selesai</button>` : ""}
              ${p.status === "Selesai" ? `<button class="btn btn-outline-secondary btn-action" onclick="updateStatus(${p.id}, 'Menunggu')"><i class="bi bi-arrow-repeat"></i> Reset</button>` : ""}
            </div>
          </div>
        `;
      });
      
      updateStats();
    }

    // Fungsi update status pasien
    function updateStatus(id, newStatus) {
      const patient = patients.find(p => p.id === id);
      if (patient) patient.status = newStatus;
      renderPatients();
    }

    // Event listener untuk filter
    document.getElementById('statusFilter').addEventListener('change', function() {
      activeStatusFilter = this.value;
      renderPatients();
    });

    document.getElementById('poliFilter').addEventListener('change', function() {
      activePoliFilter = this.value;
      renderPatients();
    });

    // Render pertama kali
    renderPatients();
  </script>
</body>
</html>

@endsection