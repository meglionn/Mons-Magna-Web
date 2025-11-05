<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Mons Magna | Login</title>
  <link rel="stylesheet" href="{{ asset('css/login.css') }}">
  </head>
<body>
  <div class="login-wrapper">
    <div class="logo-container">
      <div class="logo-box">
        <img src= "Logo.jpeg" alt="Logo Mons Magna">
      </div>
      <h1>Mons Magna</h1>
      <div class="subtitle">Sistem Manajemen Inventori</div>
    </div>

    <div class="card">
      <h2>Selamat Datang Kembali</h2>
      <p>Masuk untuk mengakses dashboard Anda</p>

      <form id="loginForm">
        <label for="username">Nama Pengguna</label>
        <div class="input-group">
          <i></i>
          <input type="text" id="username" placeholder="Masukkan nama pengguna" required>
        </div>

        <label for="password">Kata Sandi</label>
        <div class="input-group">
          <i>🔒</i>
          <input type="password" id="password" placeholder="Masukkan kata sandi" required>
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
      keuangan: { password: 'keuangan123', role: 'Keuangan' },
    };

    document.getElementById('loginForm').addEventListener('submit', function (e) {
      e.preventDefault();
      const username = document.getElementById('username').value.toLowerCase();
      const password = document.getElementById('password').value;
      const user = credentials[username];
      
      if (user && user.password === password) {
        alert('Login berhasil! Selamat datang, ' + user.role);
      } else {
        alert('Nama pengguna atau kata sandi salah.');
      }
    });
  </script>
</body>
</html>
