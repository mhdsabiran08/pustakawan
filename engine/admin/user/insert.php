<?php
  require_once '../../conn.php';

  $nama_lengkap = $_POST['nama_lengkap'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $level = $_POST['level'];

  $sql = "INSERT INTO pengguna (nama_lengkap,username,password,level) VALUES ('$nama_lengkap','$username','$password','$level')";

  if ($level == 0) {
    ?>
    <script>
      alert('Level tidak ada. COBA LAGI !!!!');
      window.location='../../../index.php?p=admin/user/home';
    </script>";
    <?php
  } else {
      if ($query = mysqli_query($conn, $sql)) {
        ?>
        <script>
          alert('Data Berhasil disimpan.');
          window.location='../../../index.php?p=admin/user/home';
        </script>";
        <?php
      }
  }

 ?>
