<?php
//panggil file config.php untuk menghubung ke server
include('config.php');
 
//tangkap data dari form
$Fakultas = $_POST['fakultas'];
$Keterangan = $_POST['keterangan'];
 
//simpan data ke database
$query = mysql_query("insert into fakultas values('', '$fakultas', '$keterangan')") or die(mysql_error());
 
if ($query) {
    header('location:index.php?message=success');
}