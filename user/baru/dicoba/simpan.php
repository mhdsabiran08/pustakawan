<?php
include "koneksi.php";
if(isset($_POST['submit'])){
	
	$nama=addslashes(htmlentities(ucwords($_POST['nama'])));
	$kategori=$_POST['kategori'];
	$fakultas=$_POST['fakultas'];
	$prodi=addslashes(htmlentities($_POST['prodi']));
	$tempat=$_POST['tempat'];
	$tanggal=$_POST['tanggal']."-".$_POST['bulan']."-".$_POST['tahun'];
	
	$nama_photo=$_FILES['photo']['name'];
	$type = $_FILES['photo']['type'];
	
	if(empty($nama) || empty($prodi) || empty($tempat) || empty($nama_photo)){
		echo "maaf, form belum lengkap!!<a href=index.php>silahkan ulangi</a>";
		}else{
					if($type != "image/gif" && $type != "image/jpg" && $type != "image/jpeg" && $type != "image/png"){
					echo "FILE yang diizinkan hanya jpg,jpeg,png,gif!!! <a href=index.php>silahkan ulangi</a>";
					}else{
						if($ukuran>1000000){
							echo "file yang diizinkan hanya berukuran kurang dari 1MB!! <a href=index.php>silahkan ulangi</a>";
							}else{
								$uploaddir='./photo/';
								$rnd=date(His);
								$nama_file_upload=$rnd.'-'.$nama_photo;
								$alamatfile=$uploaddir.$nama_file_upload;
								
								if(move_uploaded_file($_FILES['photo']['tmp_name'],$alamatfile))
								{
									$query=mysql_query("insert into dicoba(nama,kategori,fakultas,prodi,tempat,tanggal,photo,type)
									values('$nama','$kategori','$fakultas','$prodi','$tempat','$tanggal','$nama_file_upload','$type')");
									
									if($query){
										echo "data anda berhasil disimpan <a href=view_data.php>view data</a>";
										}else{
											echo mysql_query();
											}
									}else{
										echo "<p>Proses upload gagal, kode error = " . $_FILES['location']['error']. "</p>";
										}
								}
						}
					}
			}
	else{
		unset($_POST['submit']);
		}
?>

