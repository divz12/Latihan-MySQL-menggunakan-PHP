<?php
include "../komponen/koneksi.php";

$namaFile = $_FILES['filefoto']['name'];
$lokasiSementara = $_FILES['filefoto']['tmp_name'];
$lokasiTujuan = "../foto/" . $namaFile;

$terupload = move_uploaded_file($lokasiSementara, $lokasiTujuan);

if($terupload) {

$nim       = $_POST['nim'];
$nama      = $_POST['nama'];
$prodi     = $_POST['prodi'];
$angkatan  = $_POST['angkatan'];
$email     = $_POST['email'];
$foto      = $lokasiTujuan;

$queryUpdate = "UPDATE tbl_mahasiswa SET 
    nama='$nama',
    prodi='$prodi',
    angkatan='$angkatan',
    email='$email',
    foto='$foto'
    WHERE nim='$nim'";

$hasil = mysqli_query($koneksi, $queryUpdate);

if($hasil) {
    header("Location: index.php");
} else {
    echo "Update data gagal: " . mysqli_error($koneksi);
}

} else {
    echo "File gagal di upload";
}
?>
