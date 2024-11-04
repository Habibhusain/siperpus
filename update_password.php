<?php
include 'header.php';


if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $update_password = edit_password_pengguna();
    $update_profil = edit_profil_pengguna();

    
    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Update</title>
    <link rel="stylesheet" href="assets/css/update.css">
</head>
<body>
    
    <div class="container">
        <h2>Your Profile</h2>
        <div class="tab-menu">
            <a href="tampil_password.php">Your profile</a>
            <a href="update_password.php" class="active">Update profile</a>
        </div>
        
        <hr> <br>

        <div class="form-group">
            <label for="no_wa">Nomor HP</label>
            <input type="text" id="no_wa" name="no_wa" placeholder="Masukan Nomor HP">
        </div>
        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" placeholder="Masukan Email" readonly>
            <small>This email is used for your login</small>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Masukan Password">
        </div>

        <br> <hr> <br>

        <div class="form-group">
            <label for="nik">NIK</label>
            <input type="text" id="nik" name="nik" placeholder="Masukan Nomor NIK">
        </div>
        <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" id="name" name="nama" placeholder="Masukan Nama">
        </div>
        <div class="form-group">
            <label for="place_of_birth">Tempat Lahir</label>
        <input type="text" id="place_of_birth" name="tempat_lahir" placeholder="Masukan Tempat Lahir">
    </div>
    <div class="form-group">
        <label for="date_of_birth">Tanggal Lahir</label>
        <input type="date" id="date_of_birth" name="tanggal_lahir">
    </div>
    <div class="form-group">
        <label for="address">Alamat</label>
        <input type="text" id="address" name="alamat" placeholder="Masukan Alamat">
    </div>
    <div class="form-group">
        <label for="sub_district">Kelurahan</label>
        <input type="text" id="sub_district" name="kelurahan" placeholder="Masukan Kelurahan">
    </div>
    <div class="form-group">
        <label for="district">Kecamatan</label>
        <input type="text" id="district" name="kecamatan" placeholder="Masukan Kecamatan">
    </div>
    <div class="form-group">
        <label for="province">Provinsi</label>
        <input type="text" id="province" name="provinsi" placeholder="Masukan Provinsi">
    </div>
    <div class="form-group">
        <label for="postal_code">Kode Pos</label>
        <input type="text" id="postal_code" name="kode_pos" placeholder="Masukan Kode Pos">
    </div>
    
    <br> <hr> <br>

    <button class="btn">
        <a href="tampil.html">Update</a>
       </button>
</div>
<?php
    include 'footer.php';
?>
</body>
</html>
