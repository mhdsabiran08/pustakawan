<?php

	require_once('koneksi.php');

	$nomor_surat = $_REQUEST['nomor_surat'];
	$perihal_surat = $_REQUEST['perihal_surat'];
	$tanggal = $_REQUEST['tanggal'];
	$instansi = $_REQUEST['instansi'];
	$status_surat = $_REQUEST['status_surat'];
	$file = $_FILES['foto_surat']['tmp_name']; //menerima file
	$filesize = $_FILES['foto_surat']['size']; //mengecek ukuran file

	$x = explode(" ", $tanggal);
    $y = explode("/", $x[0]);
    $tgl = $y['0'];
    $bln = $y['1'];
    $thn = $y['2'];

    $tanggal_surat = "".$thn."-".$bln."-".$tgl."";

	if($file=="")
	{
	$filename =""; //jika file tidak ada maka nama file kosong
    }
    else
    {
		$date = date('m/d/Y h:i:s a', time());
		$filename = "".md5($date).".png"; //jika file ada, maka nama file akan dibuat

		move_uploaded_file($file, "../storage/".$filename.""); //memindahkan file ke folder storage

		//di database cuma nyimpan gambar, sementara file asli dipindahkan ke folder
    }

    $input = "INSERT INTO catatan_surat(
	    		nomor_surat,
	    		perihal_surat,
	    		tanggal_surat,
	    		instansi,
	    		status_surat,
	    		foto_surat
    		)
    		VALUES(
	    		'$nomor_surat',
	    		'$perihal_surat',
	    		'$tanggal_surat',
	    		'$instansi',
	    		'$status_surat',
	    		'$filename'
    		)";
    mysql_query($input);

	?>
	<!-- ini adalah cara memotong script php -->
    <script> //akan muncul jika data berhasil diinputkan
    	alert('Data berhasil disimpan');
    	window.location='../index.php?p=input-data';
    </script>";
	<?php

?>