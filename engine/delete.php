<?php
	include "koneksi.php";
	$id_surat= $_GET['id_surat'];

	$filename= $_REQUEST['foto_surat'];

	if ($filename!="") {
		$path = '../storage/'.$filename.'';
		unlink($path);
	}

	$query = "DELETE FROM catatan_surat WHERE id_surat = '$id_surat'";
	$hapus = mysql_query($query);

  	?>

    <script>
        alert('Data berhasil dihapus');
        <?php
        if ($_REQUEST['status_surat']=="surat masuk"){
            ?>
            window.location='../index.php?p=surat-masuk';
            <?php
        }
        else{
            ?>
            window.location='../index.php?p=surat-keluar';
            <?php
        }
        ?>
    </script>

    <?php

?>