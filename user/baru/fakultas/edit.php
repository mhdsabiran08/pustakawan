<?php
include('config.php');
?>
 
<html>
<head>
<title>UNTAN</title>
</head>
 
<body>
<h1>FAKULTAS</h1>
 
<?php
$id = $_GET['id'];
 
$query = mysql_query("select * from fakultas where user_id='$id'") or die(mysql_error());
 
$data = mysql_fetch_array($query);
?>
 
<form name="update_data" action="update.php" method="post">
<input type="hidden" name="user_id" value="<?php echo $id; ?>" />
<table border="0" cellpadding="5" cellspacing="0">
    <tbody>
        <tr>
            <td>Fakultas</td>
            <td>:</td>
            <td><input type="text" name="fakultas" maxlength="50" required="required" value="<?php echo $data['fakultas']; ?>" /></td>
        </tr>
        <tr>
            <td>Keterangan</td>
            <td>:</td>
            <td><input type="text" name="keterangan" maxlength="20" required="required" value="<?php echo $data['keterangan']; ?>" /></td>
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