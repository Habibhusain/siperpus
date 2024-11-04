<?php
include 'header.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buku</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/pure-min.css">
    <link rel="stylesheet" href="assets/css/daftar_buku.css">
</head>
<body>
    <div class="custom-wrapper">
        <div class="page-header">
            <h1>Data Buku</h1>
            <a href="tambah_buku.php" class="pure-button pure-button-success">+ Buku Baru</a>
        </div>
        
            <div class="table-header">
                <div class="show-entries">
                Show 
                <select class="pure-input-rounded">
                    <option>10</option>
                    <option>25</option>
                    <option>50</option>
                    <option>100</option>
                </select>
                entries
            </div>
            <div class="search-box">
                <label>Search:</label>
                <input type="text" class="pure-input-rounded">
            </div>
        </div>

        <table class="pure-table pure-table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul Buku</th>
                    <th>Tahun Terbit</th>
                    <th>Pengarang</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Tutorial CodeIgniter Lengkap Membangun Sistem Informasi Perpustakaan</td>
                    <td>2018</td>
                    <td>Diki Alfarabi Hadi</td>
                    <td><span class="status-badge status-tersedia">Tersedia</span></td>
                    <td>
                        <a href="edit_buku.php" class="pure-button pure-button-warning pure-button-small">Edit</a>
                        <button class="pure-button pure-button-error pure-button-small"> Hapus</button>
                    </td>
                </tr>
                <tr class="pure-table-odd">
                    <td>2</td>
                    <td>Belajar cepat codeigniter dengan studi kasus membuat aplikasi rental mobil</td>
                    <td>2017</td>
                    <td>Diki Alfarabi Hadi</td>
                    <td><span class="status-badge status-tersedia">Tersedia</span></td>
                    <td>
                        <a href="edit_buku.html" class="pure-button pure-button-warning pure-button-small">Edit</a>
                        <button class="pure-button pure-button-error pure-button-small"> Hapus</button>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Belajar PHP dan MySQL dari dasar sampai membuat sistem informasi laundry</td>
                    <td>2018</td>
                    <td>Diki Alfarabi Hadi</td>
                    <td><span class="status-badge status-tersedia">Tersedia</span></td>
                    <td>
                        <a href="edit_buku.html" class="pure-button pure-button-warning pure-button-small">Edit</a>
                        <button class="pure-button pure-button-error pure-button-small"> Hapus</button>
                    </td>
                </tr>
                <tr class="pure-table-odd">
                    <td>4</td>
                    <td>Panduan Belajar JQuery Dari Dasar Sampai Mahir Untuk Pemula</td>
                    <td>2016</td>
                    <td>Diki Alfarabi Hadi</td>
                    <td><span class="status-badge status-dipinjam">Sedang Dipinjam</span></td>
                    <td>
                        <a href="edit_buku.html" class="pure-button pure-button-warning pure-button-small">Edit</a>
                        <button class="pure-button pure-button-error pure-button-small"> Hapus</button>
                    </td>
                </tr>
            </tbody>
        </table>
        
        <div class="pagination">
            <div>Showing 1 to 4 of 4 entries</div>
            <div class="pure-button-group" role="group">
                <button class="pure-button">Previous</button>
                <button class="pure-button pure-button-active">1</button>
                <button class="pure-button">Next</button>
            </div>
        </div>
    </div>

<?php
    include 'footer.php';
?>
</body>
</html>