<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #2bbd9e;
            --secondary-color: #1da58a;
            --dark-color: #1a7a67;
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
            background: linear-gradient(135deg, var(--primary-color), var(--dark-color));
            overflow: hidden;
        }
        
        .auth-container {
            max-width: 800px;
            max-height: 95vh;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.25);
            margin: 0 auto;
            display: flex;
            background: white;
        }
        
        .welcome-panel {
            background: linear-gradient(135deg, var(--primary-color), var(--dark-color));
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
            content: '';
            position: absolute;
            top: -50px;
            right: -50px;
            width: 200px;
            height: 200px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
        }
        
        .welcome-panel::after {
            content: '';
            position: absolute;
            bottom: -30px;
            left: -30px;
            width: 150px;
            height: 150px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
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
        
        .logo {
            width: 80px;
            height: 80px;
            background: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            z-index: 1;
        }
        
        .logo i {
            font-size: 36px;
            color: var(--primary-color);
        }
        
        .btn-primary-custom {
            background: linear-gradient(to right, var(--primary-color), var(--dark-color));
            border: none;
            color: white;
            font-weight: 600;
            padding: 10px 16px;
            border-radius: 50px;
            transition: all 0.3s ease;
            width: 100%;
            font-size: 14px;
            box-shadow: 0 4px 10px rgba(43, 189, 158, 0.3);
        }
        
        .btn-primary-custom:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 15px rgba(43, 189, 158, 0.4);
        }
        
        .btn-outline-light-custom {
            border: 2px solid white;
            color: white;
            font-weight: 600;
            padding: 8px 20px;
            border-radius: 50px;
            transition: all 0.3s ease;
            background: transparent;
            font-size: 14px;
        }
        
        .btn-outline-light-custom:hover {
            background-color: white;
            color: var(--primary-color);
        }
        
        .form-control {
            border-radius: 8px;
            padding: 12px 20px 12px 45px;
            border: 1px solid #ddd;
            font-size: 14px;
            width: 100%;
            transition: all 0.3s ease;
            margin-bottom: 15px;
        }
        
        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.2rem rgba(43, 189, 158, 0.25);
        }
        
        .form-label {
            font-weight: 500;
            color: #495057;
            margin-bottom: 8px;
            display: block;
            font-size: 14px;
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
        
        .welcome-title {
            font-size: 28px;
            margin-bottom: 15px;
            font-weight: bold;
            z-index: 1;
        }
        
        .welcome-text {
            margin-bottom: 25px;
            font-size: 16px;
            line-height: 1.6;
            max-width: 300px;
            z-index: 1;
        }
        
        .login-title {
            font-size: 24px;
            color: var(--primary-color);
            margin-bottom: 25px;
            font-weight: bold;
            text-align: center;
            width: 100%;
        }
        
        .forgot-password {
            display: block;
            text-align: right;
            margin-top: -10px;
            margin-bottom: 20px;
            color: var(--primary-color);
            font-size: 13px;
            text-decoration: none;
        }
        
        .register-link {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #666;
        }
        
        .register-link a {
            color: var(--primary-color);
            font-weight: 600;
            text-decoration: none;
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
                font-size: 24px;
            }
            
            .login-title {
                font-size: 22px;
            }
        }
    </style>
</head>
<body>
    <div class="auth-container">
        <!-- LEFT PANEL - WELCOME -->
        <div class="welcome-panel">
            <div class="logo">
                <i class="fas fa-lock"></i>
            </div>
            <h2 class="welcome-title">Selamat Datang Kembali!</h2>
            <p class="welcome-text">
                Masuk ke akun Anda untuk melanjutkan pengalaman terbaik bersama layanan kami
            </p>
            <div>
                <a href="register.html" class="btn btn-outline-light-custom">
                    BUAT AKUN BARU
                </a>
            </div>
        </div>

        <!-- RIGHT PANEL - LOGIN FORM -->
        <div class="form-panel">
            <div class="form-content">
                <h2 class="login-title">Masuk ke Akun Anda</h2>
                
                <!-- LOGIN FORM -->
                <form id="loginForm">
                    <!-- NIK -->
                    <div>
                        <label for="login_nik" class="form-label">Nomor Induk Kependudukan (NIK)</label>
                        <div class="password-container">
                            <i class="fas fa-id-card form-icon"></i>
                            <input id="login_nik" type="text" name="nik" 
                                   class="form-control" 
                                   placeholder="Masukkan NIK Anda" required
                                   pattern="[0-9]{16}" 
                                   title="NIK harus 16 digit">
                        </div>
                    </div>
                    
                    <!-- Password -->
                    <div>
                        <label for="login_password" class="form-label">Password</label>
                        <div class="password-container">
                            <i class="fas fa-lock form-icon"></i>
                            <input id="login_password" type="password" name="password" 
                                   class="form-control" 
                                   placeholder="Masukkan password" required>
                            <span class="toggle-password" onclick="togglePassword('login_password')">
                                <i class="fas fa-eye"></i>
                            </span>
                        </div>
                    </div>
                    
                    <!-- Forgot Password -->
                    <a href="#" class="forgot-password">Lupa Password?</a>
                    
                    <!-- Submit -->
                    <button type="submit" class="btn btn-primary-custom">
                        <i class="fas fa-sign-in-alt me-2"></i>MASUK
                    </button>
                    
                    <!-- Register Link -->
                    <div class="register-link">
                        Belum punya akun? <a href="register.html">Daftar disini</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Toggle password visibility
        function togglePassword(inputId) {
            const passwordInput = document.getElementById(inputId);
            const toggleIcon = document.querySelector(`#${inputId}`).parentElement.querySelector('.toggle-password i');
            
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
            e.preventDefault();
            
            // Basic validation
            const nik = document.getElementById('login_nik').value;
            if (nik.length !== 16 || isNaN(nik)) {
                alert('NIK harus terdiri dari 16 digit angka');
                return;
            }
            
            // If validation passes, you can submit the form
            alert('Login berhasil! Anda akan diarahkan ke dashboard.');
            window.location.href = "dashboard.html";
        });
    </script>
</body>
</html>