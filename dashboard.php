<?php
/**
 *  Nim   : 2357401005
 *  Nama  : Sopiyah
 *  Kelas : Mi23
 */
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

include "config/koneksi.php";
include "sidebar.php"; // Sidebar sudah otomatis muncul

$jumlah_produk = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM produk"));
$jumlah_kategori = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM kategori"));
$jumlah_user = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM users"));
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dashboard Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background-color: #f8f9fa;
    }
    .main {
      margin-left: 260px;
      padding: 30px;
    }
    .card {
      border-radius: 10px;
      box-shadow: 0 0 8px rgba(0,0,0,0.05);
    }
    .card h5 {
      margin-bottom: 0.5rem;
    }
  </style>
</head>
<body>

<div class="main">
  <h2 class="mb-4">Selamat Datang Admin</h2>

  <div class="row">
    <div class="col-md-4 mb-3">
      <div class="card bg-primary text-white">
        <div class="card-body">
          <h5>Total Produk</h5>
          <p class="fs-4"><?= $jumlah_produk ?></p>
        </div>
      </div>
    </div>

    <div class="col-md-4 mb-3">
      <div class="card bg-success text-white">
        <div class="card-body">
          <h5>Total Kategori</h5>
          <p class="fs-4"><?= $jumlah_kategori ?></p>
        </div>
      </div>
    </div>

    <div class="col-md-4 mb-3">
      <div class="card bg-warning text-dark">
        <div class="card-body">
          <h5>Total User</h5>
          <p class="fs-4"><?= $jumlah_user ?></p>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>
