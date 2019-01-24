<?php
//panggil file config.php untuk menghubung ke server
include('config.php');
 
//tangkap data dari form
$judul = $_POST['judul'];
$tanggal = $_POST['tanggal'];
$isi = $_POST['isi'];
 
//simpan data ke database
$query = mysql_query("insert into news values('', '$judul', '$tanggal', '$isi')") or die(mysql_error());
 
if ($query) {
    header('location:index.php?message=success');
}