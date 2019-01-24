<?php
$dbhost = 'localhost';
$dbuser = 'root';     // ini berlaku di xampp
$dbpass = '';         // ini berlaku di xampp
$dbname = 'pustakawan';

// melakukan koneksi ke database
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// cek koneksi yang kita lakukan berhasil atau tidak
if (mysqli_connect_error())
{
echo "MySQLi Connection was not established: " . mysqli_connect_error();
}
?>
