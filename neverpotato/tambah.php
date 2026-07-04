<?php
include 'koneksi.php';

$pesan = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $nama  = mysqli_real_escape_string($conn, $_POST['nama_menu']);
  $harga = (int) $_POST['harga'];
  $emoji = mysqli_real_escape_string($conn, $_POST['emoji']);
  $kat   = mysqli_real_escape_string($conn, $_POST['kategori']);

  if ($nama == "" || $harga == 0) {
    $pesan = "Nama menu dan harga wajib diisi!";
  } else {
    $sql = "INSERT INTO menu (nama_menu, harga, emoji, kategori) VALUES ('$nama', $harga, '$emoji', '$kat')";
    if (mysqli_query($conn, $sql)) {
      header("Location: index.php");
      exit();
    } else {
      $pesan = "Gagal menyimpan data!";
    }
  }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Menu - Never Potato!</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- NAVBAR -->
<nav>
  <div class="nav-logo">NEVER<br>POTATO!</div>
  <a href="index.php">BERANDA</a>
  <a href="menu.php">MENU</a>
  <a href="tambah.php" class="active">+MENU BARU</a>
  <a href="kelola.php">KELOLA</a>
</nav>

<!-- CHECKER -->
<div class="checker"></div>

<!-- MAIN -->
<main>

  <div class="form-wrap">
    <h2>TAMBAH MENU BARU</h2>

    <?php if ($pesan != ""): ?>
      <div class="alert"><?= $pesan ?></div>
    <?php endif; ?>

    <form method="POST" action="tambah.php">

      <div class="form-group">
        <label>Nama Menu</label>
        <input type="text" name="nama_menu" placeholder="NEVER POTATO ........." required>
      </div>

      <div class="form-group">
        <label>Harga</label>
        <input type="number" name="harga" placeholder="Rp. 15000" required>
      </div>

      <div class="form-group">
        <label>Emoji Ikon</label>
        <input type="text" name="emoji" placeholder="🍠" maxlength="2">
      </div>

      <div class="form-group">
        <label>Kategori</label>
        <select name="kategori">
          <option value="Original">Original</option>
          <option value="Cheese">Cheese</option>
          <option value="Matcha">Matcha</option>
          <option value="Chocolate">Chocolate</option>
          <option value="Lainnya">Lainnya</option>
        </select>
      </div>

      <div class="form-btns">
        <button type="submit" class="btn-simpan">Simpan Menu</button>
        <a href="index.php" class="btn-kembali">Kembali ke Beranda</a>
      </div>

    </form>
  </div>

</main>

<!-- CHECKER BOTTOM -->
<div class="checker"></div>

</body>
</html>