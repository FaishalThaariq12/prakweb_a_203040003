<?php
require 'function.php';

// ambil id dari url
$id = $_GET['id'];

// query mahasiswa berdasarkan id
$row = query("SELECT * FROM buku WHERE id = $id");

// cek apakah tombol ubah sudah ditekan
if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
            alert('Data berhasil diubah');
            document.location.href = 'index.php';
          </script>";
  } else {
    echo "<script>
             alert('Data gagal diubah');
              document.location.href = 'index.php';
          </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah Data Buku</title>
</head>

<body>
  <h3>Form Ubah Data Buku</h3>
  <form action="" method="POST">
    <input type="hidden" name="id" value="<?= $row['id']; ?>">
    <ul>
      <li>
        <label>
          Nama :
          <input type="text" name="nama" autofocus required>
        </label>
      </li>
      <li>
        <label>
          Penulis :
          <input type="text" name="penulis" required>
        </label>
      </li>
      <li>
        <label>
          Penerbit :
          <input type="text" name="penerbit" required>
        </label>
      </li>
      <li>
        <label>
          Halaman :
          <input type="text" name="halaman" required>
        </label>
      </li>
      <li>
        <label>
          Gambar :
          <input type="image" name="gambar" required>
        </label>
      </li>
      <li>
        <button type="submit" name="ubah">Ubah Data!</button>
      </li>
    </ul>
  </form>
</body>

</html>