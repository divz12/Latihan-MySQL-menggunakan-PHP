<?php
include "../komponen/koneksi.php";

$id_nilai = $_POST['id_nilai'];
$nim = $_POST['nim'];
$kodeMatkul = $_POST['kodeMatkul'];
$nilai = $_POST['nilai'];
$nidn = $_POST['nidn'];

$cek = mysqli_query($koneksi, "SELECT * FROM tbl_nilai WHERE nim='$nim' AND kodeMatkul='$kodeMatkul'");

if ($nilai >= 90 && $nilai <= 100) {
    $nilaiHuruf = "A";
} elseif ($nilai >= 70) {
    $nilaiHuruf = "B";
} elseif ($nilai >= 60) {
    $nilaiHuruf = "C";
} elseif ($nilai >= 50) {
    $nilaiHuruf = "D";
} else {
    $nilaiHuruf = "E";
}

$querySimpan = "INSERT INTO tbl_nilai (id_nilai, nim, kodeMatkul, nilai, nilaiHuruf, nidn) 
VALUES('$id_nilai', '$nim', '$kodeMatkul', '$nilai', '$nilaiHuruf', '$nidn')";

mysqli_query($koneksi, $querySimpan);

header("location: index.php");
?>
