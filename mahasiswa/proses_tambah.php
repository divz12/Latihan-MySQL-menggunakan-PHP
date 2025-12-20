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

$querySimpan = "INSERT INTO tbl_mahasiswa (nim, nama, prodi, angkatan, email, foto) 
    VALUES('$nim', '$nama', '$prodi', '$angkatan', '$email', '$foto')";

mysqli_query($koneksi, $querySimpan);

header("location: index.php");
} else {
    echo "File gagal di upload";
}
?>
