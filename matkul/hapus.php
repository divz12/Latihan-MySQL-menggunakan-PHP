<?php
include ('../komponen/blok.php');
if($_SESSION['role'] == 'mhs'){
    header("Location: ../index.php");
    exit();
}
include "../komponen/koneksi.php";

if (!isset($_GET['kodeMatkul'])) {
    die("kode Matkul tidak ditemukan!");
}

$kode = $_GET['kodeMatkul'];

$hasil = mysqli_query($koneksi, "DELETE FROM tbl_matkul WHERE kodeMatkul='$kode'");

if ($hasil) {
    header("Location: index.php");
    exit;
} else {
    die("Gagal menghapus: " . mysqli_error($koneksi));
}
?>
