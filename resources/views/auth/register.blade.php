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
            --primary-color: #3fbbc0;
            --secondary-color: #3fbbc0;
        }
        
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            padding: 20px;
        }
        
        .auth-container {
            max-width: 900px;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            margin: 0 auto;
        }
        
        .welcome-panel {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 3rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center; /* Tambahkan untuk tengahkan horizontal */
            text-align: center;
        }
        
        .form-panel {
            background: white;
            padding: 3rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center; /* Tambahkan untuk tengahkan horizontal */
        }
        
        .form-content {
            width: 100%;
            max-width: 400px; /* Lebar maksimum konten form */
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
            padding: 10px 20px;
            border-radius: 50px;
            transition: all 0.3s ease;
            width: 100%;
            font-size: 16px;
        }
        
        .btn-outline-light-custom {
            border: 2px solid white;
            color: white;
            font-weight: 600;
            padding: 8px 25px;
            border-radius: 50px;
            transition: all 0.3s ease;
            background: transparent;
            font-size: 16px;
        }
        
        .btn-outline-light-custom:hover {
            background-color: white;
            color: var(--primary-color);
        }
        
        .form-control {
            border-radius: 50px;
            padding: 12px 20px;
            border: 1px solid #ddd;
            font-size: 16px;
            width: 100%; /* Pastikan input memenuhi kontainer */
        }
        
        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.25rem rgba(43, 189, 158, 0.25);
        }
        
        .divider {
            display: flex;
            align-items: center;
            text-align: center;
            color: #6c757d;
            margin: 20px 0;
            font-size: 14px;
            width: 100%; /* Lebar penuh */
        }
        
        .divider::before,
        .divider::after {
            content: '';
            flex: 1;
            border-bottom: 1px solid #dee2e6;
        }
        
        .divider::before {
            margin-right: 0.5rem;
        }
        
        .divider::after {
            margin-left: 0.5rem;
        }
        
        .welcome-title {
            font-size: 28px;
            margin-bottom: 15px;
            font-weight: bold;
        }
        
        .create-title {
            font-size: 24px;
            color: var(--primary-color);
            margin-bottom: 20px;
            font-weight: bold;
            text-align: center;
            width: 100%; /* Lebar penuh */
        }
        
        .welcome-text {
            margin-bottom: 25px;
            font-size: 16px;
            line-height: 1.6;
            max-width: 300px; /* Lebar maksimum teks */
        }
        
        @media (max-width: 767.98px) {
            .auth-container {
                margin: 0;
            }
            
            .welcome-panel, .form-panel {
                padding: 2rem;
            }
            
            .welcome-title {
                font-size: 24px;
            }
            
            .create-title {
                font-size: 22px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="auth-container shadow-lg">
            <div class="row w-100">
                <!-- LEFT PANEL - WELCOME -->
                <div class="col-md-6 welcome-panel">
                    <h2 class="welcome-title">Welcome Back!</h2>
                    <p class="welcome-text">
                        To keep connected with us please login with your personal info
                    </p>
                    <div>
                        <a href="#" class="btn btn-outline-light-custom">
                            SIGN IN
                        </a>
                    </div>
                </div>

                <!-- RIGHT PANEL - REGISTRATION FORM -->
                <div class="col-md-6 form-panel">
                    <div class="form-content">
                        <h2 class="create-title">Create Account</h2>
                        
                        <!-- SOCIAL ICONS -->
                        <div class="d-flex justify-content-center mb-3">
                            <a href="#" class="social-icon fb mx-2">
                                f
                            </a>
                            <a href="#" class="social-icon google mx-2">
                                G+
                            </a>
                            <a href="#" class="social-icon linkedin mx-2">
                                in
                            </a>
                        </div>
                        
                        <div class="divider">
                            <span>or use your email for registration</span>
                        </div>
                        
                        <!-- REGISTER FORM -->
                        <form>
                            <!-- Name -->
                            <div class="mb-3">
                                <input id="name" type="text" name="name" 
                                       class="form-control" 
                                       placeholder="Name" required>
                            </div>
                            
                            <!-- Email -->
                            <div class="mb-3">
                                <input id="email" type="email" name="email" 
                                       class="form-control" 
                                       placeholder="Email" required>
                            </div>
                            
                            <!-- Password -->
                            <div class="mb-4">
                                <input id="password" type="password" name="password" 
                                       class="form-control" 
                                       placeholder="Password" required>
                            </div>
                            
                            <!-- Submit -->
                            <button type="submit" class="btn btn-primary-custom">
                                DAFTAR
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>