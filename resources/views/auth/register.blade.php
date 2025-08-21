<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #2bbd9e;
            --secondary-color: #1da58a;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 15px;
            overflow: hidden;
        }
        
        .auth-container {
            max-width: 800px;
            max-height: 95vh;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
            margin: 0 auto;
            display: flex;
        }
        
        .welcome-panel {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 1.5rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            flex: 1;
        }
        
        .form-panel {
            background: white;
            padding: 1.5rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            flex: 1;
            overflow-y: auto;
            max-height: 95vh;
        }
        
        .form-content {
            width: 100%;
            max-width: 350px;
            padding: 10px 0;
        }
        
        .social-icon {
            width: 32px;
            height: 32px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            border: 1px solid #dee2e6;
            color: #666;
            text-decoration: none;
            font-weight: bold;
            font-size: 12px;
        }
        
        .social-icon.fb {
            background-color: #3b5998;
            color: white;
            border: none;
        }
        
        .social-icon.google {
            background-color: #dd4b39;
            color: white;
            border: none;
        }
        
        .social-icon.linkedin {
            background-color: #0077b5;
            color: white;
            border: none;
        }
        
        .btn-primary-custom {
            background-color: var(--primary-color);
            border: none;
            color: white;
            font-weight: 600;
            padding: 8px 12px;
            border-radius: 50px;
            transition: all 0.3s ease;
            width: 100%;
            font-size: 13px;
        }
        
        .btn-primary-custom:hover {
            background-color: var(--secondary-color);
            transform: translateY(-2px);
            box-shadow: 0 3px 8px rgba(43, 189, 158, 0.3);
        }
        
        .btn-outline-light-custom {
            border: 2px solid white;
            color: white;
            font-weight: 600;
            padding: 6px 16px;
            border-radius: 50px;
            transition: all 0.3s ease;
            background: transparent;
            font-size: 13px;
        }
        
        .btn-outline-light-custom:hover {
            background-color: white;
            color: var(--primary-color);
        }
        
        .form-control {
            border-radius: 8px;
            padding: 8px 14px;
            border: 1px solid #ddd;
            font-size: 13px;
            width: 100%;
            transition: all 0.3s ease;
        }
        
        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.2rem rgba(43, 189, 158, 0.25);
        }
        
        textarea.form-control {
            min-height: 70px;
            resize: vertical;
        }
        
        .divider {
            display: flex;
            align-items: center;
            text-align: center;
            color: #6c757d;
            margin: 12px 0;
            font-size: 11px;
            width: 100%;
        }
        
        .divider::before,
        .divider::after {
            content: '';
            flex: 1;
            border-bottom: 1px solid #dee2e6;
        }
        
        .divider::before {
            margin-right: 0.3rem;
        }
        
        .divider::after {
            margin-left: 0.3rem;
        }
        
        .welcome-title {
            font-size: 20px;
            margin-bottom: 10px;
            font-weight: bold;
        }
        
        .create-title {
            font-size: 18px;
            color: var(--primary-color);
            margin-bottom: 12px;
            font-weight: bold;
            text-align: center;
            width: 100%;
        }
        
        .welcome-text {
            margin-bottom: 15px;
            font-size: 12px;
            line-height: 1.4;
            max-width: 240px;
        }
        
        .form-label {
            font-weight: 500;
            color: #495057;
            margin-bottom: 5px;
            margin-left: 5px;
            display: block;
            font-size: 12px;
        }
        
        .password-container {
            position: relative;
        }
        
        .toggle-password {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #666;
            font-size: 12px;
        }
        
        .form-icon {
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--primary-color);
            font-size: 12px;
        }
        
        .form-input-group {
            position: relative;
            margin-bottom: 0.7rem;
        }
        
        .form-input-group input {
            padding-left: 32px;
        }
        
        .form-text {
            font-size: 11px;
        }
        
        @media (max-width: 767.98px) {
            .auth-container {
                flex-direction: column;
                max-height: none;
            }
            
            .welcome-panel, .form-panel {
                padding: 1.2rem;
            }
            
            .welcome-title {
                font-size: 18px;
            }
            
            .create-title {
                font-size: 16px;
            }
            
            .form-control {
                padding: 7px 10px;
            }
            
            .form-panel {
                max-height: none;
            }
        }
    </style>
