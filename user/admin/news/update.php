<?php
include('config.php');
 
//tangkap data dari form
$id = $_POST['user_id'];
$Judul = $_POST['judul'];
$Tanggal = $_POST['tanggal'];
$Isi = $_POST['isi'];
 
//update data di database sesuai user_id
$query = mysql_query("update news set judul='$judul', tanggal='$tanggal', isi='$isi' where user_id='$id'") or die(mysql_error());
 
if ($query) {
    header('location:view.php?message=success');
}