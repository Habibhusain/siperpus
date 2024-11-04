<?php
include 'header.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Entri Buku</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/pure-min.css">
    <link rel="stylesheet" href="assets/css/tambah_buku.css">
</head>
<body>
    <div class="custom-form">
        <div class="form-box">
            <div class="header">
                <h2>Form Tambah Buku</h2>
            </div>
            
            <form class="pure-form pure-form-stacked">
                <fieldset>
                    <div class="pure-g">
                        <div class="pure-u-1">
                            <label for="judul">Judul</label>
                            <input id="judul" type="text" class="pure-input-1">
                        </div>

                        <div class="pure-u-1">
                            <label for="tahun">Tahun Terbit</label>
                            <input id="tahun" type="number" class="pure-input-1">
                        </div>

                        <div class="pure-u-1">
                            <label for="penerbit">Penerbit</label>
                            <select id="penerbit" class="pure-input-1">
                                <option value="">Pilih Penerbit</option>
                                <option value="1">Gramedia</option>
                                <option value="2">Erlangga</option>
                                <option value="3">Balai Pustaka</option>
                            </select>
                        </div>

                        <div class="pure-u-1">
                            <label for="penulis">Penulis</label>
                            <select id="penulis" class="pure-input-1">
                                <option value="">Pilih Penulis</option>
                                <option value="1">Andrea Hirata</option>
                                <option value="2">Tere Liye</option>
                                <option value="3">Dee Lestari</option>
                            </select>
                        </div>

                        <div class="pure-u-1">
                            <label for="stok">Stok</label>
                            <input id="stok" type="number" class="pure-input-1">
                        </div>

                        <div class="pure-u-1">
                            <label for="isbn">ISBN</label>
                            <input id="isbn" type="text" class="pure-input-1">
                        </div>

                        <div class="pure-u-1">
                            <label for="halaman">Jumlah Halaman</label>
                            <input id="halaman" type="number" class="pure-input-1">
                        </div>

                        <div class="pure-u-1 file-input-wrapper">
                            <label for="gambar">Gambar</label>
                            <input id="gambar" type="file" class="pure-input-1" accept="image/*">
                        </div>

                        <div class="pure-u-1 file-input-wrapper">
                            <label for="pdf">File PDF</label>
                            <input id="pdf" type="file" class="pure-input-1" accept=".pdf">
                        </div>

                        <div class="pure-u-1">
                            <a href="daftar_buku.html" class="pure-button pure-button-primary">Edit</a>
                            <a href="daftar_buku.html" class="pure-button">Kembali</a>
                        </div>
                        
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
    <?php
        include 'footer.php';
    ?>
</body>
</html>