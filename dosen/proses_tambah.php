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

$querySimpan = "INSERT INTO tbl_dosen (nidn, nama, prodi, email, foto) 
    VALUES('$nidn', '$nama', '$prodi', '$email', '$foto')";

mysqli_query($koneksi, $querySimpan);

header("location: index.php");
} else {
    echo "File gagal di upload";
}
?>
