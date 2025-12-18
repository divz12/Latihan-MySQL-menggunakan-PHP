<?php
session_start();

if (!isset($_SESSION['login_user']) || $_SESSION['role'] != 'mhs') {
    header("Location: login.php");
    exit();
}
?>
