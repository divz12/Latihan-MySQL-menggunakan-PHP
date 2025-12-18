<?php
include ('../komponen/blok.php');
if($_SESSION['role'] == 'mhs'){
    header("Location: ../index.php");
    exit();
}
include "../komponen/koneksi.php";

if (!isset($_GET['nidn'])) {
    die("NIM tidak ditemukan!");
}

$nidn = $_GET['nidn'];

$hasil = mysqli_query($koneksi, "DELETE FROM tbl_dosen WHERE nidn='$nidn'");

if ($hasil) {
    header("Location: index.php");
    exit;
} else {
    die("Gagal menghapus: " . mysqli_error($koneksi));
}
?>
