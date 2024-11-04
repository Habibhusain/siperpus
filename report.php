<?php
include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laporan Peminjaman Buku</title>
  <link rel="stylesheet" href="assets/css/report.css">
  <style>
   
  </style>
</head>
<body>

  <div class="container">
    <h1>Laporan Peminjaman Buku</h1>

    <form class="filter-form">
      <div>
        <label for="startDate">Tanggal Awal:</label>
        <input type="date" id="startDate" name="startDate">
      </div>
      <div>
        <label for="endDate">Tanggal Akhir:</label>
        <input type="date" id="endDate" name="endDate">
      </div>
      <button type="submit">Filter</button>
    </form>

    <table>
      <thead>
        <tr>
          <th>Judul Buku</th>
          <th>Nama Peminjam</th>
          <th>Tanggal Pinjam</th>
          <th>Tanggal Pengembalian</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Kisah Salman Zulkarnain Melawan Monster Amba</td>
          <td>Upin</td>
          <td>2023-09-15</td>
          <td>2023-09-22</td>
          <td>Dipinjam</td>
        </tr>
        <tr>
          <td>The Power of zalman</td>
          <td>Ipin</td>
          <td>2023-08-10</td>
          <td>2023-08-17</td>
          <td>Dikembalikan</td>
        </tr>
        <tr>
          <td>Perjalanan Salman Dan Zulkarnain</td>
          <td>Ipul</td>
          <td>2023-07-25</td>
          <td>2023-08-01</td>
          <td>Dipinjam</td>
        </tr>
      </tbody>
    </table>
  </div>
  <?php
    include 'footer.php';
  ?>
</body>
</html>
