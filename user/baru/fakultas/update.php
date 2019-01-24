<?php
include('config.php');
 
//tangkap data dari form
$id = $_POST['user_id'];
$fakultas = $_POST['fakultas'];
$keterangan = $_POST['keterangan'];
 
//update data di database sesuai user_id
$query = mysql_query("update fakultas set fakultas='$fakultas', keterangan='$keterangan' where user_id='$id'") or die(mysql_error());
 
if ($query) {
    header('location:view.php?message=success');
}