<?php
  require_once '../../conn.php';

  $id_pengguna = $_GET['id_pengguna'];

  $sql = "DELETE FROM pengguna WHERE id_pengguna = '$id_pengguna'";

  if ($query = mysqli_query($conn, $sql)) {
    ?>
    <script>
      alert('Data Berhasil dihapus.');
      window.location='../../../index.php?p=admin/user/home';
    </script>";
    <?php
  } else {
    echo "Gagal menghapus data";
  }
 ?>
