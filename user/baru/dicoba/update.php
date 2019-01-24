<?php
include "koneksi.php";
if(isset($_POST['submit'])){

	$id_user=$_POST['id_user'];
	$nama=addslashes(htmlentities(ucwords($_POST['nama'])));
	$kategori=$_POST['kategori'];
	$fakultas=$_POST['fakultas'];
	$prodi=addslashes(htmlentities(ucwords($_POST['prodi'])));
	$tempat=addslashes(htmlentities($_POST['tempat']));
	$tanggal=addslashes(htmlentities($_POST['tanggal']."-".$_POST['bulan']."-".$_POST['tahun']));
	
	$photo_lama=$_POST['photo_lama'];
	$nama_photo=$_FILES['photo']['name'];
	
		
		if(empty($_FILES['photo']['name'])){
				$nama_file_upload=$photo_lama;
				$type=$_POST['type'];				
				$query=mysql_query("update dicoba set nama='$nama',kategori='$kategori',fakultas='$fakultas',prodi='$prodi',tempat='$tempat',tanggal='$tanggal',photo='$nama_file_upload',type='$type' where id_user='$id_user'");
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
						$query=mysql_query("update dicoba set nama='$nama',kategori='$kategori',fakultas='$fakultas',prodi='$prodi',tempat='$tempat',tanggal='$tanggal',photo='$nama_file_upload',type='$type' where id_user='$id_user'");
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

