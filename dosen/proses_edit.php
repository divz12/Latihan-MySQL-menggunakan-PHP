<?php
include "../komponen/koneksi.php";

$nidn      = $_POST['nidn'];
$nama      = $_POST['nama'];
$prodi     = $_POST['prodi'];
$email     = $_POST['email'];

$queryUpdate = "UPDATE tbl_dosen SET 
    nama='$nama',
    prodi='$prodi',
    email='$email'
    WHERE nidn='$nidn'";

$hasil = mysqli_query($koneksi, $queryUpdate);

if($hasil) {
    header("Location: index.php");
} else {
    echo "Update data gagal: " . mysqli_error($conn);
}
?>
