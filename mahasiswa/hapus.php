<?php
include "../komponen/koneksi.php";

if (!isset($_GET['nim'])) {
    die("NIM tidak ditemukan!");
}

$nim = $_GET['nim'];

$cek = mysqli_query($koneksi, "SELECT * FROM tbl_nilai WHERE nim='$nim'");
if (mysqli_num_rows($cek) > 0) {
    echo "Data mahasiswa dengan NIM $nim tidak dapat dihapus karena masih memiliki data nilai.<br>";
    exit;
}

$hasil = mysqli_query($koneksi, "DELETE FROM tbl_mahasiswa WHERE nim='$nim'");

if ($hasil) {
    header("Location: index.php");
    exit;
} else {
    die("Gagal menghapus: " . mysqli_error($koneksi));
}
?>
