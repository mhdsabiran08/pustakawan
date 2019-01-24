<?php
include('config.php');
?>
 
<html>
<head>
<title>Universitas Tanjungpura</title>
</head>
 
<body>
<h1>NEWS</h1>
 
<?php
$id = $_GET['id'];
 
$query = mysql_query("select * from news where user_id='$id'") or die(mysql_error());
 
$data = mysql_fetch_array($query);
?>
 
<form name="update_data" action="update.php" method="post">
<input type="hidden" name="user_id" value="<?php echo $id; ?>" />
<table border="0" cellpadding="5" cellspacing="0">
    <tbody>
        <tr>
            <td>Judul</td>
            <td>:</td>
            <td><input type="text" name="judul" maxlength="50" required="required" value="<?php echo $data['judul']; ?>" /></td>
        </tr>
        <tr>
            <td>Tanggal</td>
            <td>:</td>
            <td><input type="text" name="tanggal" maxlength="20" required="required" value="<?php echo $data['tanggal']; ?>" /></td>
        </tr>
        <tr>
            <td>Isi</td>
            <td>:</td>
            <td><input type="text" name="isi" maxlength="500" required="required" value="<?php echo $data['isi']; ?>" /></td>
        </tr>
         <tr>
            <td align="right" colspan="3"><input type="submit" name="submit" value="Simpan" /></td>
        </tr>
    </tbody>
</table>
</form>
 
<a href="view.php">Lihat Data</a>
 
</body>
</html>