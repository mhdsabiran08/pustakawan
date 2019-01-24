<?php

		require_once('../conn.php');

    $password_lama = $_REQUEST['password_lama'];
    $password_baru1 = $_REQUEST['password_baru1'];
    $password_baru2 = $_REQUEST['password_baru2'];
    $id_pengguna = $_REQUEST['id_pengguna'];

    $sql = "SELECT * FROM pengguna WHERE id_pengguna = '$id_pengguna'";
    $query = mysqli_query($conn,$sql);
    $data = mysqli_fetch_array($query);

    if ($password_lama == $data['password']) {
        if ($password_baru1!="") {
            if ($password_baru1 == $password_baru2) {
                $panjang = strlen($password_baru1);

                if ($panjang>5) {
                    $password = $password_baru1;

                    $sql= "UPDATE pengguna SET
                        username='".$_POST['username']."',
                        password='".$password."'
                        WHERE id_pengguna = ".$id_pengguna."
                    ";
                    mysqli_query($conn,$sql);

                    ?>

                    <script>
                        alert('Username/password berhasil diubah');
                        window.location='../../index.php?p=operator/setting';
                    </script>

                    <?php
                }
                else{
                    header("Location:../../index.php?p=operator/setting&error=3");
                }
            }
            else{
                header("Location:../../index.php?p=operator/setting&error=2");
            }
        }
        else{
            $sql= "UPDATE pengguna SET
                username='".$_POST['username']."'
                WHERE id_pengguna = ".$id_pengguna."
            ";
            mysqli_query($conn,$sql);
            ?>

            <script>
                alert('Username berhasil diubah');
                window.location='../../index.php?p=operator/setting';
            </script>

            <?php
        }
    }
    else{
        header("Location:../../index.php?p=operator/setting&error=1");
    }

?>
