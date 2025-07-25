<?php
/**
 *  Nim   : 2357401005
 *  Nama  : Sopiyah
 *  Kelas : Mi23
 */

session_start();
include "config/koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];

// Hindari SQL Injection (opsional jika belum pakai password_hash)
$username = mysqli_real_escape_string($koneksi, $username);
$password = mysqli_real_escape_string($koneksi, $password);

$query = mysqli_query($koneksi, "SELECT * FROM users WHERE username='$username' AND password='$password'");

if (mysqli_num_rows($query) > 0) {
    $_SESSION['username'] = $username;
    header("Location: dashboard.php");
    exit;
} else {
    // PERBAIKAN: Typo pada Location dan buat pesan error tampil
    header("Location: login.php?error=1");
    exit;
}
