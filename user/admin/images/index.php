<html>
<head>
	<title>Upload Gambar</title>
</head>
<body>

	<h1>Upload Image</h1>

	<form action="" method="post" enctype="multipart/form-data">
		Pilih File : <input type="file" name="image"> <input type="submit" value="Upload">
	</form>

	<?php
	//koneksi ke database
	mysql_connect("localhost", "root");
	mysql_select_db("untan");

	$file = $_FILES['image']['tmp_name'];

	if(!isset($file)){
		echo 'Pilih file gambar';
	}else{
		$image 		= addslashes(file_get_contents($_FILES['image']['tmp_name']));
		$image_name	= addslashes($_FILES['image']['name']);
		$image_size	= getimagesize($_FILES['image']['tmp_name']);

		if($image_size == false){
			echo 'File yang anda pilih tidak gambar';
		}else{
			if(!$insert = mysql_query("INSERT INTO images VALUES(NULL, '$image_name', '$image')")){
				echo 'Gagal upload gambar';
			}else{
				//ambil id terakhir insert
				$lastid = mysql_insert_id();

				echo 'Gambar berhasil di upload.<p>Gambar anda:</p><img src="get.php?id='.$lastid.'">';
			}
		}
	}
	?>

</body>
</html>