<?php
include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pengarang</title>
    <!-- PureCSS dan DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/pure-min.css" 
    integrity="sha384-X38yfunGUhNzHpBaEBsWLO+A0HDYOQi8ufWDkZ0k9e0eXz/tH3II7uKZ9msv++Ls" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/karang.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
</head>
<body>
    <div class="container">
        <h2>Daftar Pengarang</h2>
        <div class="container-header">
            <a href="add_pengarang.php" class="add-button">Tambah Pengarang</a>
        </div>
        <table id="pengarangTable" class="pure-table pure-table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>No WA</th>
                    <th>Email</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $ambil_data_pengarang = ambil_data_pengarang();
                    $no = 1;
                    foreach($ambil_data_pengarang as $data_pengarang):
                    ?>
                <tr>
                    <td><?php echo $no;?></td>
                    <td><?php echo['nama_pengarang'] ?></td>
                    <td><?php echo['tempat_lahir'] ?></td>
                    <td><?php echo date('d-m-Y', strtotime(['tanggal_lahir'])) ?></td>
                    <td><?php echo['no_wa'] ?></td>
                    <td><?php echo['email'] ?></td>
                    <td class="action-buttons">
                        <a href="edit_pengarang.php?id=1">Edit</a>
                        <button>Hapus</button>
                    </td>
                </tr>
                <?php
                $no++;
                endforeach;
                ?>
            </tbody>
        </table>
    </div>

    <!-- jQuery dan DataTables JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#pengarangTable').DataTable();
        });
    </script>

<?php
    include 'footer.php';
?>
</body>
</html>
