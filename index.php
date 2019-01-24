<?php
	session_start();
    if (!isset($_SESSION["id_pengguna"] ))
    {
        header('location:login.php');
    }
		include 'engine/conn.php';
    include 'view/layout.php';
?>
