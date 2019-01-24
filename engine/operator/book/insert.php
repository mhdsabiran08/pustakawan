<?php
    require_once '../../conn.php';

    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $penerbit = $_POST['penerbit'];
    $tahun = $_POST['tahun'];
    $stok = $_POST['stok'];
    $id_kategori_buku = $_POST['id_kategori_buku'];
    $filename = $_FILES['gambar']['name'];
    $filesize = $_FILES['gambar']['size'];
    $filesource = $_FILES['gambar']['tmp_name'];
    $fileformat = pathinfo($filename, PATHINFO_EXTENSION);

      if ($filesource != "") {
    		if ($filesize < 5000000) {
    			if ($fileformat == 'jpg' || $fileformat == 'png' || $fileformat == 'jpeg') {
    				$date = date('m/d/Y h:i:s a', time());
    				$imagename = "".md5($date).".png";
    				move_uploaded_file($filesource, "../../../storage/book/".$imagename."");
    				$query = "INSERT INTO buku (judul,pengarang,penerbit,tahun,stok,gambar)
            VALUES ('$judul','$pengarang','$penerbit','$tahun','$stok','$imagename')
            ";

    				if ($result = mysqli_query($conn,$query)) {
    				?>
    				<!-- ini adalah cara memotong script php -->
    			    <script> //akan muncul jika data berhasil diinputkan
    			    	alert('Data Berhasil disimpan !!!');
    			    	window.location='../../../index.php?p=operator/book/home';
    			    </script>";
    				<?php
    				} else {
    					?>
    					<!-- ini adalah cara memotong script php -->
    				    <script> //akan muncul jika data berhasil diinputkan
    				    	alert('Data Gagal disimpan !!!');
    				    	window.location='../../../index.php?p=operator/book/home';
    				    </script>";
    					<?php
    				}
    			} else {
    				?>
    				<!-- ini adalah cara memotong script php -->
    			    <script> //akan muncul jika data berhasil diinputkan
    			    	alert('Ektensi File yang dimasukan salah !!!');
    			    	window.location='../../../index.php?p=operator/book/home';
    			    </script>";
    				<?php
    			}
    		} else {
    			?>
    			<!-- ini adalah cara memotong script php -->
    		    <script> //akan muncul jika data berhasil diinputkan
    		    	alert('Ukuran Gambar Terlalu Besar !!!');
    		    	window.location='../../../index.php?p=operator/book/home';
    		    </script>";
    			<?php
    		}
      }
 ?>