</head>
<body>
    <div class="auth-container">
        <!-- LEFT PANEL - WELCOME -->
        <div class="welcome-panel">
            <h2 class="welcome-title">Selamat Datang!</h2>
            <p class="welcome-text">
                Silakan lengkapi data diri anda untuk melakukan pendaftaran layanan kesehatan di Puskesmas Gunung Sari
  data yang anda masukkan akan digunakan untuk keperluan administrasi dan pelayanan kesehatan.
            </p>
            <div>
                <a href="#" class="btn btn-outline-light-custom">
                    MASUK
                </a>
            </div>
        </div>

        <!-- RIGHT PANEL - REGISTRATION FORM -->
        <div class="form-panel">
            <div class="form-content">
                <h2 class="create-title">Buat Akun Baru</h2>
                
                <!-- SOCIAL ICONS -->
                <div class="d-flex justify-content-center mb-2">
                    <a href="#" class="social-icon fb mx-1" aria-label="Login with Facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="social-icon google mx-1" aria-label="Login with Google">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="#" class="social-icon linkedin mx-1" aria-label="Login with LinkedIn">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
                
                <div class="divider">
                    <span>atau gunakan email untuk registrasi</span>
                </div>
                
                <!-- REGISTER FORM -->
                <form id="registrationForm">
                    <!-- Name -->
                    <div class="form-input-group">
                        <label for="name" class="form-label">Nama Lengkap</label>
                        <div class="form-input-group">
                            <i class="fas fa-user form-icon"></i>
                            <input id="name" type="text" name="name" 
                                   class="form-control" 
                                   placeholder="Masukkan nama lengkap" required>
                        </div>
                    </div>
                    
                    <!-- NIK -->
                    <div class="form-input-group">
                        <label for="nik" class="form-label">Nomor Induk Kependudukan (NIK)</label>
                        <div class="form-input-group">
                            <i class="fas fa-id-card form-icon"></i>
                            <input id="nik" type="text" name="nik" 
                                   class="form-control" 
                                   placeholder="Masukkan NIK" required
                                   pattern="[0-9]{16}" 
                                   title="NIK harus 16 digit">
                        </div>
                    </div>
                    
                    <!-- Email -->
                    <div class="form-input-group">
                        <label for="email" class="form-label">Email</label>
                        <div class="form-input-group">
                            <i class="fas fa-envelope form-icon"></i>
                            <input id="email" type="email" name="email" 
                                   class="form-control" 
                                   placeholder="Masukkan email" required>
                        </div>
                    </div>
                    
                    <!-- Password -->
                    <div class="form-input-group">
                        <label for="password" class="form-label">Password</label>
                        <div class="password-container form-input-group">
                            <i class="fas fa-lock form-icon"></i>
                            <input id="password" type="password" name="password" 
                                   class="form-control" 
                                   placeholder="Buat password" required>
                            <span class="toggle-password" onclick="togglePassword()">
                                <i class="fas fa-eye"></i>
                            </span>
                        </div>
                    </div>
                    
                    <!-- Address -->
                    <div class="form-input-group">
                        <label for="address" class="form-label">Alamat Lengkap</label>
                        <div class="form-input-group">
                            <i class="fas fa-home form-icon"></i>
                            <textarea id="address" name="address" 
                                      class="form-control" 
                                      placeholder="Masukkan alamat lengkap" required></textarea>
                        </div>
                    </div>
                    
                    <!-- Submit -->
                    <button type="submit" class="btn btn-primary-custom mt-2">
                        DAFTAR SEKARANG
                    </button>
                    
                    <!-- Terms -->
                    <div class="form-text mt-2 text-center">
                        Dengan mendaftar, Anda menyetujui <a href="#" class="text-decoration-none text-success">Ketentuan Layanan</a> 
                        dan <a href="#" class="text-decoration-none text-success">Kebijakan Privasi</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Toggle password visibility
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const toggleIcon = document.querySelector('.toggle-password i');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                toggleIcon.classList.remove('fa-eye');
                toggleIcon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                toggleIcon.classList.remove('fa-eye-slash');
                toggleIcon.classList.add('fa-eye');
            }
        }
        
        // Form submission handling
        document.getElementById('registrationForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Basic validation
            const nik = document.getElementById('nik').value;
            if (nik.length !== 16 || isNaN(nik)) {
                alert('NIK harus terdiri dari 16 digit angka');
                return;
            }
            
            // If validation passes, you can submit the form
            alert('Pendaftaran berhasil! Akun Anda telah dibuat.');
            this.reset();
        });
    </script>
</body>
</html>