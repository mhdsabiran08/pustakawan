<?php include('config.php') ?>
 
<html>
<head>
<title>UNTAN</title>
</head>
 
<body bgcolor="green">
<h1>FAKULTAS</h1>
<?php
if (!empty($_GET['message']) && $_GET['message'] == 'success') {
    echo '<h3>Berhasil meng-update data!</h3>';
}
?>
 
<a href="index.php">+ Tambah Data</a>
 
<table border="1" cellpadding="5" cellspacing="0">
    <thead>
        <tr>
            <td>No.</td>
            <td>Fakultas</td>
            <td>Keterangan</td>
           </tr>
    </thead>
    <tbody>
    <?php
    $query = mysql_query("select * from fakultas");
 
    $no = 1;
    while ($data = mysql_fetch_array($query)) {
    ?>
        <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $data['fakultas']; ?></td>
            <td><?php echo $data['keterangan']; ?></td>
            <td>
            <a href="edit.php?id=<?php echo $data['user_id']; ?>">Edit</a> || 
            <a href="delete.php?id=<?php echo $data['user_id']; ?>">Hapus</a></td>
        </tr>
    <?php
        $no++;
    }
    ?>
    </tbody>
</table>
</body>
</html>