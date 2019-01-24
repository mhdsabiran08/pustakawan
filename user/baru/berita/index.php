<html>
<head>
	<title>UNTAN</title>
</head>
<body bgcolor="grey">
	<h1 align="center">NEWS</h1>
	<form action="simpan.php" enctype="multipart/form-data" method="post" name="postform">
	<table width="50%" border="0" align="center">
		
	<tr>
	<td width="35%">judul </td>
	<td width="292"><input type="text" name="judul" size="30"/></td>
	</tr>
	<br>
	<tr>
	<td width="35%">tanggal </td>
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
	<td ><textarea input type="text" name="isi" size="30"/></textarea></td>
	</tr>
	
	<tr>
		  <td>photo</td>
		  <td><input type="file" name="photo" size="30"/></td>
		</tr>
		<tr>
		  <td colspan="3"><p></p></td>
		</tr>
	
	<tr>
	<td><input type="submit" name="submit" value="submit" onClick="return confirm('apakah anda yakin?')"/>
	<td><a href="view_data.php"><h3><b>[view berita]</b></h3></a></td>
	<td><a href="../../baru/tampilan/admin.php"><h3><b>Home</b></h3></a></td>
	</tr>
	
	</table>
	</form>
</body>
</html>
