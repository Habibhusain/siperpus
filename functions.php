<?php

require_once "config/config.php";

    function upload_gambar() {
        $ambil_ukuran_file = $_FILES['foto']['size'];
        $ukuran_diizinkan = 10000000;

        if ($ambil_ukuran_file > $ukuran_diizinkan) {
            echo 'Ukuran file maksimal 10 MB !!';
            exit();
        }

        $ambil_nama_file = $_FILES['foto']['name'];
        $ambil_ektensi_file = pathinfo($ambil_nama_file, PATHINFO_EXTENSION);
        $extensi_diizinkan = ['jpg', 'jpeg', 'png', 'svg', 'JPG', 'avif'];

        if (in_array($ambil_ektensi_file, $extensi_diizinkan)) {
            $ambil_tmp_file = $_FILES['foto']['tmp_name'];
            $tujuan_folder = "assets/image/";
            $target_file = $tujuan_folder . basename($ambil_nama_file);

            if (move_uploaded_file($ambil_tmp_file, $target_file)) {
                return $ambil_nama_file;
            } else {
                return FALSE;
            }
        } else {
            return FALSE;
        }
    }

    function total_buku()
    {
        global $db;
        
        $sql_total_buku = "SELECT COUNT(*) FROM siperpus_buku";
        $eksekusi_total_buku = $db->query($sql_total_buku);
        
        return $eksekusi_total_buku->fetch_assoc();
    }

    function total_peminjam()
    {
        global $db;
        $sql_total_peminjam = "SELECT COUNT(*) FROM siperpus_pinjam_buku";
        $eksekusi_total_peminjam = $db->query($sql_total_peminjam);
        
        return $eksekusi_total_peminjam->fetch_assoc();
    }

    function total_anggota()
    {
        global $db;

        $sql_total_anggota = "SELECT COUNT(*) FROM siperpus_user WHERE level_user = 'peminjam'";
        $eksekusi_total_anggota = $db->query($sql_total_anggota);
        
        return $eksekusi_total_anggota->fetch_assoc();
    }

    function total_petugas()
    {
        global $db;

        $sql_total_petugas = "SELECT COUNT(*) FROM siperpus_user WHERE level_user = 'admin'";
        $eksekusi_total_petugas = $db->query($sql_total_petugas);
        
        return $eksekusi_total_petugas->fetch_assoc();
    }

    function edit_transaksi_peminjaman_buku()
    {
        global $db;
        $judul_buku = $_POST['judul_buku'];
        $peminjam = $_POST['peminjam'];
        $tanggal_pinjam = $_POST['tanggal_pinjam'];
        $tanggal_pengembalian = $_POST['tanggal_pengembalian'];
        $status = $_POST['status'];


        $sql_edit_transaksi_peminjaman_buku = "UPDATE siperpus_buku SET judul_buku = '$judul_buku', peminjam = '$peminjam',
                                                tanggal_pinjam = '$tanggal_pinjam' , tanggal_Pemgembalian = '$tanggal_pengembalian', status ='$status'";
        $eksekusi_edit_transaksi_peminjaman_buku = $db->query($sql_edit_transaksi_peminjaman_buku);

        return $eksekusi_edit_transaksi_peminjaman_buku;
    }

    function edit_profil_pengguna()
    {
        global $db;

        $nik = $_POST['nik'];
        $nama = $_POST['nama'];
        $tempat_lahir = $_POST['tempat_lahir'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $alamat = $_POST['alamat'];
        $kelurahan = $_POST['kelurahan'];
        $kecamatan = $_POST['kecamatan'];
        $provinsi = $_POST['provinsi'];
        $kodepos = $_POST['kodepos'];

        $sql_edit_profil_pengguna = "UPDATE siperpus_user SET nik ='$nik', nama = '$nama', tempat_lahir = '$tempat_lahir',
                                    alamat= '$alamat', kelurahan = '$kelurahan', kecamatan='$kecamatan', provinsi ='$provinsi', kodepos='$kodepos'";
        $eksekusi_edit_profil_pengguna = $db->query($sql_edit_profil_pengguna);

        return $eksekusi_edit_profil_pengguna;
    }

    function edit_password_pengguna()
    {
        global $db;

        $email = $_POST['email'];
        $no_wa = $_POST['no_wa'];
        $paswword = md5($_POST['password']);
        $sql_edit_password_pengguna = "UPDATE siperpus SET email = '$email', no_wa = '$no_wa', password = '$password' "; 
        $eksekusi_edit_password_pengguna = $db->query($sql_edit_password_pengguna);

        return $eksekusi_edit_password_pengguna;
    }

    function ambil_data_pengarang()
    {
        GLOBAL $db;

        $sql_ambil_data_pengarang = "SELECT * FROM siperpus_pengarang";
        $eksekusi = $db->query($sql_ambil_data_pengarang);
        $result = array();

        while ($row = $eksekusi->fetch_assoc())
        {
            $result[] = $row;
        }

        return $result;
    }

    function hapus_pengarang()
    {
        GLOBAL $db;

        $id= $_GET['id'];
        $sql_delete_pengarang = "DELETE FROM siperpus_pengarang WHERE id='$id'";
        $eksekusi = $db->query($sql_delete_pengarang);
        return $eksekusi;
    }

    function get_list_penerbit() 
    {
        global $db;

        $sql = "SELECT * FROM siperpus_penerbit";
        $eksekusi = $db->query($sql);
    
        if($eksekusi) {
        $data = array();
    
        while ($row = $eksekusi->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
        }
    }

    function delete_penerbit()
    {
        if(isset($_GET['id'])) {
            $id = $_GET['id'];
            $sql_delete = "DELETE FROM siperpus_penerbit WHERE id='$id'";
            $eksekusi = connect_db()->query($sql_delete);
            return $eksekusi;
        }
    }
    function get_list_anggota() {

        global $db;

        $sql = "SELECT * FROM siperpus_user WHERE level_user = 'peminjam'";
        $eksekusi = $db->query($sql);
    
        if($eksekusi) {
        $data = array();
    
        while ($row = $eksekusi->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
        }
    }

    function getAllPinjamBuku()
    {
        global $db;

        $query = "SELECT * FROM siperpus_pinjam_buku";
        $result = $db->query($query);

        $pinjamBuku = [];
        if ($result) {
            while ($row = $result->fetch_assoc()) {
                $pinjamBuku[] = $row;
            }
        }
        return $pinjamBuku;
    }

    function add_pinjam_buku($judul_buku, $tanggal_pinjam, $tanggal_kembali)
    {
        global $db;

        // Default status peminjaman "sedang dipinjam"
        $status = 'sedang dipinjam';
        $denda = 0.00; // Default denda 0

        $query = "INSERT INTO siperpus_pinjam_buku (judul_buku, tanggal_pinjam, tanggal_kembali, status, denda) VALUES (?, ?, ?, ?, ?)";

        $stmt = $db->prepare($query);
        if ($stmt === false) {
            die("Error pada prepare statement: " . $db->error);
        }

        $stmt->bind_param("ssssd", $judul_buku, $tanggal_pinjam, $tanggal_kembali, $status, $denda);

        $result = $stmt->execute();
        $stmt->close();

        return $result;
    }

    function registerUser($nama, $email, $password)
    {
        global $db;

        // Hash password menggunakan md5
        $hashedPassword = md5($password);

        $query = "INSERT INTO siperpus_user (nama, email, password, level_user) VALUES (?, ?, ?, 'peminjam')";

        $stmt = $db->prepare($query);
        if ($stmt === false) {
            die("Error pada prepare statement: " . $db->error);
        }

        $stmt->bind_param("sss", $nama, $email, $hashedPassword);

        // Eksekusi query dan cek apakah berhasil
        $result = $stmt->execute();
        $stmt->close();

        return $result;
    }

    
    // Fungsi untuk menambahkan buku
    function addBook($judul_buku, $isbn, $jenis_buku, $jumlah_halaman, $tahun_terbit, $jumlah_stok, $tanggal_masuk, $klasifikasi, $no_rak, $file_ebook, $gambar_cover) {
        global $conn;
        $stmt = $conn->prepare("INSERT INTO siperpus_buku (judul_buku, isbn, jenis_buku, jumlah_halaman, tahun_terbit, jumlah_stok, tanggal_masuk, klasifikasi, no_rak, file_ebook, gambar_cover) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssisisssss", $judul_buku, $isbn, $jenis_buku, $jumlah_halaman, $tahun_terbit, $jumlah_stok, $tanggal_masuk, $klasifikasi, $no_rak, $file_ebook, $gambar_cover);
        $stmt->execute();
        $stmt->close();
    }

    // Fungsi untuk mendapatkan semua buku
    function getAllBooks() {
        global $conn;
        $result = $conn->query("SELECT * FROM siperpus_buku"); // Ganti buku menjadi siperpus_buku
        if (!$result) {
            die("Query failed: " . $conn->error); // Menampilkan kesalahan jika query gagal
        }
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    // Fungsi untuk mendapatkan buku berdasarkan ID
    function getBookById($id) {
        global $conn;
        $stmt = $conn->prepare("SELECT * FROM siperpus_buku WHERE id = ?");

        if (!$stmt) {
            die("Prepare failed: " . $conn->error);
        }

        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();

        if (!$result) {
            die("Query failed: " . $stmt->error);
        }

        return $result->fetch_assoc();
    }

    // Fungsi untuk memperbarui buku
    function updateBook($id, $judul_buku, $isbn, $jenis_buku, $jumlah_halaman, $tahun_terbit, $jumlah_stok, $tanggal_masuk, $klasifikasi, $no_rak, $file_ebook, $gambar_cover) {
        global $conn;
        $stmt = $conn->prepare("UPDATE siperpus_buku SET judul_buku = ?, isbn = ?, jenis_buku = ?, jumlah_halaman = ?, tahun_terbit = ?, jumlah_stok = ?, tanggal_masuk = ?, klasifikasi = ?, no_rak = ?, file_ebook = ?, gambar_cover = ? WHERE id = ?");

        if (!$stmt) {
            die("Prepare failed: " . $conn->error);
        }

        $stmt->bind_param("sssisisssssi", $judul_buku, $isbn, $jenis_buku, $jumlah_halaman, $tahun_terbit, $jumlah_stok, $tanggal_masuk, $klasifikasi, $no_rak, $file_ebook, $gambar_cover, $id);
        
        if (!$stmt->execute()) {
            die("Execute failed: " . $stmt->error);
        }

        $stmt->close();
    }

    // Fungsi untuk menghapus buku
    function deleteBook($id) {
        global $conn;
        $stmt = $conn->prepare("DELETE FROM siperpus_buku WHERE id = ?");

        if (!$stmt) {
            die("Prepare failed: " . $conn->error);
        }

        $stmt->bind_param("i", $id);
        
        if (!$stmt->execute()) {
            die("Execute failed: " . $stmt->error);
        }

        $stmt->close();
    }

    // Fungsi untuk mengupload file
    function uploadFile($file, $targetDir) {
        $targetFile = $targetDir . basename($file['name']);
        
        if (move_uploaded_file($file['tmp_name'], $targetFile)) {
            return $targetFile;
        } else {
            die("File upload failed: " . $file['error']);
        }
    }

    // Fungsi untuk menambahkan buku dengan upload file
    function addBookWithUpload($judul_buku, $isbn, $jenis_buku, $jumlah_halaman, $tahun_terbit, $jumlah_stok, $tanggal_masuk, $klasifikasi, $no_rak, $file_ebook, $gambar_cover) {
        // Tentukan direktori tujuan untuk file yang diupload
        $uploadDir = 'uploads/';
        
        // Upload file eBook jika ada
        if ($file_ebook['name']) {
            $file_ebook_path = uploadFile($file_ebook, $uploadDir);
        } else {
            $file_ebook_path = null; // Atau bisa menggunakan default
        }

        // Upload gambar cover jika ada
        if ($gambar_cover['name']) {
            $gambar_cover_path = uploadFile($gambar_cover, $uploadDir);
        } else {
            $gambar_cover_path = null; // Atau bisa menggunakan default
        }

        // Tambahkan buku ke database
        addBook($judul_buku, $isbn, $jenis_buku, $jumlah_halaman, $tahun_terbit, $jumlah_stok, $tanggal_masuk, $klasifikasi, $no_rak, $file_ebook_path, $gambar_cover_path);
    }
        

