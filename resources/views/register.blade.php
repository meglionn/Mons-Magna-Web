<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mons Magna | Register</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .register-wrapper {
            width: 100%;
            max-width: 420px;
        }

        .logo-container {
            text-align: center;
            margin-bottom: 32px;
        }

        .logo-box {
            width: 80px;
            height: 80px;
            background: white;
            border-radius: 16px;
            margin: 0 auto 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .logo-box svg {
            width: 48px;
            height: 48px;
        }

        .logo-container h1 {
            font-size: 28px;
            font-weight: 600;
            color: white;
            margin-bottom: 8px;
        }

        .subtitle {
            color: rgba(255, 255, 255, 0.9);
            font-size: 14px;
        }

        .card {
            background: white;
            border-radius: 16px;
            padding: 32px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        }

        .card h2 {
            font-size: 22px;
            font-weight: 600;
            color: #1a202c;
            margin-bottom: 8px;
        }

        .card > p {
            color: #718096;
            font-size: 14px;
            margin-bottom: 24px;
        }

        .error-message {
            background: #fee;
            border: 1px solid #fcc;
            padding: 12px;
            border-radius: 8px;
            margin-bottom: 16px;
            color: #c33;
            font-size: 14px;
        }

        .success-message {
            background: #efe;
            border: 1px solid #cfc;
            padding: 12px;
            border-radius: 8px;
            margin-bottom: 16px;
            color: #3c3;
            font-size: 14px;
        }

        form label {
            display: block;
            font-size: 14px;
            font-weight: 500;
            color: #2d3748;
            margin-bottom: 8px;
        }

        .input-group {
            position: relative;
            margin-bottom: 20px;
        }

        .input-group i {
            position: absolute;
            left: 14px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 18px;
        }

        .input-group input,
        .input-group select {
            width: 100%;
            padding: 12px 12px 12px 44px;
            border: 2px solid #e2e8f0;
            border-radius: 8px;
            font-size: 14px;
            transition: all 0.3s ease;
            outline: none;
        }

        .input-group input:focus,
        .input-group select:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
        }

        .input-group input::placeholder {
            color: #a0aec0;
        }

        .input-error {
            border-color: #fc8181 !important;
        }

        .error-text {
            color: #e53e3e;
            font-size: 12px;
            margin-top: 4px;
        }

        button[type="submit"] {
            width: 100%;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 14px;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
            margin-top: 8px;
        }

        button[type="submit"]:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(102, 126, 234, 0.4);
        }

        button[type="submit"]:active {
            transform: translateY(0);
        }

        .login-link {
            text-align: center;
            margin-top: 16px;
            color: #2d3748;
            font-size: 14px;
        }

        .login-link a {
            color: #667eea;
            text-decoration: none;
            font-weight: 600;
        }

        .login-link a:hover {
            text-decoration: underline;
        }

        footer {
            text-align: center;
            color: white;
            font-size: 13px;
            margin-top: 24px;
            opacity: 0.9;
        }

        @media (max-width: 480px) {
            .card {
                padding: 24px;
            }
            
            .logo-container h1 {
                font-size: 24px;
            }
        }
    </style>
</head>
<body>
    <div class="register-wrapper">
        <div class="logo-container">
            <div class="logo-box">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 2L2 7L12 12L22 7L12 2Z" stroke="#667eea" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M2 17L12 22L22 17" stroke="#667eea" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M2 12L12 17L22 12" stroke="#667eea" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            <h1>Mons Magna</h1>
            <div class="subtitle">Sistem Manajemen Inventori</div>
        </div>

        <div class="card">
            <h2>Buat Akun Baru</h2>
            <p>Daftar untuk mengakses sistem</p>

            @if (session('success'))
                <div class="success-message">
                    <strong>Berhasil!</strong> {{ session('success') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="error-message">
                    <strong>Error:</strong>
                    <ul style="margin: 8px 0 0 20px;">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <label for="nama_lengkap">Nama Lengkap</label>
                <div class="input-group">
                    <i>👤</i>
                    <input 
                        type="text" 
                        id="nama_lengkap" 
                        name="nama_lengkap" 
                        placeholder="Masukkan nama lengkap" 
                        value="{{ old('nama_lengkap') }}"
                        required
                        class="@error('nama_lengkap') input-error @enderror">
                </div>
                @error('nama_lengkap')
                    <p class="error-text">{{ $message }}</p>
                @enderror

                <label for="username">Username</label>
                <div class="input-group">
                    <i>🔑</i>
                    <input 
                        type="text" 
                        id="username" 
                        name="username" 
                        placeholder="Pilih username" 
                        value="{{ old('username') }}"
                        required
                        class="@error('username') input-error @enderror">
                </div>
                @error('username')
                    <p class="error-text">{{ $message }}</p>
                @enderror

                <label for="email">Email</label>
                <div class="input-group">
                    <i>📧</i>
                    <input 
                        type="email" 
                        id="email" 
                        name="email" 
                        placeholder="email@example.com" 
                        value="{{ old('email') }}"
                        required
                        class="@error('email') input-error @enderror">
                </div>
                @error('email')
                    <p class="error-text">{{ $message }}</p>
                @enderror

                <label for="password">Password</label>
                <div class="input-group">
                    <i>🔒</i>
                    <input 
                        type="password" 
                        id="password" 
                        name="password" 
                        placeholder="Masukkan password" 
                        required
                        class="@error('password') input-error @enderror">
                </div>
                @error('password')
                    <p class="error-text">{{ $message }}</p>
                @enderror

                <label for="password_confirmation">Konfirmasi Password</label>
                <div class="input-group">
                    <i>🔒</i>
                    <input 
                        type="password" 
                        id="password_confirmation" 
                        name="password_confirmation" 
                        placeholder="Ulangi password" 
                        required>
                </div>

                <label for="role">Role</label>
                <div class="input-group">
                    <i>👥</i>
                    <select 
                        id="role" 
                        name="role" 
                        required
                        class="@error('role') input-error @enderror">
                        <option value="">Pilih Role</option>
                        <option value="Owner" {{ old('role') == 'Owner' ? 'selected' : '' }}>Owner</option>
                        <option value="Admin" {{ old('role') == 'Admin' ? 'selected' : '' }}>Admin</option>
                        <option value="Produksi" {{ old('role') == 'Produksi' ? 'selected' : '' }}>Produksi</option>
                        <option value="Keuangan" {{ old('role') == 'Keuangan' ? 'selected' : '' }}>Keuangan</option>
                    </select>
                </div>
                @error('role')
                    <p class="error-text">{{ $message }}</p>
                @enderror

                <button type="submit">Daftar</button>
            </form>

            <div class="login-link">
                Sudah punya akun? <a href="{{ route('login') }}">Login di sini</a>
            </div>
        </div>

        <footer>© 2025 Mons Magna. Hak cipta dilindungi.</footer>
    </div>
</body>
</html>