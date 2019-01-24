<?php
    require_once '../../conn.php';

    $nama_lengkap = $_POST['nama_lengkap'];
    $npm = $_POST['npm'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal = $_POST['tanggal_lahir'];
    $alamat = $_POST['alamat'];
    $angkatan = $_POST['angkatan'];
    $no_hp = $_POST['no_hp'];
    $email = $_POST['email'];
    $filename = $_FILES['foto']['name'];
    $filesize = $_FILES['foto']['size'];
    $filesource = $_FILES['foto']['tmp_name'];
    $fileformat = pathinfo($filename, PATHINFO_EXTENSION);

    //explode data dari datepicker
  	$x = explode(" ", $tanggal);
      $y = explode("/", $x[0]);
      $bln = $y['0'];
      $tgl = $y['1'];
      $thn = $y['2'];
      $tanggal_lahir = "".$thn."-".$bln."-".$tgl."";

      if ($filesource != "") {
    		if ($filesize < 5000000) {
    			if ($fileformat == 'jpg' || $fileformat == 'png' || $fileformat == 'jpeg') {
    				$date = date('m/d/Y h:i:s a', time());
    				$imagename = "".md5($date).".png";
    				move_uploaded_file($filesource, "../../../storage/member/".$imagename."");
    				$query = "INSERT INTO anggota (nama_lengkap,npm,tempat_lahir,tanggal_lahir,alamat,angkatan,no_hp,email,foto)
            VALUES ('$nama_lengkap','$npm','$tempat_lahir','$tanggal_lahir','$alamat','$angkatan','$no_hp','$email','$imagename')
            ";

    				if ($result = mysqli_query($conn,$query)) {
    				?>
    				<!-- ini adalah cara memotong script php -->
    			    <script> //akan muncul jika data berhasil diinputkan
    			    	alert('Data Berhasil disimpan !!!');
    			    	window.location='../../../index.php?p=operator/member/home';
    			    </script>";
    				<?php
    				} else {
    					?>
    					<!-- ini adalah cara memotong script php -->
    				    <script> //akan muncul jika data berhasil diinputkan
    				    	alert('Data Gagal disimpan !!!');
    				    	window.location='../../../index.php?p=operator/member/home';
    				    </script>";
    					<?php
    				}
    			} else {
    				?>
    				<!-- ini adalah cara memotong script php -->
    			    <script> //akan muncul jika data berhasil diinputkan
    			    	alert('Ektensi File yang dimasukan salah !!!');
    			    	window.location='../../../index.php?p=operator/member/home';
    			    </script>";
    				<?php
    			}
    		} else {
    			?>
    			<!-- ini adalah cara memotong script php -->
    		    <script> //akan muncul jika data berhasil diinputkan
    		    	alert('Ukuran Gambar Terlalu Besar !!!');
    		    	window.location='../../../index.php?p=operator/member/home';
    		    </script>";
    			<?php
    		}
      }
 ?>
