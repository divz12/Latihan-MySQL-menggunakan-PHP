<?php
include "../komponen/koneksi.php";

$nim       = $_POST['nim'];
$nama      = $_POST['nama'];
$prodi     = $_POST['prodi'];
$angkatan  = $_POST['angkatan'];
$email     = $_POST['email'];

$queryUpdate = "UPDATE tbl_mahasiswa SET 
    nama='$nama',
    prodi='$prodi',
    angkatan='$angkatan',
    email='$email'
    WHERE nim='$nim'";

$hasil = mysqli_query($koneksi, $queryUpdate);

if($hasil) {
    header("Location: index.php");
} else {
    echo "Update data gagal: " . mysqli_error($koneksi);
}
?>
