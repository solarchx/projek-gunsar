@extends('layoutdokter')
@section('konten')
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Surat Rujukan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .submit {
            background-color: #6AD4DD;
            cursor: pointer;
        }

        .submit:hover {
            background-color: #4BBFBA;
        }
    </style>
</head>
<body class="bg-gray-50 min-h-screen flex items-center justify-center">
    <div class="max-w-7xl w-full bg-white rounded-xl shadow-lg overflow-hidden">
        <!-- Header -->
        <div class="text-white p-6" style="background-color: #6AD4DD;">
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-2xl font-bold">FORM SURAT RUJUKAN</h1>
                    <p class="text-blue-100 mt-1">Isi data dengan lengkap dan benar</p>
                </div>
                <div class="bg-white p-3 rounded-lg" style="color: #6AD4DD;">
                    <i class="fas fa-file-medical text-3xl"></i>
                </div>
            </div>
        </div>

        <!-- Form Container -->
        <div class="p-6 max-h-[75vh] overflow-y-auto">
            <form id="rujukanForm" class="space-y-6">
                <!-- Data Pasien Section -->
                <div class="border border-gray-200 rounded-lg p-5 bg-blue-50">
                    <div class="flex items-center mb-4">
                        <div class="bg-blue-500 text-white p-2 rounded-lg mr-3">
                            <i class="fas fa-user-injured"></i>
                        </div>
                        <h2 class="text-xl font-semibold text-gray-800">Data Pasien</h2>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
                            <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition" required>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Umur</label>
                            <input type="number" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition" required>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Jenis Kelamin</label>
                            <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition" required>
                                <option value="">Pilih Jenis Kelamin</option>
                                <option value="L">Laki-laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">No. Rekam Medis</label>
                            <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition" required>
                        </div>
                        <div class="md:col-span-2">
                            <label class="block text-sm font-medium text-gray-700 mb-1">Alamat</label>
                            <textarea class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition" rows="3" required></textarea>
                        </div>
                    </div>
                </div>

                <!-- Data Rujukan Section -->
                <div class="border border-gray-200 rounded-lg p-5 bg-green-50">
                    <div class="flex items-center mb-4">
                        <div class="bg-green-500 text-white p-2 rounded-lg mr-3">
                            <i class="fas fa-ambulance"></i>
                        </div>
                        <h2 class="text-xl font-semibold text-gray-800">Data Rujukan</h2>
                    </div>
                    
                    <div class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Diagnosa Awal</label>
                            <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition" required>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Dirujuk ke</label>
                            <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition" placeholder="Nama Rumah Sakit/Klinik" required>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Alasan Rujukan</label>
                            <textarea class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition" rows="3" required></textarea>
                        </div>
                    </div>
                </div>

                <!-- Data Pengirim Section -->
                <div class="border border-gray-200 rounded-lg p-5 bg-purple-50">
                    <div class="flex items-center mb-4">
                        <div class="bg-purple-500 text-white p-2 rounded-lg mr-3">
                            <i class="fas fa-user-md"></i>
                        </div>
                        <h2 class="text-xl font-semibold text-gray-800">Data Pengirim</h2>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Nama Dokter</label>
                            <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition" required>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Tanggal Rujukan</label>
                            <input type="date" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition" required>
                        </div>
                        <div class="md:col-span-2">
                            <label class="block text-sm font-medium text-gray-700 mb-1">Instansi Pengirim</label>
                            <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition" required>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <!-- Footer dengan Tombol -->
        <div class="bg-gray-100 px-6 py-4 border-t border-gray-200 flex flex-col sm:flex-row justify-between items-center space-y-3 sm:space-y-0">
            <div class="text-sm text-gray-600">
                <i class="fas fa-info-circle mr-1"></i> Pastikan data yang diisi sudah benar
            </div>
            <div class="flex space-x-3">
                <button type="button" id="resetBtn" class="px-5 py-2 bg-gray-300 text-gray-700 rounded-lg hover:bg-gray-400 transition font-medium flex items-center">
                    <i class="fas fa-redo mr-2"></i> Reset
                </button>
                <button type="button" id="submitBtn" class="submit px-5 py-2 text-white rounded-lg transition font-medium flex items-center">
                    <i class="fas fa-paper-plane mr-2"></i> Buat Surat Rujukan
                </button>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('submitBtn').addEventListener('click', function() {
            const form = document.getElementById('rujukanForm');
            if (form.checkValidity()) {
                // Simulasi loading
                this.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i> Memproses...';
                this.disabled = true;
                
                setTimeout(() => {
                    alert('Form surat rujukan berhasil disubmit!');
                    this.innerHTML = '<i class="fas fa-paper-plane mr-2"></i> Buat Surat Rujukan';
                    this.disabled = false;
                }, 1500);
            } else {
                alert('Harap lengkapi semua field yang wajib diisi!');
            }
        });
        
        document.getElementById('resetBtn').addEventListener('click', function() {
            if (confirm('Apakah Anda yakin ingin mereset semua data?')) {
                document.getElementById('rujukanForm').reset();
            }
        });
        
        // Set tanggal hari ini sebagai default
        document.querySelector('input[type="date"]').valueAsDate = new Date();
    </script>
</body>
</html>
@endsection