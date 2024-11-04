<?php
include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Update</title>
    <link rel="stylesheet" href="assets/css/tampil.css">
</head>
<body>
    
    <div class="container">
        <h2>Your Profile</h2>
        <div class="tab-menu">
            <a href="tampil_password.php" class="active">Your profile</a>
            <a href="update_password.php">Update profile</a>
        </div>
        
        <hr> <br>

        <div class="form-group">
            <label for="nik">Nomor HP</label>
            <input type="text" id="nohp" placeholder="Masukan Nomor HP">
        </div>
        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" id="email" placeholder="Masukan Email" readonly>
            <small>This email is used for your login</small>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" placeholder="Masukan Password">
        </div>

        <br> <hr> <br>

        <div class="form-group">
            <label for="nik">NIK</label>
            <input type="text" id="nik" placeholder="Masukan Nomor NIK">
        </div>
        <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" id="name" placeholder="Masukan Nama">
        </div>
        <div class="form-group">
            <label for="place_of_birth">Tempat Lahir</label>
        <input type="text" id="place_of_birth" placeholder="Masukan Tempat Lahir">
    </div>
    <div class="form-group">
        <label for="date_of_birth">Tanggal Lahir</label>
        <input type="date" id="date_of_birth">
    </div>
    <div class="form-group">
        <label for="address">Alamat</label>
        <input type="text" id="address" placeholder="Masukan Alamat">
    </div>
    <div class="form-group">
        <label for="sub_district">Kelurahan</label>
        <input type="text" id="sub_district" placeholder="Masukan Kelurahan">
    </div>
    <div class="form-group">
        <label for="district">Kecamatan</label>
        <input type="text" id="district" placeholder="Masukan Kecamatan">
    </div>
    <div class="form-group">
        <label for="province">Provinsi</label>
        <input type="text" id="province" placeholder="Masukan Provinsi">
    </div>
    <div class="form-group">
        <label for="postal_code">Kode Pos</label>
        <input type="text" id="postal_code" placeholder="Masukan Kode Pos">
    </div>
</div>
<?php
    include 'footer.php';
?>
</body>
</html>
