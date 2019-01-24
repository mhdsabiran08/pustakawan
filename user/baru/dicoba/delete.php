<?php
include "koneksi.php";
$id_user=$_GET['id_user'];
$row=mysql_fetch_array(mysql_query("select * from dicoba where id_user='$id_user'"));
$photo=$row['photo'];

$query=mysql_query("delete from dicoba where id_user='$id_user'");
if($query){
	$nama_file="./photo/".$photo;
	unlink($nama_file);
	echo "DATA SUDAH DIHAPUS!	 <a href=view_data.php>View Data</a>";
	}
?>
