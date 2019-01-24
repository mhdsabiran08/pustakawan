<html>
<head>
	<title>UNTAN</title>
</head>
<body>
	<h1>EVENT</h1>
	<?php
	include "koneksi.php";
	$id_user=$_GET['id_user'];
	$row=mysql_fetch_array(mysql_query("select * from dicoba where id_user='$id_user'"));

	$nama=$row['nama'];
	$kategori=$row['kategori'];
	$fakultas=$row['fakultas'];
	$prodi=$row['prodi'];
	$tempat=$row['tempat'];
  $tanggal=$row['tanggal'];
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
      <td>kategori</td>
      <td>
      <select name="kategori">
        <option value="competition" <?php if($kategori=='competition'){ echo "selected='selected'";} ?>>competition
        <option value="workshop" <?php if($kategori=='workshop'){ echo "selected='selected'";} ?>>workshop
        <option value="seminar" <?php if($kategori=='seminar'){ echo "selected='selected'";} ?>>seminar
        <option value="music" <?php if($kategori=='music'){ echo "selected='selected'";} ?>>music
      </select>
      </td>
    </tr>
	<tr>
      <td>fakultas</td>
      <td>
      <select name="fakultas">
        <option value="mipa" <?php if($fakultas=='mipa'){ echo "selected='selected'";} ?>>mipa
        <option value="teknik" <?php if($fakultas=='teknik'){ echo "selected='selected'";} ?>>teknik
        <option value="pertanian" <?php if($fakultas=='pertanian'){ echo "selected='selected'";} ?>>pertanian
        <option value="kehutanan" <?php if($fakultas=='kehutanan'){ echo "selected='selected'";} ?>>kehutanan
        <option value="isip" <?php if($fakultas=='isip'){ echo "selected='selected'";} ?>>isip
        <option value="hukum" <?php if($fakultas=='hukum'){ echo "selected='selected'";} ?>>hukum
        <option value="kedokteran" <?php if($fakultas=='kedokteran'){ echo "selected='selected'";} ?>>kedokteran
        <option value="ekonomi" <?php if($fakultas=='ekonomi'){ echo "selected='selected'";} ?>>ekonomi
        <option value="ikip" <?php if($fakultas=='ikip'){ echo "selected='selected'";} ?>>ikip
      </select>
      </td>
    </tr>
    <tr>
      <td>prodi</td>
      <td><input type="text" name="prodi" value="<?php echo $prodi; ?>" size="30"/></td>
    </tr>
     <tr>
      <td>tempat</td>
      <td><input type="text" name="tempat" value="<?php echo $tempat; ?>" size="30"/></td>
    </tr>
     <tr>
      <td>tanggal</td>
           <td width="292"><select name='tanggal'>
                    <option value='0' selected='selected'>Tgl</option>
                    <?php for($tgl=1; $tgl<=31; $tgl++) {
                    echo "<option value=$tgl>$tgl</option>";
                     } ?></select>

                     <?php $bulan= array(1=>'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
                      ?><select name='bulan'>
                      <option value='0' selected='selected'>Bulan</option>
                      <?php for($bln=1; $bln<=12; $bln++) {
                      echo "<option value=$bln>$bulan[$bln]</option>"; }?></select> 
                      <select name='tahun'>
                  <option>Tahun</option>
                  <?php for($thn=2000; $thn<=2020; $thn++){
                  echo "<option value=$thn>$thn</option>"; }?></select></td>
    </tr>
    <tr>
      <td><i><font color="#CCCCCC">*kosongkan photo jika tidak diubah </font></i></td>
    </tr>
    <tr>
      <td>Photo</td>
      <td><input type="file" name="photo" size="30"/></td>
  	</tr>
    <tr>
      <td colspan="3"><p></p></td>
    </tr>
    <tr>
      <td><input type="submit" name="submit"  value="Update" onclick="return confirm('Apakah Anda yakin akan mengubah data?')"/></td>
   
	  <td><a href="view_data.php">[View Event]</a></td>
	</tr>
    </table>
	  
	</form>

</body>
</html>
