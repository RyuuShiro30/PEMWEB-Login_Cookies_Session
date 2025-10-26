<?php
    include "koneksi.php";

    $Username = $_POST['username'];
    $Password = md5($_POST['password']);

    $query = "SELECT * FROM user WHERE username='$Username' and password='$Password'";
    $result = mysqli_query($connect, $query);
    $cek = mysqli_num_rows($result);

    if($cek){
        echo "Anda berhasil login. silahkan menuju ";
        ?>
        <a href="homeAdmin.html">Halaman HOME</a>
        <?php
    } else {
        echo "Anda gagal login. silahkan ";
        ?>
        <a href="loginForm.html">Login kembali</a>
        <?php
        echo mysqli_error($connect);
    }
?>