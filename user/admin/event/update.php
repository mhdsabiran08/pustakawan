<?php
include('config.php');
 
//tangkap data dari form
$id = $_POST['user_id'];
$Judul = $_POST['judul'];
$Kategori = $_POST['kategori'];
$Fakultas = $_POST['fakultas'];
 
//update data di database sesuai user_id
$query = mysql_query("update event set judul='$judul', kategori='$kategori', fakultas='$fakultas', where user_id='$id'") or die(mysql_error());
 
if ($query) {
    header('location:view.php?message=success');
}