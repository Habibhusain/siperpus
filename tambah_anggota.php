<?php
include 'header.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Anggota</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/pure-min.css" 
          integrity="sha384-X38yfunGUhNzHpBaEBsWLO+A0HDYOQi8ufWDkZ0k9e0eXz/tH3II7uKZ9msv++Ls" 
          crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/tambah_anggota.css">
    <style>
       
    </style>
</head>
<body>
    <div class="container">
        <h1>Tambah Anggota Baru</h1>
        <form id="memberForm" class="pure-form" onsubmit="return validateForm()">
            <fieldset class="pure-group">
                <label for="whatsapp">Nomor Whatsapp</label>
                <input type="tel" id="whatsapp" name="whatsapp" placeholder="Contoh: 081234567890" required>
            
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="example@email.com" required>
            
                <label for="nik">NIK</label>
                <input type="text" id="nik" name="nik" maxlength="16" placeholder="Masukkan NIK" required>
            
                <label for="fullname">Nama Lengkap</label>
                <input type="text" id="fullname" name="fullname" placeholder="Masukkan Nama Lengkap" required>
            
                <label for="birthplace">Tempat Lahir</label>
                <input type="text" id="birthplace" name="birthplace" placeholder="Masukkan Tempat Lahir" required>
            
                <label for="birthdate">Tanggal Lahir</label>
                <input type="date" id="birthdate" name="birthdate" required>
            
                <label for="address">Alamat</label>
                <textarea id="address" name="address" placeholder="Masukkan Alamat" required></textarea>
            
                <label for="kelurahan">Kelurahan</label>
                <input type="text" id="kelurahan" name="kelurahan" placeholder="Masukkan Kelurahan" required>
            
                <label for="kecamatan">Kecamatan</label>
                <input type="text" id="kecamatan" name="kecamatan" placeholder="Masukkan Kecamatan" required>
            
                <label for="province">Provinsi</label>
                <input type="text" id="province" name="province" placeholder="Masukkan Provinsi" required>
            
                <label for="postalcode">Kode Pos</label>
                <input type="text" id="postalcode" name="postalcode" maxlength="5" placeholder="Masukkan Kode Pos" required>
            
                <label for="userlevel">Level User</label>
                <select id="userlevel" name="userlevel" required>
                    <option value="" disabled selected>Pilih Level User</option>
                    <option value="superadmin">Super Admin</option>
                    <option value="admin">Admin</option>
                    <option value="peminjam">Peminjam</option>
                </select>
            </fieldset>
            
            <div class="button-group">
                <button type="submit" class="button-submit">Submit</button>
                <button type="button" class="button-cancel" onclick="window.history.back()">Batal</button>
            </div>
        </form>
    </div>
    
    <script>
        function validateForm() {
            const whatsapp = document.getElementById('whatsapp').value;
            const nik = document.getElementById('nik').value;
            const postalcode = document.getElementById('postalcode').value;

            if (!/^\d{10,15}$/.test(whatsapp)) {
                alert('Nomor WhatsApp harus berupa angka dan memiliki 10-15 digit.');
                return false;
            }

            if (nik.length !== 16 || !/^\d+$/.test(nik)) {
                alert('NIK harus terdiri dari 16 digit angka.');
                return false;
            }

            if (postalcode.length !== 5 || !/^\d+$/.test(postalcode)) {
                alert('Kode Pos harus terdiri dari 5 digit angka.');
                return false;
            }

            alert('Anggota berhasil ditambahkan!');
            return true;
        }
    </script>
    <?php
        include 'footer.php';
    ?>
</body>
</html>