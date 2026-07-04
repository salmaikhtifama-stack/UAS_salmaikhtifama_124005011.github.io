<?php
include 'koneksi.php';
$query = mysqli_query($conn, "SELECT * FROM menu");
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menu - Never Potato!</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- NAVBAR -->
<nav>
  <div class="nav-logo">NEVER<br>POTATO!</div>
  <a href="index.php">BERANDA</a>
  <a href="menu.php" class="active">MENU</a>
  <a href="tambah.php">+MENU BARU</a>
  <a href="kelola.php">KELOLA</a>
</nav>

<div class="checker"></div>

<main>
  <p class="section-title">☆ SEMUA MENU ☆</p>

  <?php if (mysqli_num_rows($query) == 0): ?>
    <div class="alert">Belum ada menu. <a href="tambah.php">Tambah sekarang!</a></div>
  <?php else: ?>

  <div class="menu-grid">
    <?php while($row = mysqli_fetch_assoc($query)): ?>
    <div class="menu-card">
      <span class="icon"><?= $row['emoji'] ?></span>
      <h3><?= htmlspecialchars($row['nama_menu']) ?></h3>
      <p class="harga">Rp. <?= number_format($row['harga'], 0, ',', '.') ?></p>
      <p style="color:#e9d5ff; font-size:12px; margin-top:4px;"><?= $row['kategori'] ?></p>
    </div>
    <?php endwhile; ?>
  </div>

  <?php endif; ?>
</main>

<div class="checker"></div>

</body>
</html>