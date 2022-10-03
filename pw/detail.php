<?php
session_start();

require 'function.php';

// jika tidak ada id di url
if (!isset($_GET['id'])) {
  header("Location: index.php");
  exit;
}

// ambil id dari URL
$id = $_GET['id'];

// query buku berdasarkan id
$m = query("SELECT * FROM buku WHERE id = $id");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Buku</title>
</head>

<body>
  <h3>Detail Buku</h3>
  <ul>
    <li><img src="img/<?= $m['gambar']; ?>" alt=""></li>
    <li>Nama : <?= $m['nama']; ?></li>
    <li>Penulis : <?= $m['penulis']; ?></li>
    <li>Harga : <?= $m['harga']; ?></li>
    <li><a href="ubah.php?id=<?= $m['id']; ?>">Ubah</a> | <a href="hapus.php?id=<?= $m['id']; ?>" onclick="return confirm('apakah anda yakin?')">Hapus</a></li>
    <li><a href="index.php">Kembali ke daftar buku</a></li>
  </ul>
</body>

</html>