<html>
<head>
	<title>UNTAN</title>
</head>
<body>
	<h1>EVENT</h1>
	<?php
	include "koneksi.php";
	$id_user=$_GET['id_user'];
	$row=mysql_fetch_array(mysql_query("select * from kegiatan where id_user='$id_user'"));

	$nama=$row['nama'];
	$kategori=$row['kategori'];
	$fakultas=$row['fakultas'];
  $prodi=$row['prodi'];
  $prodi=$row['tempat'];
  $prodi=$row['tanggal'];
	$photo=$row['photo'];
	$type=$row['type'];
	?>
	
	<form action="update.php" enctype="multipart/form-data" method="post" name="postform">
	
	<input type="hidden" name="id_user" value="<?php echo $id_user;?>" />
    <input type="hidden" name="photo_lama" value="<?php echo $photo?>" />
    <input type="hidden" name="type" value="<?php echo $type?>" />
	
    <img src="./photo/<?php echo $photo;?>" width="100" height="100">
	<table width="100%" border="0" Align="center">
    <tr>
      <td width="115">nama</td>
      <td width="851"><input type="text" name="nama" value="<?php echo $nama; ?>" size="30"/></td>
    </tr>
      <tr>
      <td width="115">kategori</td>
     <td>
  <select name="kategori">
  <option>Competition</option>
  <option>Workshop</option>
  <option>Seminar</option>
  <option>Music</option>
  </select></td>
    </tr>
	<tr>
      <td>fakultas</td>
      <td>
  <select name="fakultas">
  <option>mipa</option>
  <option>kip</option>
  <option>isip</option>
  <option>kehutanan</option>
  <option>teknik</option>
  <option>ekonomi</option>
  <option>pertanian</option>
  <option>kedokteran</option>
  <option>hukum</option>
  </select></td>
    </tr>
    <tr>
      <td>prodi</td>
      <td <td width="851"><input type="text" name="prodi" value="<?php echo $prodi; ?>" size="30"/></td>
    </tr>
    <tr>
      <td>tempat</td>
      <td <td width="851"><input type="text" name="tempat" value="<?php echo $tempat; ?>" size="30"/></td>
    </tr>
    <tr>
      <td>tanggal</td>
      <td><select name="tgl" size="1" id="tgl">
        <?php
        for ($i=1;$i<=31;$i++)
        {
        echo "<option value=".$i.">".$i."</option>";
        }
        ?>
        </select>
        <select name="bln" size="1" id="bln">
        <?php
        $bulan=array("","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","November","Desember");
        for ($i=1;$i<=12;$i++)
        {
        echo "<option value=".$i.">".$bulan[$i]."</option>";
        }
        ?>
        </select>
        <select name="thn" size="1" id="thn">
        <?php
        for ($i=1945;$i<=2000;$i++)
        {
        echo "<option value=".$i.">".$i."</option>";
        }
        ?>
        </select>
        </td>
    </tr>
    <tr>
      <td><i><font color="#CCCCCC">*kosongkan photo jika tidak diubah </font></i></td>
    </tr>
    <tr>
      <td>photo</td>
      <td><input type="file" name="photo" size="30"/></td>
  	</tr>
    <tr>
      <td colspan="3"><p></p></td>
    </tr>
    <tr>
      <td><input type="submit" name="submit"  value="Update" onclick="return confirm('Apakah Anda yakin akan mengubah data?')"/></td>
   
	  <td><a href="view_data.php">[View kegiatan]</a></td>
	</tr>
    </table>
	  
	</form>

</body>
</html>
