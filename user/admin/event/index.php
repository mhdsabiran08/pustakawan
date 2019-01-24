<html>
<head>
<title>Universitas Tanjungpura</title>
</head>
 
<body>
<h1>Form Input Data</h1>

<?php
if (!empty($_GET['message']) && $_GET['message'] == 'success') {
    echo '<h3>Berhasil menambah data!</h3>';
}
?>
 
<form name="input_data" action="insert.php" method="post">
 
<form name="input_data" action="insert.php" method="post">
<table border="0" cellpadding="5" cellspacing="0">
    <tbody>
        <tr>
            <td>Judul</td>
            <td>:</td>
            <td><input type="text" name="judul" maxlength="50" required="required" /></td>
        </tr>
        <tr>
            <td>Kategori</td>
            <td>:</td>
            <td><input type="text" name="kategori" maxlength="20" required="required" /></td>
        </tr>
        <tr>
            <td>Fakultas</td>
            <td>:</td>
            <td><input type="text" name="fakultas" maxlength="20" required="required" /></td>
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
