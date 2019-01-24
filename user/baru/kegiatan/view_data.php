<html>
<head>
<title>UNTAN</title>
</head>
<body bgcolor="yellow">
<h1 align="center">EVENT</h1>
<?php
include "koneksi.php";
$query=mysql_query("select * from kegiatan");
?>
<center><a href="index.php">[Input kegiatan]</a></center>
<br>
<table border="1" width="100%">
<tr bgcolor="#99CCFF">
  <th rowspan="">nomor</th>
  <th rowspan="">photo</th>
  <th colspan="">nama</th>
  <th rowspan="">kategori</th>
  <th rowspan="">fakultas</th>
  <th rowspan="">prodi</th>
  <th rowspan="">tempat</th>
  <th rowspan="">tanggal</th>
  <th rowspan="">Type</th>
  <th rowspan="">Edit</th>
</tr>
<?php
while($row=mysql_fetch_array($query)){
	?>
<tr>
		<td align="center"><?php echo $c=$c+1;?></td>
		<td align="center"><a href="./photo/<?php echo $row['photo'];?>" target="_blank"><img src="./photo/<?php echo $row['photo'];?>" width="100" height="100" title="<?php echo $row['photo'];?>"></a></td>
		<td align="center"><?php echo $row['nama'];?></td>
		<td align="center"><?php echo $row['kategori'];?></td>
		<td align="center"><?php echo ucwords($row['fakultas']);?></td>
		<td align="center"><?php echo ucwords($row['prodi']);?></td>
		<td align="center"><?php echo ucwords($row['tempat']);?></td>
		<td align="center"><?php echo ucwords($row['tanggal']);?></td>
		<td align="center"><?php echo $row['type'];?></td>
		<td align="center">
			<a href="delete.php?id_user=<?php echo $row['id_user'];?>" onClick="return confirm('Apakah Anda yakin?')">Delete</a> |
			<a href="edit.php?id_user=<?php echo $row['id_user'];?>">Edit</a>
		</td>
		</tr>
	<?php
	}
	?>
</table>
</body>
</html>
