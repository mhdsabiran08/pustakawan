<?php
include "koneksi.php";
if(isset($_POST['submit'])){

	$id_user=$_POST['id_user'];
	$judul=addslashes(htmlentities(ucwords($_POST['judul'])));
	$tanggal=addslashes(htmlentities($_POST['tanggal']."-".$_POST['bulan']."-".$_POST['tahun']));
	$isi=addslashes(htmlentities(ucwords($_POST['isi'])));
	
	$photo_lama=$_POST['photo_lama'];
	$nama_photo=$_FILES['photo']['name'];
		
			if(empty($_FILES['photo']['name'])){
				$nama_file_upload=$photo_lama;
				$type=$_POST['type'];				
				$query=mysql_query("update beritaa set judul='$judul',tanggal='$tanggal',isi='$isi',photo='$nama_file_upload',type='$type' where id_user='$id_user'");
			}else{				
				$type=$_FILES['photo']['type'];	
				$uploaddir='./photo/';
				$rnd=date(His);				
				$nama_file_upload=$rnd.'-'.$nama_photo;
				$alamatfile=$uploaddir.$nama_file_upload;
				
				if($type != "image/gif"  &&  $type != "image/jpg"  && $type != "image/jpeg" && $type != "image/png") {
						echo "File Yang Di izinkan Hanya jpg,jpeg,png,gif!!</a>";
						?><a href=edit.php?id_user=<?php echo $id_user;?>> Silahkan ulangi</a><?php
				}else{
					if($ukuran>1000000){
						echo "File Yang Di izinkan Hanya berukuran kurang dari 1MB!!</a>";
						?><a href=edit.php?id_user=<?php echo $id_user;?>> Silahkan ulangi</a><?php
					}else{				
						unlink("./photo/".$photo_lama);
						$upload=move_uploaded_file($_FILES['photo']['tmp_name'],$alamatfile);
						$query=mysql_query("update beritaa set judul='$judul',tanggal='$tanggal',isi='$isi',photo='$nama_file_upload',type='$type' where id_user='$id_user'");
					}
				}
			}
			
			if($query){
				echo "Data Anda berhasil disimpan <a href=view_data.php> View Data</a>";
			}else{
				echo mysql_query();
			}
		}
else{
	unset($_POST['submit']);
}
?>
