<?php
include '../komponen/koneksi.php';

$kode = $_POST['kodeMatkul'];
$nama = $_POST['namaMatkul'];
$sks        = $_POST['sks'];
$nidn       = $_POST['nidn'];

$queryUpdate = "UPDATE tbl_matkul SET
    namaMatkul='$nama',
    sks='$sks',
    nidn='$nidn'
    WHERE kodeMatkul='$kode'";

$hasil = mysqli_query($koneksi, $queryUpdate);

if($hasil) {
    header("Location: index.php");
} else {
    echo "Update data gagal: " . mysqli_error($koneksi);
}
?>
