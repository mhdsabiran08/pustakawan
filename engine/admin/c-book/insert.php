<?php
  require_once '../../conn.php';

  $nama_kategori_buku = $_POST['nama_kategori_buku'];

  $sql = "INSERT INTO kategori_buku (nama_kategori_buku) VALUES ('$nama_kategori_buku')";

  if ($query = mysqli_query($conn, $sql)) {
    header("location: ../../../index.php?p=admin/c-book/home");
  } else {
    echo "Data gagal disimpan";
  }

 ?>
