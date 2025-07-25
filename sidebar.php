<!-- sidebar.php -->
<?php
  // Cek apakah file sedang diakses dari dalam folder (bukan dari root)
  $base = (basename($_SERVER['PHP_SELF']) != 'dashboard.php') ? '../' : '';
?>

<style>
  .sidebar {
    height: 100vh;
    width: 250px;
    position: fixed;
    top: 0;
    left: 0;
    background-color: #343a40;
    padding-top: 1rem;
  }

  .sidebar h4 {
    color: #fff;
    text-align: center;
    margin-bottom: 1rem;
  }

  .sidebar a {
    color: #fff;
    display: block;
    padding: 10px 20px;
    text-decoration: none;
  }

  .sidebar a:hover {
    background-color: #495057;
  }
</style>

<div class="sidebar">
  <h4>Menu</h4>
  <a href="<?= $base ?>dashboard.php">Beranda</a>
  <a href="<?= $base ?>produk/index.php">Produk</a>
  <a href="<?= $base ?>kategori/index.php">Kategori</a>
  <a href="<?= $base ?>user/index.php">User</a>
  <a href="<?= $base ?>logout.php">Keluar</a>
</div>
