<?php
$host="localhost";
$user="root";
$database="untan";

$koneksi=mysql_connect($host,$user);
mysql_select_db($database,$koneksi);

if($koneksi){
	//echo "berhasil login";
	}else{
	echo "gagal koneksi";
	}
?>