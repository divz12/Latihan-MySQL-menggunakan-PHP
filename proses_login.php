<?php
include 'komponen/koneksi.php';

session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM tbl_user WHERE username='$username' AND password='$password'";

    $hasil = mysqli_query($koneksi, $sql);
    $count = mysqli_num_rows($hasil);

    if ($count == 1) {
        $row = mysqli_fetch_assoc($hasil);
        $_SESSION['login_user'] = $row['username'];
        $_SESSION['role'] = $row['role'];
        header("Location: index.php");
        exit();
    } else {
        $error = "Username atau Password salah.";
    }
}

?>
