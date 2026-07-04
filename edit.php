<?php
include 'koneksi.php';

$pesan = "";

// Ambil data berdasarkan ID
$id = (int) $_GET['id'];
$data = mysqli_query($conn, "SELECT * FROM menu WHERE id = $id");
$row = mysqli_fetch_assoc($data);

if (!$row) {
  header("Location: kelola.php");
  exit();
}

// Proses update
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $nama  = mysqli_real_escape_string($conn, $_POST['nama_menu']);
  $harga = (int) $_POST['harga'];
  $emoji = mysqli_real_escape_string($conn, $_POST['emoji']);
  $kat   = mysqli_real_escape_string($conn, $_POST['kategori']);

  if ($nama == "" || $harga == 0) {
    $pesan = "Nama menu dan harga wajib diisi!";
  } else {
    $sql = "UPDATE menu SET nama_menu='$nama', harga=$harga, emoji='$emoji', kategori='$kat' WHERE id=$id";
    if (mysqli_query($conn, $sql)) {
      header("Location: kelola.php");
      exit();
    } else {
      $pesan = "Gagal memperbarui data!";
    }
  }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Menu - Never Potato!</title>
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

  <div class="form-wrap">
    <h2>EDIT MENU</h2>

    <?php if ($pesan != ""): ?>
      <div class="alert"><?= $pesan ?></div>
    <?php endif; ?>

    <form method="POST" action="edit.php?id=<?= $id ?>">

      <div class="form-group">
        <label>Nama Menu</label>
        <input type="text" name="nama_menu" value="<?= htmlspecialchars($row['nama_menu']) ?>" required>
      </div>

      <div class="form-group">
        <label>Harga</label>
        <input type="number" name="harga" value="<?= $row['harga'] ?>" required>
      </div>

      <div class="form-group">
        <label>Emoji Ikon</label>
        <input type="text" name="emoji" value="<?= $row['emoji'] ?>" maxlength="2">
      </div>

      <div class="form-group">
        <label>Kategori</label>
        <select name="kategori">
          <option value="Original" <?= $row['kategori']=='Original' ? 'selected' : '' ?>>Original</option>
          <option value="Cheese" <?= $row['kategori']=='Cheese' ? 'selected' : '' ?>>Cheese</option>
          <option value="Matcha" <?= $row['kategori']=='Matcha' ? 'selected' : '' ?>>Matcha</option>
          <option value="Chocolate" <?= $row['kategori']=='Chocolate' ? 'selected' : '' ?>>Chocolate</option>
          <option value="Lainnya" <?= $row['kategori']=='Lainnya' ? 'selected' : '' ?>>Lainnya</option>
        </select>
      </div>

      <div class="form-btns">
        <button type="submit" class="btn-simpan">Simpan Perubahan</button>
        <a href="kelola.php" class="btn-kembali">Batalkan Perubahan</a>
      </div>

    </form>
  </div>

</main>

<!-- CHECKER BOTTOM -->
<div class="checker"></div>

</body>
</html>