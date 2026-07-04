<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Never Potato!</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- NAVBAR -->
<nav>
  <div class="nav-logo">NEVER<br>POTATO!</div>
  <a href="index.php" class="active">BERANDA</a>
  <a href="menu.php">MENU</a>
  <a href="tambah.php">+MENU BARU</a>
  <a href="kelola.php">KELOLA</a>
</nav>

<!-- CHECKER -->
<div class="checker"></div>

<!-- MAIN -->
<main>

  <!-- HERO -->
  <div class="hero">
    <img src="cup_boba.png" alt="Cup Boba" class="cup-boba">
    <div class="hero-text">
      <h1>NEVER<br>POTATO!</h1>
      <p>Minuman kekinian berbahan ubi ungu asli</p>
      <p><strong>POKONYA INI UBI BUKAN KENTANG</strong></p>
    </div>
  </div>

</main>

<!-- CHECKER BOTTOM -->
<div class="checker"></div>

<!-- MODAL HAPUS -->
<div class="modal-bg" id="modalHapus">
  <div class="modal-box">
    <div class="modal-icon">🗑️</div>
    <h3>HAPUS ITEM?</h3>
    <p id="modalNama">Data ini akan dihapus permanen dan tidak bisa dikembalikan.</p>
    <div class="modal-btns">
      <a href="#" id="btnKonfirmHapus" class="btn-konfirm-hapus">Hapus</a>
      <button class="btn-konfirm-batal" onclick="tutupModal()">Batal</button>
    </div>
  </div>
</div>

<script>
function tutupModal() {
  document.getElementById('modalHapus').classList.remove('show');
}
</script>

</body>
</html>