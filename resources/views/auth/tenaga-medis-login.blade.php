<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Tenaga Medis - Puskesmas Gunung Sari</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <style>
        :root {
            --primary-color: #2bbd9e;
            --secondary-color: #1da58a;
        }

        body {
            background: linear-gradient(135deg, #e7e9ef, #e0dbe6);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 15px;
        }

        .auth-container {
            max-width: 800px;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
            display: flex;
        }

        .welcome-panel {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 2rem;
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            position: relative;
        }

        .welcome-panel::before,
        .welcome-panel::after {
            content: "";
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
        }
        .welcome-panel::before {
            top: -50px;
            right: -50px;
            width: 150px;
            height: 150px;
        }
        .welcome-panel::after {
            bottom: -80px;
            left: -30px;
            width: 200px;
            height: 200px;
            background: rgba(255, 255, 255, 0.08);
        }

        .welcome-icon {
            font-size: 60px;
            margin-bottom: 20px;
            z-index: 1;
            color: rgba(255, 255, 255, 0.9);
        }

        .welcome-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 15px;
            z-index: 1;
        }

        .welcome-text {
            font-size: 14px;
            line-height: 1.6;
            max-width: 300px;
            z-index: 1;
        }

        .form-panel {
            background: #fff;
            padding: 2rem;
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .login-title {
            font-size: 22px;
            color: var(--primary-color);
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
        }

        .form-input-group {
            position: relative;
            margin-bottom: 1.2rem;
        }

        .form-icon {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--primary-color);
            font-size: 16px;
        }

        .form-control {
            border-radius: 8px;
            padding: 10px 15px 10px 40px;
            border: 1px solid #ddd;
            font-size: 14px;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.2rem rgba(43, 189, 158, 0.25);
        }

        .btn-primary-custom {
            background-color: var(--primary-color);
            border: none;
            color: #fff;
            font-weight: 600;
            border-radius: 8px;
            padding: 10px;
            width: 100%;
            transition: 0.3s;
        }

        .btn-primary-custom:hover {
            background-color: var(--secondary-color);
            box-shadow: 0 5px 12px rgba(43, 189, 158, 0.3);
        }

        .error-text {
            color: #e74c3c;
            font-size: 13px;
            margin-top: 5px;
        }

        @media (max-width: 767.98px) {
            .auth-container {
                flex-direction: column;
            }
            .welcome-panel {
                padding: 1.5rem;
            }
        }
    </style>
</head>

<body>
    <div class="auth-container">
        <!-- LEFT PANEL -->
        <div class="welcome-panel">
            <i class="fas fa-user-nurse welcome-icon"></i>
            <h2 class="welcome-title">Login Tenaga Medis</h2>
            <p class="welcome-text">
                Silakan masuk untuk mengakses data pasien, jadwal praktik, dan fitur lain yang disediakan untuk tenaga medis Puskesmas Gunung Sari.
            </p>
        </div>

        <!-- RIGHT PANEL -->
        <div class="form-panel">
            <h3 class="login-title">Masuk ke Akun Anda</h3>
            <form method="POST" action="{{ route('tenaga-medis.login.post') }}">
                @csrf

                <!-- NIP -->
                <div class="form-input-group">
                    <i class="fas fa-id-badge form-icon"></i>
                    <input type="text" name="nip" id="nip" class="form-control @error('nip') is-invalid @enderror"
                           placeholder="Masukkan NIP Anda" value="{{ old('nip') }}" required>
                    @error('nip')
                        <p class="error-text">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password -->
                <div class="form-input-group">
                    <i class="fas fa-lock form-icon"></i>
                    <input type="password" name="password" id="password" 
                           class="form-control @error('password') is-invalid @enderror" 
                           placeholder="Masukkan password" required>
                    @error('password')
                        <p class="error-text">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Tombol -->
                <button type="submit" class="btn btn-primary-custom mt-2">
                    <i class="fas fa-sign-in-alt me-2"></i>Login Staff
                </button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
