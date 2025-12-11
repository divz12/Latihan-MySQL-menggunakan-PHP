<?php
include "../komponen/koneksi.php";

$nim       = $_POST['nim'];
$nama      = $_POST['nama'];
$prodi     = $_POST['prodi'];
$angkatan  = $_POST['angkatan'];
$email     = $_POST['email'];

$querySimpan = "INSERT INTO tbl_mahasiswa (nim, nama, prodi, angkatan, email) 
    VALUES('$nim', '$nama', '$prodi', '$angkatan', '$email')";

mysqli_query($koneksi, $querySimpan);

header("location: index.php");
?>
