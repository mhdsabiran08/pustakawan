<?php
    require_once '../../conn.php';

    $sql = "UPDATE kategori_buku SET nama_kategori_buku='".$_POST['nama_kategori_buku']."' WHERE id_kategori_buku=".$_GET['id_kategori_buku']."";

    if ($query = mysqli_query($conn, $sql)) {
      header("location: ../../../index.php?p=admin/c-book/home");
    } else {
      echo "Data gagal diubah";
    }
 ?>
