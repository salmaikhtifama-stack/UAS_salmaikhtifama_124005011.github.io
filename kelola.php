<?php
include 'koneksi.php';
$query = mysqli_query($conn, "SELECT * FROM menu");
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kelola Menu - Never Potato!</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- NAVBAR -->
<nav>
  <div class="nav-logo">NEVER<br>POTATO!</div>
  <a href="index.php">BERANDA</a>
  <a href="menu.php">MENU</a>
  <a href="tambah.php">+MENU BARU</a>
  <a href="kelola.php" class="active">KELOLA</a>
</nav>

<!-- CHECKER -->
<div class="checker"></div>

<!-- MAIN -->
<main>

  <p class="kelola-title">☆ KELOLA SEMUA MENU ☆</p>

  <?php if (mysqli_num_rows($query) == 0): ?>
    <div class="alert">Belum ada menu. <a href="tambah.php">Tambah sekarang!</a></div>
  <?php else: ?>

  <?php while($row = mysqli_fetch_assoc($query)): ?>
  <div class="kelola-item">
    <span style="font-size:28px;"><?= $row['emoji'] ?></span>
    <span class="nama"><?= htmlspecialchars($row['nama_menu']) ?></span>
    <span class="harga">| Rp. <?= number_format($row['harga'], 0, ',', '.') ?></span>
    <div class="aksi">
      <a href="edit.php?id=<?= $row['id'] ?>" class="btn-edit">✏ Edit</a>
      <a href="#" class="btn-hapus" onclick="bukaModal(<?= $row['id'] ?>, '<?= htmlspecialchars($row['nama_menu']) ?>')">🗑 Hapus</a>
    </div>
  </div>
  <?php endwhile; ?>

  <?php endif; ?>

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
function bukaModal(id, nama) {
  document.getElementById('modalHapus').classList.add('show');
  document.getElementById('modalNama').innerText = 'Hapus "' + nama + '"? Data tidak bisa dikembalikan!';
  document.getElementById('btnKonfirmHapus').href = 'hapus.php?id=' + id;
}
function tutupModal() {
  document.getElementById('modalHapus').classList.remove('show');
}
</script>

</body>
</html>