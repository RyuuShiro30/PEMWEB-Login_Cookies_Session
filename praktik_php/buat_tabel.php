<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$conn = mysqli_connect("localhost", "root", "", "latihan_php");

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$sql = "CREATE TABLE user (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(100) NOT NULL
)";

if (mysqli_query($conn, $sql)) {
    echo "Tabel user berhasil dibuat!";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
