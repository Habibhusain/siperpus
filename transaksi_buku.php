<?php
include 'header.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Transaksi Buku</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            color: #333;
            margin: 0;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            width: 90%;
            max-width: 800px;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.15);
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 26px;
            color: #343a40;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            overflow: hidden;
            border-radius: 8px;
        }
        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #e9ecef;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        tr:hover {
            background-color: #f1f3f5;
        }
        .action-buttons {
            display: flex;
            gap: 8px;
        }
        .edit-button, .delete-button {
            padding: 8px 12px;
            font-size: 14px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .edit-button {
            background-color: #ffc107;
            color: white;
        }
        .edit-button:hover {
            background-color: #e0a800;
        }
        .delete-button {
            background-color: #dc3545;
            color: white;
        }
        .delete-button:hover {
            background-color: #c82333;
        }
        .save-button {
            background-color: #28a745;
            color: white;
        }
        .save-button:hover {
            background-color: #218838;
        }
        input[type="text"], input[type="date"] {
            width: 100%;
            padding: 8px;
            font-size: 14px;
            border: 1px solid #ced4da;
            border-radius: 4px;
            box-sizing: border-box;
            background-color: #f8f9fa;
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }
        input[type="text"]:focus, input[type="date"]:focus {
            background-color: #fff;
            border-color: #80bdff;
            box-shadow: 0 0 8px rgba(0, 123, 255, 0.25);
            outline: none;
        }
        /* Modal styles */
        .modal {
            display: none; 
            position: fixed; 
            z-index: 1; 
            left: 0;
            top: 0;
            width: 100%; 
            height: 100%; 
            overflow: auto; 
            background-color: rgb(0,0,0);
            background-color: rgba(0,0,0,0.4); 
            padding-top: 60px;
        }
        .modal-content {
            background-color: #fefefe;
            margin: 5% auto; 
            padding: 20px;
            border: 1px solid #888;
            width: 80%; 
            max-width: 500px;
            border-radius: 8px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.15);
        }
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }
        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Daftar Transaksi Buku</h1>

    <table id="transactionTable">
        <thead>
            <tr>
                <th>Judul Buku</th>
                <th>Peminjam</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Pengembalian</th>
                <th>Status Pinjaman</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <!-- Data transaksi akan ditambahkan di sini oleh JavaScript -->
        </tbody>
    </table>
</div>

<!-- Modal for Editing Transaction -->
<div id="editModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <h2>Edit Transaksi</h2>
        <label for="editJudulBuku">Judul Buku:</label>
        <input type="text" name="judul_buku" id="editJudulBuku" />
        <label for="editPeminjam">Peminjam:</label>
        <input type="text" name="peminjam" id="editPeminjam" />
        <label for="editTanggalPinjam">Tanggal Pinjam:</label>
        <input type="date" name="tanggal_pinjam" id="editTanggalPinjam" />
        <label for="editTanggalPengembalian">Tanggal Pengembalian:</label>
        <input type="date" name="tanggal_pengembalian" id="editTanggalPengembalian" />
        <label for="editStatus">Status Pinjaman:</label>
        <input type="text" name="status" id="editStatus" />
        <button class="save-button" id="saveButton">Simpan</button>
    </div>
</div>

<script>
    let transactions = [
        {
            id: 1,
            judulBuku: "Buku A",
            peminjam: "Peminjam 1",
            tanggalPinjam: "2024-11-01",
            tanggalPengembalian: "2024-11-08",
            status: "Dipinjam"
        },
        {
            id: 2,
            judulBuku: "Buku B",
            peminjam: "Peminjam 2",
            tanggalPinjam: "2024-10-25",
            tanggalPengembalian: "2024-11-01",
            status: "Dikembalikan"
        }
    ];
    let editIndex;

    function displayTransactions() {
        const tableBody = document.getElementById("transactionTable").querySelector("tbody");
        tableBody.innerHTML = ""; 

        transactions.forEach((transaction, index) => {
            const row = document.createElement("tr");

            row.innerHTML = `
                <td>${transaction.judulBuku}</td>
                <td>${transaction.peminjam}</td>
                <td>${transaction.tanggalPinjam}</td>
                <td>${transaction.tanggalPengembalian}</td>
                <td>${transaction.status}</td>
                <td class="action-buttons">
                    <button class="edit-button" onclick="openModal(${index})">Edit</button>
                    <button class="delete-button" onclick="deleteTransaction(${index})">Hapus</button>
                </td>
            `;

            tableBody.appendChild(row);
        });
    }

    function openModal(index) {
        editIndex = index; // Simpan index untuk digunakan saat menyimpan
        const transaction = transactions[index];

        document.getElementById("editJudulBuku").value = transaction.judulBuku;
        document.getElementById("editPeminjam").value = transaction.peminjam;
        document.getElementById("editTanggalPinjam").value = transaction.tanggalPinjam;
        document.getElementById("editTanggalPengembalian").value = transaction.tanggalPengembalian;
        document.getElementById("editStatus").value = transaction.status;

        document.getElementById("editModal").style.display = "block"; // Tampilkan modal
    }

    function closeModal() {
        document.getElementById("editModal").style.display = "none"; // Sembunyikan modal
    }

    document.getElementById("saveButton").onclick = function() {
        saveTransaction(editIndex);
        closeModal();
    };

    function saveTransaction(index) {
        const newJudulBuku = document.getElementById("editJudulBuku").value;
        const newPeminjam = document.getElementById("editPeminjam").value;
        const newTanggalPinjam = document.getElementById("editTanggalPinjam").value;
        const newTanggalPengembalian = document.getElementById("editTanggalPengembalian").value;
        const newStatus = document.getElementById("editStatus").value;

        transactions[index] = {
            id: transactions[index].id, // Tetap menggunakan ID yang sama
            judulBuku: newJudulBuku,
            peminjam: newPeminjam,
            tanggalPinjam: newTanggalPinjam,
            tanggalPengembalian: newTanggalPengembalian,
            status: newStatus
        };

        displayTransactions(); // Tampilkan kembali transaksi yang telah diperbarui
    }

    function deleteTransaction(index) {
        transactions.splice(index, 1); // Hapus transaksi dari array
        displayTransactions(); // Tampilkan kembali transaksi
    }

    displayTransactions(); // Pertama kali tampilkan transaksi saat halaman dimuat
</script>

<?php
    include 'footer.php';
?>
</body>
</html>
