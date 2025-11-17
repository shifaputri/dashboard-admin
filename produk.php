<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Manajemen Produk</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
<div class="dashboard-container">
  <!-- SIDEBAR -->
  <aside class="sidebar">
    <div>
      <h2>Dashboard.</h2>
      <hr>
      <nav class="menu">
        <a href="index.php">📊 Dashboard</a>
        <a href="produk.php" class="active">👜 Manajemen Produk</a>
        <a href="pesanan.php">📋 Pesanan</a>
        <a href="galeri.php"><i class="bi bi-image-alt"></i></a>
      </nav>
    </div>
    <a href="#" id="logout">⏏ Keluar</a>
  </aside>

  <!-- KONTEN UTAMA -->
  <main class="main-content">
    <header>
      <h1>List Produk</h1>
    </header>

    <!-- FORM TAMBAH PRODUK -->
    <section class="form-produk">
      <div class="form-card">
        <div class="upload">
          <div class="upload-box">+ Image</div>
        </div>
        <form action="#" method="post">
          <label>Nama Produk</label>
          <input type="text" name="nama" placeholder="Nama produk">

          <label>Kategori/Merk</label>
          <input type="text" name="kategori" placeholder="Contoh: Yamaha F310">

          <label>Harga</label>
          <input type="number" name="harga" placeholder="Rp. 0">

          <label>Tambahkan Deskripsi</label>
          <textarea name="deskripsi" placeholder="Deskripsi singkat produk..."></textarea>

          <button type="submit" class="btn-tambah">Tambahkan Produk</button>
        </form>
      </div>
    </section>

    <!-- DAFTAR PRODUK -->
    <section class="produk-list">
      <h2>Daftar Produk</h2>
      <div class="produk-grid">
        <?php for($i=0; $i<8; $i++): ?>
          <div class="produk-item">
            <div class="produk-img"></div>
            <h3>Yamaha F310</h3>
            <p class="harga">Rp. 999.999</p>
            <p class="status">Tersedia: <span class="stok">5</span></p>
          </div>
        <?php endfor; ?>
      </div>
    </section>
  </main>
</div>
</body>
</html>
