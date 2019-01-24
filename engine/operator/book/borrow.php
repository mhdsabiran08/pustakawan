<?php
  require_once '../../conn.php';

  $id_anggota = $_POST['id_anggota'];
  $id_buku = $_POST['id_buku'];
  $tgl_pinjam = $_POST['tgl_pinjam'];

  //explode data dari datepicker
  $x = explode(" ", $tgl_pinjam);
    $y = explode("/", $x[0]);
    $bln = $y['0'];
    $tgl_pinjam = $y['1'];
    $thn = $y['2'];
    $tgl_kembali = $tgl_pinjam + 14;
    $tanggal_pinjam = "".$thn."-".$bln."-".$tgl_pinjam."";
    $tanggal_kembali = "".$thn."-".$bln."-".$tgl_kembali."";

  $insert = "INSERT INTO pinjam (tanggal_pinjam,tanggal_kembali,id_buku,id_anggota)
  VALUES ('$tanggal_pinjam','$tanggal_kembali','$id_buku','$id_anggota')
  ";
  if ($result = mysqli_query($conn,$insert)) {
  ?>
  <!-- ini adalah cara memotong script php -->
    <script> //akan muncul jika data berhasil diinputkan
      alert('Data Berhasil disimpan !!!');
      window.location='../../../index.php?p=operator/borrow/home';
    </script>";
  <?php
  }

 ?>
