<html>
<head>
	<title>UNTAN</title>
</head>
<body bgcolor="yellow">
	<h1 align="center">EVENT</h1>
	<form action="simpan.php" enctype="multipart/form-data" method="post" name="postform">
	<table width="50%" border="0" align="center">
		
	<tr>
	<td width="35%">nama </td>
	<td width="292"><input type="text" name="nama" size="30"/></td>
	</tr>
	<br>
	<tr>
	<td width="35%">kategori</td>	
	<td>
	<select name="kategori">
	<option>Competition</option>
	<option>Workshop</option>
	<option>Seminar</option>
	<option>Music</option>
	</select></td>
	</tr>
	<tr>
	<td width="35%">fakultas </td>
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
	<td width="35%">prodi </td>
	<td width="292"><input type="text" name="prodi" size="30"/></td>
	</tr>	
	<tr>
	<td width="35%">tempat </td>
	<td width="292"><input type="text" name="tempat" size="30"/></td>
	</tr>
	<tr>
	<td width="35%">tanggal </td>
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
		  <td>photo</td>
		  <td><input type="file" name="photo" size="30"/></td>
		</tr>
		<tr>
		  <td colspan="3"><p></p></td>
		</tr>
	
	<tr>
	<td><input type="submit"  value="submit" onClick="return confirm('apakah anda yakin?')"/></td>
	<td><a href="view_data.php">[view kegiatan]</a></td>
	</tr>
	</table>
	</form>
</body>
</html>
