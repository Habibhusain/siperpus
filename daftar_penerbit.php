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
    <link rel="stylesheet" href="assets/js/datatables.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/pure-min.css" integrity="sha384-X38yfunGUhNzHpBaEBsWLO+A0HDYOQi8ufWDkZ0k9e0eXz/tH3II7uKZ9msv++Ls" crossorigin="anonymous">
    
</head>
<body>

    <div id="main">
        <div class="header">
            <h1>Daftar Penerbit</h1>
        </div>

        <div class="card">
            <div class="card-header">
                <a href="tambah_penerbit.html" class="pure-button-primary pure-button">Tambah Penerbit</a>
            </div>
            <div class="card-content">
                <table id="tabel-siswa" class="cell-border" style="width:100%">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>Nama Penerbit</th>
                            <th>Alamat Penerbit</th>
                            <th>Nomor Whatsapp</th>
                            <th>Email</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Dhika</td>
                            <td>jakarta</td>
                            <td>0891280031</td>
                            <td>Dhika@gmail.com</td>
                            <td>
                                <a href="edit_penerbit.html" class="button-success pure-button">Edit</a>
                                <a href="hapus_penerbit.html" class="button-error pure-button">Hapus</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Kevin</td>
                            <td>jakarta</td>
                            <td>0891223831</td>
                            <td>Kevin@gmail.com</td>
                            <td>
                                <a href="edit_penerbit.html" class="button-success pure-button">Edit</a>
                                <a href="hapus_penerbit.html" class="button-error pure-button">Hapus</a>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Aidil</td>
                            <td>jakarta</td>
                            <td>0891332831</td>
                            <td>Aidil@gmail.com</td>
                            <td>
                                <a href="edit_penerbit.html" class="button-success pure-button">Edit</a>
                                <a href="hapus_penerbit.html" class="button-error pure-button">Hapus</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <script src="assets/js/datatables.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#tabel-siswa').DataTable();
            
            $('#exampleModal').on('hide.bs.modal', function () {
                // Reset form jika diperlukan saat modal ditutup
                $(this).find('form').trigger('reset');
            });
        });
    </script>
    <?php
include 'footer.php';
?>
</body>
</html>
