<?php
include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengarang</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/pure-min.css" 
    integrity="sha384-X38yfunGUhNzHpBaEBsWLO+A0HDYOQi8ufWDkZ0k9e0eXz/tH3II7uKZ9msv++Ls" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/karang.css">
</head>
<body>
    <div class="form-container">
        <h2>Tambah Pengarang</h2>
        <form class="pure-form pure-form-stacked">
            <label for="name">Nama</label>
            <input type="text" id="name" class="pure-input-1" placeholder="Nama Pengarang" required>
            
            <label for="birthplace">Tempat Lahir</label>
            <input type="text" id="birthplace" class="pure-input-1" placeholder="Tempat Lahir" required>
            
            <label for="birthdate">Tanggal Lahir</label>
            <input type="date" id="birthdate" class="pure-input-1" required>
            
            <label for="whatsapp">Nomor WA</label>
            <input type="tel" id="whatsapp" class="pure-input-1" placeholder="Masukkan No" required>
            
            <label for="email">Email</label>
            <input type="email" id="email" class="pure-input-1" placeholder="Masukkan Email" required>
            
            <div class="form-actions">
                <button type="submit" class="pure-button pure-button-primary">Simpan</button>
                <button type="reset" class="pure-button"><a href="index_pengarang.php">Batal</a></button>
            </div>
        </form>
    </div>
<?php
    include 'footer.php';
?>  
</body>
</html>
