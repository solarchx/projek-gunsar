<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Puskesmas Gunung Sari</title>
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
            background: linear-gradient(135deg, #e7e9efff, #e0dbe6ff);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 15px;
        }
        
        .auth-container {
            max-width: 800px;
            max-height: 95vh;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
            margin: 0 auto;
            display: flex;
        }
        
        .welcome-panel {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 2rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            flex: 1;
            position: relative;
            overflow: hidden;
        }
        
        .welcome-panel::before {
            content: "";
            position: absolute;
            top: -50px;
            right: -50px;
            width: 150px;
            height: 150px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
        }
        
        .welcome-panel::after {
            content: "";
            position: absolute;
            bottom: -80px;
            left: -30px;
            width: 200px;
            height: 200px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.08);
        }
        
        .form-panel {
            background: white;
            padding: 2rem;
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
            width: 40px;
            height: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            border: 1px solid #dee2e6;
            color: #666;
            text-decoration: none;
            font-weight: bold;
            font-size: 14px;
            transition: all 0.3s ease;
        }
        
        .social-icon:hover {
            transform: translateY(-3px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
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
            padding: 10px 12px;
            border-radius: 8px;
            transition: all 0.3s ease;
            width: 100%;
            font-size: 14px;
            letter-spacing: 0.5px;
        }
        
        .btn-primary-custom:hover {
            background-color: var(--secondary-color);
            transform: translateY(-3px);
            box-shadow: 0 5px 12px rgba(43, 189, 158, 0.3);
        }
        
        .btn-outline-light-custom {
            border: 2px solid white;
            color: white;
            font-weight: 600;
            padding: 8px 20px;
            border-radius: 8px;
            transition: all 0.3s ease;
            background: transparent;
            font-size: 14px;
            z-index: 1;
            position: relative;
        }
        
        .btn-outline-light-custom:hover {
            background-color: white;
            color: var(--primary-color);
        }
        
        .form-control {
            border-radius: 8px;
            padding: 10px 15px 10px 40px;
            border: 1px solid #ddd;
            font-size: 14px;
            width: 100%;
            transition: all 0.3s ease;
        }
        
        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.2rem rgba(43, 189, 158, 0.25);
        }
        
        .divider {
            display: flex;
            align-items: center;
            text-align: center;
            color: #6c757d;
            margin: 20px 0;
            font-size: 13px;
            width: 100%;
        }
        
        .divider::before,
        .divider::after {
            content: '';
            flex: 1;
            border-bottom: 1px solid #dee2e6;
        }
        
        .divider::before {
            margin-right: 0.8rem;
        }
        
        .divider::after {
            margin-left: 0.8rem;
        }
        
        .welcome-title {
            font-size: 24px;
            margin-bottom: 15px;
            font-weight: bold;
            z-index: 1;
        }
        
        .login-title {
            font-size: 22px;
            color: var(--primary-color);
            margin-bottom: 20px;
            font-weight: bold;
            text-align: center;
            width: 100%;
        }
        
        .welcome-text {
            margin-bottom: 25px;
            font-size: 14px;
            line-height: 1.6;
            max-width: 300px;
            z-index: 1;
        }
        
        .form-label {
            font-weight: 500;
            color: #495057;
            margin-bottom: 5px;
            display: block;
            font-size: 13px;
        }
        
        .password-container {
            position: relative;
        }
        
        .toggle-password {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #666;
            font-size: 14px;
        }
        
        .form-icon {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--primary-color);
            font-size: 16px;
        }
        
        .form-input-group {
            position: relative;
            margin-bottom: 1.2rem;
        }
        
        .form-text {
            font-size: 13px;
        }
        
        .health-icon {
            font-size: 60px;
            margin-bottom: 20px;
            z-index: 1;
            color: rgba(255, 255, 255, 0.9);
        }
        
        .remember-forgot {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
            width: 100%;
        }
        
        .remember-me {
            display: flex;
            align-items: center;
            font-size: 13px;
        }
        
        .forgot-password {
            font-size: 13px;
            color: var(--primary-color);
            text-decoration: none;
        }
        
        .forgot-password:hover {
            text-decoration: underline;
        }
        
        .register-link {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
        }
        
        .register-link a {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 500;
        }
        
        .register-link a:hover {
            text-decoration: underline;
        }
        
        @media (max-width: 767.98px) {
            .auth-container {
                flex-direction: column;
                max-height: none;
            }
            
            .welcome-panel, .form-panel {
                padding: 1.5rem;
            }
            
            .welcome-title {
                font-size: 22px;
            }
            
            .login-title {
                font-size: 20px;
            }
            
            .form-control {
                padding: 9px 12px 9px 38px;
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
            <i class="fas fa-heartbeat health-icon"></i>
            <h2 class="welcome-title">Selamat Datang!</h2>
            <p class="welcome-text">
                Silakan masuk ke akun Anda untuk mengakses layanan kesehatan di Puskesmas Gunung Sari. 
                Dengan login, anda dapat mengatur janji temu, melihat riwayat kunjungan, dan mengakses layanan lainnya.
            </p>
            <div>
                <a href="register" class="btn btn-outline-light-custom">
                    <i class="fas fa-user-plus me-2"></i>DAFTAR AKUN
                </a>
            </div>
        </div>

        <!-- RIGHT PANEL - LOGIN FORM -->
        <div class="form-panel">
            <div class="form-content">
                
                <!-- LOGIN FORM -->
                <form id="loginForm" method="POST" action="{{ route('login') }}">
                    @csrf
                    <!-- NIK -->
                    <div class="form-input-group">
                        <label for="nik" class="form-label">Nomor Induk Kependudukan (NIK)</label>
                        <div class="form-input-group">
                            <i class="fas fa-id-card form-icon"></i>
                            <input id="nik" type="text" name="nik" 
                                   class="form-control" 
                                   placeholder="Masukkan NIK Anda" 
                                   pattern="[0-9]{16}" 
                                   title="NIK harus terdiri dari 16 digit angka" 
                                   required>
                        </div>
                    </div>
                    
                    <!-- Password -->
                    <div class="form-input-group">
                        <label for="password" class="form-label">Password</label>
                        <div class="password-container form-input-group">
                            <i class="fas fa-lock form-icon"></i>
                            <input id="password" type="password" name="password" 
                                   class="form-control" 
                                   placeholder="Masukkan password Anda" required>
                            <span class="toggle-password" onclick="togglePassword()">
                                <i class="fas fa-eye"></i>
                            </span>
                        </div>
                    </div>
                    
                    <!-- Remember & Forgot -->
                    <div class="remember-forgot">
                        <div class="remember-me">
                            <input type="checkbox" id="remember" class="me-2">
                            <label for="remember">Ingat saya</label>
                        </div>
                        <a href="#" class="forgot-password">Lupa Password?</a>
                    </div>
                    
                    <!-- Submit -->
                    <button type="submit" class="btn btn-primary-custom mt-1">
                        <i class="fas fa-sign-in-alt me-2"></i>MASUK
                    </button>
                    
                    <!-- Register Link -->
                    <div class="register-link">
                        Belum punya akun? <a href="register">Daftar disini</a>
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
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            // e.preventDefault();
            
            // Get form values
            const nik = document.getElementById('nik').value;
            const password = document.getElementById('password').value;
            
            // Simple validation
            if (!nik || !password) {
                alert('Harap masukkan NIK dan password');
                return;
            }
            
            // Validate NIK format (16 digits)
            if (!/^\d{16}$/.test(nik)) {
                alert('NIK harus terdiri dari 16 digit angka');
                return;
            }
            
            // Simulate login process
            showLoading();
            
            // Simulate API call
            setTimeout(() => {
                hideLoading();
                alert('Login berhasil! Selamat datang kembali di Puskesmas Gunung Sari.');
                // In a real app, you would redirect to the dashboard
                // window.location.href = 'dashboard.html';
            }, 1500);
        });
        
        function showLoading() {
            const btn = document.querySelector('#loginForm button[type="submit"]');
            btn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Memproses...';
            btn.disabled = true;
        }
        
        function hideLoading() {
            const btn = document.querySelector('#loginForm button[type="submit"]');
            btn.innerHTML = '<i class="fas fa-sign-in-alt me-2"></i>MASUK';
            btn.disabled = false;
        }
    </script>
</body>
</html>