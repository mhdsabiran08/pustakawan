<html>
<head>
	<title>UNTAN</title>
</head>
<body>
	<h1>NEWS</h1>
	<?php
	include "koneksi.php";
	$id_user=$_GET['id_user'];
	$row=mysql_fetch_array(mysql_query("select * from beritaa where id_user='$id_user'"));

	$judul=$row['judul'];
	$tanggal=$row['tanggal'];
	$isi=$row['isi'];
	$photo=$row['photo'];
	$type=$row['type'];
	?>
	
	<form action="update.php" enctype="multipart/form-data" method="post" name="postform">
	
	<input type="hidden" name="id_user" value="<?php echo $id_user;?>" />
    <input type="hidden" name="password_lama" value="<?php echo $password;?>" />
    <input type="hidden" name="photo_lama" value="<?php echo $photo?>" />
    <input type="hidden" name="type" value="<?php echo $type?>" />
	
    <img src="./photo/<?php echo $photo;?>" width="100" height="100">
	<table width="100%" border="0" Align="center">
    <tr>
      <td width="115">judul</td>
      <td width="851"><input type="text" name="judul" value="<?php echo $judul; ?>" size="30"/></td>
    </tr>
      <tr>
      <td width="115">tanggal</td>
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
      <td>isi</td>
      <td <td width="851"><input type="text" name="isi" value="<?php echo $isi; ?>" size="30"/></td>
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
   
	  <td><a href="view_data.php">[View News]</a></td>
	</tr>
    </table>
	  
	</form>

</body>
</html>
