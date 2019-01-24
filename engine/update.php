<?php

	require_once('koneksi.php');
	$filesize = $_FILES['foto_surat']['size'];
    $file = $_FILES['foto_surat']['tmp_name'];
    $tanggal = $_REQUEST['tanggal'];

    $x = explode(" ", $tanggal);
    $y = explode("/", $x[0]);
    $tgl = $y['0'];
    $bln = $y['1'];
    $thn = $y['2'];

    $tanggal_surat = "".$thn."-".$bln."-".$tgl."";

	if ($file!="") //jika dia ubah foto b
        {
            if($_POST['old_foto_surat'] == "")
            {
                $date = date('m/d/Y h:i:s a', time());
                $filename = "".md5($date).".png";
            }
            else
            {
                $filename = $_POST['old_foto_surat'];
            }

            move_uploaded_file($file, "../storage/".$filename."");

            $sql= "UPDATE catatan_surat SET
                nomor_surat='".$_POST['nomor_surat']."',
                tanggal_surat='".$tanggal_surat."',
                perihal_surat='".$_POST['perihal_surat']."',
                instansi='".$_POST['instansi']."',
                status_surat='".$_POST['status_surat']."',
                foto_surat='".$filename."'
                WHERE id_surat = ".$_GET['id_surat']."
            ";
            mysql_query($sql);
        }
        else
        {
            $sql= "UPDATE mahasiswa SET
                nomor_surat='".$_POST['nomor_surat']."',
                tanggal_surat='".$tanggal_surat."',
                perihal_surat='".$_POST['perihal_surat']."',
                instansi='".$_POST['instansi']."',
                status_surat='".$_POST['status_surat']."'
                WHERE id_surat = ".$_GET['id_surat']."
            ";
                mysql_query($sql);
        }

    ?>

    <script>
        alert('Data berhasil diubah');
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