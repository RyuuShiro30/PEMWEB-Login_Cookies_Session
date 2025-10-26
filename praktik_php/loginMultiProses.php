<?php
    include "koneksi.php";

    $Username = $_POST['username'];
    $Password = md5($_POST['password']);

    $query = "SELECT * FROM user WHERE username='$Username' and password='$Password'";
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_assoc($result);

    if($row['level'] == 1){
        echo "Anda berhasil login. silahkan menuju ";
        ?>
        <a href="homeAdmin.html">Halaman HOME</a>
        <?php
    } elseif ($row['level'] == 2) {
        echo "Anda berhasil login. silahkan menuju ";
        ?>
        <a href="homeGuest.html">Halaman HOME</a>
        <?php
    } else {
        echo "Anda gagal login. silahkan ";
        ?>
        <a href="loginForm.html">Login Kembali</a>
        <?php
        echo mysqli_error($connect);
    }
?>