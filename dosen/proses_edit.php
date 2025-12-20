<?php
include "../komponen/koneksi.php";

$namaFile = $_FILES['filefoto']['name'];
$lokasiSementara = $_FILES['filefoto']['tmp_name'];
$lokasiTujuan = "../foto/" . $namaFile;

$terupload = move_uploaded_file($lokasiSementara, $lokasiTujuan);

if($terupload) {

$nidn      = $_POST['nidn'];
$nama      = $_POST['nama'];
$prodi     = $_POST['prodi'];
$email     = $_POST['email'];
$foto      = $lokasiTujuan;

$queryUpdate = "UPDATE tbl_dosen SET 
    nama='$nama',
    prodi='$prodi',
    email='$email',
    foto='$foto'
    WHERE nidn='$nidn'";

$hasil = mysqli_query($koneksi, $queryUpdate);

if($hasil) {
    header("Location: index.php");
} else {
    echo "Update data gagal: " . mysqli_error($conn);
}

} else {
    echo "File gagal di upload";
}
?>
