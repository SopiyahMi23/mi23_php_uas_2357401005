<?php
/**
 *  Nim   : 2357401005
 *  Nama  : Sopiyah
 *  Kelas : Mi23
 *  File  : auth.php – Autentikasi pengguna (wajib login)
 */

session_start();

// Jika belum login, redirect ke halaman login
if (!isset($_SESSION['username']) || empty($_SESSION['username'])) {
    header("Location: ../login.php");
    exit;
}
?>
