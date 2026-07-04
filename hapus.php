<?php
include 'koneksi.php';

$id = (int) $_GET['id'];

if ($id > 0) {
  $sql = "DELETE FROM menu WHERE id = $id";
  mysqli_query($conn, $sql);
}

header("Location: kelola.php");
exit();
?>