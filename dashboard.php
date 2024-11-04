<?php
include 'header.php';
require_once "functions.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SI Perpustakaan</title>
    <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.6/build/pure-min.css">
    <link rel="stylesheet" href="assets/css/dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>

    <!-- Welcome Section -->
    <main>
        <section class="welcome-section">
            <h2>Selamat datang!</h2>
            <p>Ini merupakan contoh sistem informasi perpustakaan hasil dari tutorial <strong>ebook tutorial codeigniter lengkap dengan studi kasus membuat sistem informasi perpustakaan</strong>.</p>
            <p>Anda telah login sebagai <strong>Jamaludin Ishak</strong> (petugas).</p>
        </section>

        <section class="stats">
        <?php $total_buku = total_buku();
             foreach($total_buku as $row):?>
            <div class="stat-card blue">
                <div class="stat-card-content">
                <h3><?php echo $row[0];?></h3>
                    <i class="fas fa-book"></i>
                </div>
                <?php endforeach;?>

                <p>Jumlah Buku</p>
            </div>
            <div class="stat-card red">
            <?php $total_anggota = total_anggota();
             foreach($total_anggota as $row):?>
                <div class="stat-card-content">
                    <h3><?php echo $row[0];?></h3>
                    <i class="fas fa-users"></i>
                </div>
                <?php endforeach;?>
                <p>Jumlah Anggota</p>
            </div>

            <div class="stat-card yellow">
            <?php $total_peminjam = total_peminjam();
             foreach($total_peminjam as $row):?>
                <div class="stat-card-content">
                <h3><?php echo $row[0];?></h3>
                    <i class="fas fa-book"></i>
                </div>
                <?php endforeach;?>
                <p>Jumlah Total Peminjaman</p>
            </div>

            <div class="stat-card light-blue">
            <?php $total_petugas = total_petugas();
             foreach($total_petugas as $row):?>
                <div class="stat-card-content">
                <h3><?php echo $row[0];?></h3>
                    <i class="fas fa-user"></i>
                </div>
                <?php endforeach;?>
                <p>Jumlah Petugas</p>
            </div>
        </section>
        
    </main>
<?php
    include 'footer.php';
?>
</body>
</html>
