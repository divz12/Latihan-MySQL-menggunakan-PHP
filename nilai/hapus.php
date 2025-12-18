<?php
include ('../komponen/blok.php');
if($_SESSION['role'] == 'mhs'){
    header("Location: ../index.php");
    exit();
}
include "../komponen/koneksi.php";

if (!isset($_GET['id_nilai'])) {
    die("kode Matkul tidak ditemukan!");
}

$id = $_GET['id_nilai'];

$hasil = mysqli_query($koneksi, "DELETE FROM tbl_nilai WHERE id_nilai='$id'");

if ($hasil) {
    header("Location: index.php");
    exit;
} else {
    die("Gagal menghapus: " . mysqli_error($koneksi));
}
?>
