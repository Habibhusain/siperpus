<?php

require_once "functions.php"

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SIPerpus</title>
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/pure-min.css"
    integrity="sha384-X38yfunGUhNzHpBaEBsWLO+A0HDYOQi8ufWDkZ0k9e0eXz/tH3II7uKZ9msv++Ls"
    crossorigin="anonymous" />
  <link rel="stylesheet" href="assets/css/header.css" />
</head>

<body>
  <header class="navbar pure-menu pure-menu-horizontal">
    <a href="dashboard.php" class="pure-menu-heading">SI Perpustakaan</a>
    <ul class="pure-menu-list">
      <li class="pure-menu-item">
        <a href="dashboard.php" class="link-header">Dashboard</a>
      </li>
      <li class="pure-menu-item">
        <a href="daftar_anggota.php" class="link-header">Anggota</a>
      </li>
      <li class="pure-menu-item">
        <a href="daftar_buku.php" class="link-header">Buku</a>
      </li>
      <li class="pure-menu-item">
        <a href="transaksi_buku.php" class="link-header">Peminjaman</a>
      </li>
      <li class="pure-menu-item">
        <a href="transaksi_peminjam.php" class="link-header">Laporan Peminjaman</a>
      </li>
      <li class="pure-menu-item">
        <a href="tampil.php" class="link-header">Ganti Password</a>
      </li>
    </ul>
    <div class="user-info">
      <span>Halo, Jamaludin [Petugas]</span>
      <button class="pure-button pure-button-danger logout-button">
        KELUAR
      </button>
    </div>
  </header>
</body>

</html>