<?php
include 'header.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Transaksi Peminjaman</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 600px;
            margin: 10px auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        .field {
            margin-bottom: 10px;
        }
        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }
        select, input[type="date"] {
            width: 100%;
            padding: 8px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 10px;
        }
        .book-entry {
            display: flex;
            justify-content: space-between;
            gap: 10px;
            margin-bottom: 10px;
        }
        .add-button, .submit-button {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }
        .add-button {
            background-color: #007bff;
        }
        .submit-button {
            background-color: #28a745;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Halaman Tambah Transaksi Peminjaman</h1>
    
    <!-- Nama Peminjam -->
    <div class="field">
        <label for="peminjam">Nama Peminjam</label>
        <select id="peminjam">
            <option value="" disabled selected>Pilih Peminjam</option>
            <option value="peminjam1">Peminjam 1</option>
            <option value="peminjam2">Peminjam 2</option>
            <option value="peminjam3">Peminjam 3</option>
            <option value="peminjam4">Peminjam 4</option>
            <option value="peminjam5">Peminjam 5</option>
        </select>
    </div>

    <!-- Daftar Buku yang Dipinjam -->
    <div id="bookEntries">
        <!-- Entries for books will be added here dynamically -->
    </div>

    <!-- Tombol Tambah Buku -->
    <button class="add-button" id="addBookButton" onclick="addBookEntry()">Tambah Buku</button>

    <!-- Tombol Submit -->
    <button class="submit-button" onclick="submitTransaction()">Submit</button>
</div>

<script>
    let bookEntryCount = 0;

    function addBookEntry() {
        if (bookEntryCount >= 5) {
            alert("Maksimal 5 buku yang dapat dipinjam.");
            return;
        }

        // Buat div untuk satu entri buku
        const bookEntryDiv = document.createElement('div');
        bookEntryDiv.classList.add('book-entry');

        // Dropdown untuk judul buku
        const bookSelect = document.createElement('select');
        bookSelect.innerHTML = `
            <option value="" disabled selected>Pilih Buku</option>
            <option value="buku1">Buku 1</option>
            <option value="buku2">Buku 2</option>
            <option value="buku3">Buku 3</option>
            <option value="buku4">Buku 4</option>
            <option value="buku5">Buku 5</option>
        `;
        bookSelect.required = true;

        // Input tanggal pengembalian
        const dateInput = document.createElement('input');
        dateInput.type = 'date';
        dateInput.required = true;

        // Tambahkan dropdown dan input ke div
        bookEntryDiv.appendChild(bookSelect);
        bookEntryDiv.appendChild(dateInput);

        // Tambahkan div entri buku ke dalam kontainer utama
        document.getElementById('bookEntries').appendChild(bookEntryDiv);

        // Tambah jumlah entri buku
        bookEntryCount++;

        // Nonaktifkan tombol tambah jika sudah 5 entri
        if (bookEntryCount >= 5) {
            document.getElementById('addBookButton').disabled = true;
        }
    }

    function submitTransaction() {
        const peminjam = document.getElementById('peminjam').value;
        if (!peminjam) {
            alert("Silakan pilih peminjam.");
            return;
        }

        const bookEntries = document.querySelectorAll('.book-entry');
        if (bookEntries.length === 0) {
            alert("Silakan tambahkan setidaknya satu buku.");
            return;
        }

        // Ambil data dari setiap entri buku
        const transactionData = [];
        bookEntries.forEach(entry => {
            const bookTitle = entry.querySelector('select').value;
            const returnDate = entry.querySelector('input[type="date"]').value;
            if (bookTitle && returnDate) {
                transactionData.push({ bookTitle, returnDate });
            }
        });

        if (transactionData.length === 0) {
            alert("Silakan lengkapi data buku dan tanggal pengembalian.");
            return;
        }

        // Log data transaksi ke konsol (sebagai simulasi penyimpanan data)
        console.log("Peminjam:", peminjam);
        console.log("Data Buku:", transactionData);

        alert("Transaksi berhasil disubmit!");

        // Reset form setelah submit
        document.getElementById('peminjam').value = '';
        document.getElementById('bookEntries').innerHTML = '';
        bookEntryCount = 0;
        document.getElementById('addBookButton').disabled = false;
    }
</script>
<?php
    include 'footer.php';
?>
</body>
</html>
