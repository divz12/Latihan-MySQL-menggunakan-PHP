<?php
include "../komponen/koneksi.php";

$nidn      = $_POST['nidn'];
$nama      = $_POST['nama'];
$prodi     = $_POST['prodi'];
$email     = $_POST['email'];

$querySimpan = "INSERT INTO tbl_dosen (nidn, nama, prodi, email) 
    VALUES('$nidn', '$nama', '$prodi', '$email')";

mysqli_query($koneksi, $querySimpan);

header("location: index.php");
?>
