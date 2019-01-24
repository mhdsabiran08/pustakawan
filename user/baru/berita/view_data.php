<html>
<head>
<title>UNTAN</title>
</head>
<body bgcolor="grey">
<h1 align="center">NEWS</h1>
<?php
include "koneksi.php";
$query=mysql_query("select * from beritaa");
?>
<center><a href="index.php"><h2>[Input Berita]</h2></a></center>
<td><center><a href="../../baru/tampilan/admin.php"><h3><b>Home</center></b></h3></a></td>
<br>
<table border="1" width="100%">
<tr bgcolor="#99CCFF">
  <th rowspan="">nomor</th>
  <th rowspan="">photo</th>
  <th colspan="">judul</th>
  <th rowspan="">tanggal</th>
  <th rowspan="">isi</th>
  <th rowspan="">Type</th>
  <th rowspan="">Edit</th>
</tr>
<?php
while($row=mysql_fetch_array($query)){
	?>
<tr>
		<td align="center"><?php echo $c=$c+1;?></td>
		<td align="center"><a href="./photo/<?php echo $row['photo'];?>" target="_blank"><img src="./photo/<?php echo $row['photo'];?>" width="100" height="100" title="<?php echo $row['photo'];?>"></a></td>
		<td align="center"><?php echo $row['judul'];?></td>
		<td align="center"><?php echo $row['tanggal'];?></td>
		<td align="center"><?php echo ucwords($row['isi']);?></td>
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
