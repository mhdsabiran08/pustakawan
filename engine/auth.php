<?php
	session_start();
	require_once "conn.php";
	$username = $_REQUEST['username'];
	$password = $_REQUEST['password'];
	$level = $_REQUEST['level'];

	// query untuk mendapatkan record dari username
	$sql = "SELECT * FROM pengguna WHERE username = '$username' AND level = '$level'";
	$query = mysqli_query($conn,$sql);
	$data = mysqli_fetch_array($query);

	// cek kesesuaian password
	if ($password == $data['password']){
	    // menyimpan username dan level ke dalam session
			$_SESSION['id_pengguna'] = $data['id_pengguna'];
			$_SESSION['nama_lengkap'] = $data['nama_lengkap'];
	    $_SESSION['level'] = $data['level'];
	    ?>
	    <script>
	    	alert('Selamat! Login berhasil.');
    		window.location='../index.php?p=dashboard';
	    </script>";
		<?php
	}
	else
		header("Location:../login.php?p&error=true");
?>
