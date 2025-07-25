<?php
/**
 * Nim   : 2357401005
 * Nama  : Sopiyah
 * Kelas : Mi23
 */

// Mulai session dan hapus semua session
session_start();
session_unset();
session_destroy();

// Kembali ke halaman login
header("Location: login.php");
exit;
?>
