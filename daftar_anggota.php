<?php
include 'header.php';

  
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>DAFTAR ANGGOTA</title>
  <link rel="stylesheet" href="assets/js/datatables.min.css" />
</head>

<body>
  <div class="container">
    <div class="header-anggota">
      DATA ANGGOTA
    </div>
    <div class="add-anggota">
      <a
        href="#"
        class="pure-button pure-button-add">
        Anggota Baru
      </a>
    </div>
    <table id="myTable" class="pure-table pure-table-striped">
      <thead>
        <tr>
          <th>No.</th>
          <th>Nama Lengkap</th>
          <th>Email</th>
          <th>No WhatsApp</th>
          <th>Provinsi</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php $get_list_anggota = get_list_anggota();
              $no = 1;
              foreach ($get_list_anggota as $list_anggota):
        ?>
        <tr>
          <td><?php echo $no;?></td>
          <td><?php echo $list_anggota['nama']?></td>
          <td><?php echo $list_anggota['email']?></td>
          <td><?php echo $list_anggota['no_wa']?></td>
          <td><?php echo $list_anggota['alamat']?></td>
          <td>
            <a
              href="#"
              class="pure-button pure-button-print">
              Cetak Kartu
            </a>
            <a
              href="#"
              class="pure-button pure-button-edit">
              Edit
            </a>
            <a
              href="#"
              onclick="return confirm('Yakin ingin menghapus kategori ini?')"
              class="pure-button pure-button-delete">
              Hapus
            </a>
          </td>
        </tr>
        <?php 
        $no ++;
        endforeach;
        ?>
      </tbody>
    </table>
  </div>
  <script src="jquery-3.7.1.min.js"></script>
  <script src="datatables.min.js"></script>

  <script>
    $(document).ready(function() {
      $("#myTable").DataTable();
    });
  </script>

<?php
    include 'footer.php';
?>
</body>

</html>