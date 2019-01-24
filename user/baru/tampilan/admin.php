<?php
session_start();
if(!isset($_SESSION['login'])){
	include("index.php");
}
else{
	?>

<html><head>
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1">
<title>UNTAN</title>
<link rel="stylesheet" type="text/css" href="file/style.css">
</head>
<body>
		<div class="wrap">
			<div class="header">
				<div class="LeftOne">
					<a href="#">
					</a>
				</div>
				<div class="LeftOne">
					<div class="cart">
						<span class="KetCart"><center>SISTEM INFORMASI UNIVERSITAS TANJUNGPURA (SI'AN)</center></span>
					</div>
				</div>
			</div>
			<br class="clearfloat">
	<div class="BigCOntent">
		<div class="LeftContent">
			<div id="navigation">
			  <ul class="top-level">
				<li><a href="http://localhost/SIB/user/baru/tampilan/admin.php">Home</a></li>
				<li><a href="http://localhost/SIB/user/baru/dicoba/">Kegiatan</a></li>
				<li><a href="http://localhost/SIB/user/baru/berita/">Berita</a></li>
				<li><a href="Logout.php">Logout</a></li>
			  </ul>
			</div>
		</div>
		<div class="RightContent">
			<h1 class="Judul">Selamat Datang Di Halaman Admin</h1>
	</div>
				<br class="clearfloat">
		</div>
	

</body></html>

<?php
}
?>