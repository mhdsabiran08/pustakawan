<?php
//panggil file config.php untuk menghubung ke server
include('config.php');
 
//tangkap data dari form
$judul = $_POST['judul'];
$kategori = $_POST['kategori'];
$fakultas = $_POST['fakultas'];
 
//simpan data ke database
$query = mysql_query("insert into event values('', '$judul', '$kategori', '$fakultas')") or die(mysql_error());
 
if ($query) {
    header('location:index.php?message=success');
}
