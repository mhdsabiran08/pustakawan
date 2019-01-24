<html>
<head>
	<title>UNTAN</title>
</head>
<body bgcolor="grey">
	<h1 align="center">EVENT</h1>
	<form action="simpan.php" enctype="multipart/form-data" method="post" name="postform">
	<table width="50%" border="0" align="center">
		
	<tr>
	<td width="35%">nama</td>
	<td width="292"><input type="text" name="nama" size="30"/></td>
	</tr>

	<tr>
	<td>kategori</td>
	<td>
	<select name="kategori">
	<option value="competition">competition
	<option value="workshop" >workshop
	<option value="seminar" >seminar
	<option value="music" >music
	</select>
	</td>
	</tr>

	<tr>
	<td>fakultas</td>
	<td>
	<select name="fakultas">
	<option value="mipa">mipa
	<option value="teknik" >teknik
	<option value="pertanian" >pertanian
	<option value="kehutanan" >kehutanan
	<option value="isip" >isip
	<option value="hukum" >hukum
	<option value="kedokteran" >kedokteran
	<option value="ekonomi" >ekonomi
	<option value="ikip" >ikip
	</select>
	</td>
	</tr>
		
	<tr>
	<td>prodi</td>
	<td ><input type="text" name="prodi" size="30"/></td>
	</tr>

	<tr>
	<td>tempat</td>
	<td ><input type="text" name="tempat" size="30"/></td>
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
		  <td>Photo</td>
		  <td><input type="file" name="photo" size="30"/></td>
		</tr>
		<tr>
		  <td colspan="3"><p></p></td>
		</tr>
	
	<tr>
	<td><input type="submit" name="submit" value="submit" onClick="return confirm('apakah anda yakin?')"/></td>
	<td><a href="view_data.php"><h3><b>[view event]</b></h3></a></td>
	<td><a href="../../baru/tampilan/admin.php"><h3><b>Home</b></h3></a></td>
	</tr>
	</table>
	</form>
</body>
</html>