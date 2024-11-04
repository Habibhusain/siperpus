<?php
include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Penerbit</title>
    <link rel="stylesheet" href="assets/css/penerbit.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/pure-min.css" integrity="sha384-X38yfunGUhNzHpBaEBsWLO+A0HDYOQi8ufWDkZ0k9e0eXz/tH3II7uKZ9msv++Ls" crossorigin="anonymous">
    
</head>
<body>

    <div id="main">
        <div class="form-container">
            <form class="pure-form pure-form-stacked">
                <fieldset>
                    <h1>Tambah Penerbit</h1>
                    <div class="pure-g">
                        <div class="pure-u-1 pure-u-md-1-3">
                            <label for="nama-penerbit">Nama Penerbit</label>
                            <input type="text" id="nama-penerbit" class="pure-u-23-24" required="" autofocus/>
                        </div>
                        <div class="pure-u-1 pure-u-md-1-3">
                            <label for="alamat">Alamat</label>
                            <input type="text" id="alamat" class="pure-u-23-24"required="" />
                        </div>
                        <div class="pure-u-1 pure-u-md-1-3">
                            <label for="nomor-whatsapp">Nomor Whatsapp</label>
                            <input type="text" id="nomor-whatsapp" class="pure-u-23-24" required="" />
                        </div>
                        <div class="pure-u-1 pure-u-md-1-3">
                            <label for="multi-email">E-Mail</label>
                            <input type="text" id="multi-email" class="pure-u-23-24" required="" />
                        </div>
                       
                    </div>
                   
                    <div class="form-actions">
                        <button type="submit" class="pure-button pure-button-primary pure-u-1-2">Submit</button>
                    </div>
                    <a href="index.html" class="link-back">Kembali Ke Daftar Penerbit</a>
                </fieldset>
            </form>
            </div>
            <?php
                include 'footer.php';
            ?>
</body>
</html>
