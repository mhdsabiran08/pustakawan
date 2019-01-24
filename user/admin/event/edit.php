<?php
include('config.php');
?>
 
<html>
<head>
<title>Universitas Tanjungpura</title>
</head>
 
<body>
<h1>Form Input Data</h1>
 
<?php
$id = $_GET['id'];
 
$query = mysql_query("select * from event where user_id='$id'") or die(mysql_error());
 
$data = mysql_fetch_array($query);
?>
 
<form name="update_data" action="update.php" method="post">
<input type="hidden" name="user_id" value="<?php echo $id; ?>" />
<table border="0" cellpadding="5" cellspacing="0">
    <tbody>
        <tr>
            <td>Judul</td>
            <td>:</td>
            <td><input type="text" name="judul" maxlength="50" required="required" value="<?php echo $data['judul']; ?>"  /></td>
        </tr>
        <tr>
            <td>Kategori</td>
            <td>:</td>
            <td><input type="kategori" name="kategori" maxlength="20" required="required" value="<?php echo $data['kategori']; ?>" /></td>
        </tr>
        <tr>
            <td>Fakultas</td>
            <td>:</td>
            <td><input type="text" name="fakultas" maxlength="20" required="required" value="<?php echo $data['fakultas']; ?>" /></td>
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
