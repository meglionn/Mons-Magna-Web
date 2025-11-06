<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Mons Magna | Dashboard</title>
  <style>
    * {
      box-sizing: border-box;
      font-family: "Inter", sans-serif;
    }

    body {
      margin: 0;
      background-color: #f9fafb;
      color: #111827;
    }

    header {
      background-color: #fff;
      border-bottom: 1px solid #e5e7eb;
      padding: 16px 40px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    header .title {
      display: flex;
      align-items: center;
      gap: 12px;
    }

    header img {
      height: 36px;
      width: 36px;
    }

    header h1 {
      font-size: 20px;
      margin: 0;
    }

    header p {
      margin: 0;
      color: #6b7280;
      font-size: 14px;
    }

    .user-info {
      display: flex;
      align-items: center;
      gap: 12px;
      color: #374151;
    }

    .user-info button {
      background-color: #f3f4f6;
      border: 1px solid #d1d5db;
      border-radius: 8px;
      padding: 6px 12px;
      cursor: pointer;
    }

    nav {
      background-color: #fff;
      border-bottom: 1px solid #e5e7eb;
      display: flex;
      gap: 12px;
      padding: 10px 40px;
    }

    nav button {
      border: none;
      background: #f9fafb;
      border-radius: 8px;
      padding: 6px 12px;
      cursor: pointer;
      color: #374151;
    }

    nav button.active {
      background-color: #000;
      color: white;
    }

    main {
      padding: 32px 40px;
    }

    .section-title {
      font-size: 18px;
      font-weight: 600;
      margin-bottom: 8px;
    }

    .section-subtitle {
      color: #6b7280;
      margin-bottom: 20px;
      font-size: 14px;
    }

    .card-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
      gap: 16px;
      margin-bottom: 30px;
    }

    .card {
      background: white;
      border-radius: 12px;
      padding: 16px;
      border: 1px solid #e5e7eb;
      text-align: left;
      box-shadow: 0 1px 2px rgba(0,0,0,0.03);
    }

    .card h3 {
      font-size: 14px;
      color: #374151;
      margin: 0 0 6px;
    }

    .card p {
      font-size: 24px;
      font-weight: 600;
      margin: 0;
    }

    .actions {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-top: 30px;
      margin-bottom: 12px;
    }

    .actions input {
      padding: 8px 12px;
      border-radius: 8px;
      border: 1px solid #d1d5db;
      width: 250px;
    }

    .actions button {
      background-color: #000;
      color: white;
      border: none;
      border-radius: 8px;
      padding: 8px 16px;
      cursor: pointer;
    }

    footer {
      text-align: center;
      color: #9ca3af;
      font-size: 12px;
      padding: 20px;
      border-top: 1px solid #e5e7eb;
      margin-top: 40px;
    }
  </style>
</head>
<body>
  <header>
    <div class="title">
      <img src="https://upload.wikimedia.org/wikipedia/commons/3/3f/Placeholder_view_vector.svg" alt="Logo" />
      <div>
        <h1>Mons Magna</h1>
        <p>Sistem Manajemen Produk & Inventori</p>
      </div>
    </div>
    <div class="user-info">
      <span>Login sebagai <strong>Owner</strong></span>
      <button>Keluar</button>
    </div>
  </header>

  <nav>
    <button class="active">Pesanan</button>
    <button>Inventori Bahan</button>
    <button>Keuangan</button>
    <button>Laporan</button>
  </nav>

  <main>
    <section>
      <h2 class="section-title">Manajemen Pesanan</h2>
      <p class="section-subtitle">Kelola pesanan produksi dan pesanan sepatu custom</p>

      <div class="card-grid">
        <div class="card"><h3>Total Pesanan</h3><p>0</p></div>
        <div class="card"><h3>Pesanan Produksi</h3><p>0</p></div>
        <div class="card"><h3>Pesanan Custom</h3><p>0</p></div>
        <div class="card"><h3>Pesanan Aktif</h3><p>0</p></div>
        <div class="card"><h3>Selesai</h3><p>0</p></div>
      </div>
    </section>

    <section>
      <div class="actions">
        <h2 class="section-title">Pelacakan Pesanan & Produksi</h2>
        <button>+ Pesanan Produksi Baru</button>
      </div>
      <p class="section-subtitle">Pantau dan kelola pesanan produksi sepatu</p>

      <div class="card-grid">
        <div class="card"><h3>Total Pesanan</h3><p>0</p></div>
        <div class="card"><h3>Dalam Proses</h3><p>0</p></div>
        <div class="card"><h3>Selesai</h3><p>0</p></div>
        <div class="card"><h3>Ditunda</h3><p>0</p></div>
        <div class="card"><h3>Produksi</h3><p>0/0</p></div>
      </div>

      <div class="actions">
        <input type="text" placeholder="Cari pesanan produksi..." />
        <div>
          <button>Semua</button>
          <button>Pending</button>
          <button>Dalam Proses</button>
          <button>Cek Kualitas</button>
          <button>Selesai</button>
        </div>
      </div>
    </section>
  </main>

  <footer>© 2025 Mons Magna. Hak cipta dilindungi.</footer>
</body>
</html>
