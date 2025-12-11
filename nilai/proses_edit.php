<?php
include "../komponen/koneksi.php";

$id = $_POST['id_nilai'];
$nim = $_POST['nim'];
$kodeMatkul = $_POST['kodeMatkul'];
$nilai = $_POST['nilai'];
$nidn = $_POST['nidn'];

if ($nilai >= 90) {
    $huruf = "A";
} elseif ($nilai >= 70) {
    $huruf = "B";
} elseif ($nilai >= 60) {
    $huruf = "C";
} elseif ($nilai >= 50) {
    $huruf = "D";
} else {
    $huruf = "E";
}

$query = "UPDATE tbl_nilai SET 
            nim='$nim',
            kodeMatkul='$kodeMatkul',
            nilai='$nilai',
            nilaiHuruf='$huruf',
            nidn='$nidn'
            WHERE id_nilai='$id'";

mysqli_query($koneksi, $query);

header("location: index.php");
?>
