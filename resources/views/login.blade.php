<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mons Magna | Login</title>
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

        .login-wrapper {
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

        .input-group input {
            width: 100%;
            padding: 12px 12px 12px 44px;
            border: 2px solid #e2e8f0;
            border-radius: 8px;
            font-size: 14px;
            transition: all 0.3s ease;
            outline: none;
        }

        .input-group input:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
        }

        .input-group input::placeholder {
            color: #a0aec0;
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
    <div class="login-wrapper">
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
            <h2>Selamat Datang Kembali</h2>
            <p>Masuk untuk mengakses dashboard Anda</p>

            <form id="loginForm" method="POST" action="{{ route('login') }}">
                @csrf
                <label for="username">Nama Pengguna</label>
                <div class="input-group">
                    <i>👤</i>
                    <input type="text" id="username" name="username" placeholder="Masukkan nama pengguna" required>
                </div>

                <label for="password">Kata Sandi</label>
                <div class="input-group">
                    <i>🔒</i>
                    <input type="password" id="password" name="password" placeholder="Masukkan kata sandi" required>
                </div>

                <button type="submit">Masuk</button>
            </form>
        </div>

        <footer>© 2025 Mons Magna. Hak cipta dilindungi.</footer>
    </div>

    <script>
        const credentials = {
            owner: { password: 'owner123', role: 'Owner' },
            admin: { password: 'admin123', role: 'Admin' },
            produksi: { password: 'produksi123', role: 'Produksi' },
            keuangan: { password: 'keuangan123', role: 'Keuangan' }    
        };

        document.getElementById('loginForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const username = document.getElementById('username').value.toLowerCase();
            const password = document.getElementById('password').value;
            const user = credentials[username];
            
            if (user && user.password === password) {
                alert('Login berhasil! Selamat datang, ' + user.role);
                // In a real Laravel app, the form would submit to the server
                // this.submit();
            } else {
                alert('Nama pengguna atau kata sandi salah.');
            }
        });
    </script>

    <div class="login-link" style="text-align: center; margin-top: 16px; color: #2d3748; font-size: 14px;">
        Belum punya akun? <a href="{{ route('register') }}" style="color: #667eea; text-decoration: none; font-weight: 600;">Daftar di sini</a>
    </div>
</body>
</html>