<?php
ob_start();
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
$_SESSION['user'] = $user;
$Open = mysql_connect("localhost","root","");
if(!$Open){
	die("Koneksi ke Engine MySQL gagal!<br>");
}
$Koneksi = mysql_select_db("Untan");
if(!$Koneksi){
	die("Koneksi ke Database Gagal!");
}
$sql = "SELECT * FROM admin where username='$username' and password='$password'";
$qry = mysql_query($sql);
$row = mysql_fetch_array($qry);
$num = mysql_num_rows($qry)==1;

if($num==0){
	?>
	<script language="Javascript">
	alert("Username atau Password tidak sesuai!");
	document.location="index.php";
	</script>
	<?php
}
else {
	$_SESSION['login']=1;
	header("Location:admin.php");
}
mysql_close($Open);//Tutup koneksi ke engine MySQl
?>