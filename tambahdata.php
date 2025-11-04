<?php
include 'koneksi.php'; 

$nama   = "mifta";
$email  = "Mifta@gmail.com";
$alamat = "Jl.Gang senen 3";

$sql = "INSERT INTO pengguna (nama, email, alamat) VALUES ('$nama', '$email', '$alamat')";
if (mysqli_query($conn, $sql)) {
    echo "Data berhasil ditambahkan ke database!";
} else {
    echo "Gagal menambahkan data: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
