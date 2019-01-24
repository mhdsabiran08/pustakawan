<?php
    require_once '../../conn.php';

    $sql = "UPDATE pengguna SET
        nama_lengkap='".$_POST['nama_lengkap']."',
        username='".$_POST['username']."',
        password='".$_POST['password']."',
        level='".$_POST['level']."'
        WHERE id_pengguna = ".$_GET['id_pengguna']."
    ";
    if ($query = mysqli_query($conn, $sql)) {
      ?>
      <script>
        alert('Data Berhasil diubah.');
        window.location='../../../index.php?p=admin/user/home';
      </script>";
      <?php
    } else {
      echo "Data gagal disimpan";
    }
 ?>
