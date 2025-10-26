<?php
$conn = mysqli_connect("localhost", "root", "", "prakwebdb");

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$sql = "INSERT INTO user (username, password)
        VALUES ('Ryu', '12345')";

if (mysqli_query($conn, $sql)) {
    echo "Data berhasil dimasukkan ke tabel user";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
