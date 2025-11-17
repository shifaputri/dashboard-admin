<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard Overview</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <div class="dashboard-container">
    <aside class="sidebar">
      <h2 class="logo">Dashboard.</h2>
      <nav class="menu">
        <a href="index.php" class="active">🏠 Dashboard</a>
        <a href="produk.php">📦 Manajemen Produk</a>
        <a href="pesanan.php">🧾 Pesanan</a>
        <a href="galeri.php"><i class="bi bi-image-alt"></i> Galeri</a>
      </nav>
      <a href="#" class="logout">↩️ Keluar</a>
    </aside>

    <main class="main-content">
      <header>
        <h1>Dashboard Overview</h1>
      </header>

      <section class="stats">
        <div class="card">
          <h3>Total Produk</h3>
          <p class="number">55</p>
        </div>
        <div class="card">
          <h3>Total Merk</h3>
          <p class="number">7</p>
        </div>
      </section>

      <section class="activity">
        <h3>Riwayat Aktivitas</h3>
        <table>
          <thead>
            <tr>
              <th>Aktivitas</th>
              <th>Tanggal</th>
              <th>Waktu</th>
            </tr>
          </thead>
          <tbody>
            <tr><td>Admin menambahkan produk</td><td>17/07/25</td><td>22.30</td></tr>
            <tr><td>Admin menambahkan produk</td><td>17/07/25</td><td>22.30</td></tr>
            <tr><td>Admin menambahkan produk</td><td>17/07/25</td><td>22.30</td></tr>
          </tbody>
        </table>
      </section>
    </main>
  </div>
</body>
</html>
