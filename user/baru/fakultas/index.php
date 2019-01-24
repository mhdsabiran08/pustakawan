<html>
<head>
<title>UNTAN</title>
</head>
 
<body bgcolor="green">
<h1 align="center">FAKULTAS</h1>

<?php
if (!empty($_GET['message']) && $_GET['message'] == 'success') {
    echo '<h3>Berhasil menambah data!</h3>';
}
?>
 
<form name="input_data" action="insert.php" method="post">
 
<form name="input_data" action="insert.php" method="post">
<table border="0" cellpadding="5" cellspacing="0" align="center">
    <tbody>
        <tr>
            <td>Fakultas</td>
            <td>:</td>
            <td><input type="text" name="fakultas" maxlength="50" required="required" /></td>
        </tr>
        <tr>
            <td>Keterangan</td>
            <td>:</td>
            <td><textarea input type="text" name="keterangan" maxlength="20" required="required" /></textarea></td>
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
