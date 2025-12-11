<?php
include "../komponen/koneksi.php";

$kode = $_POST['kodeMatkul'];
$nama = $_POST['namaMatkul'];
$sks = $_POST['sks'];
$nidn = $_POST['nidn'];

$querySimpan = "INSERT INTO tbl_matkul (kodeMatkul, namaMatkul, sks, nidn) 
    VALUES('$kode', '$nama', '$sks', '$nidn')";

mysqli_query($koneksi, $querySimpan);

header("location: index.php");
?>
