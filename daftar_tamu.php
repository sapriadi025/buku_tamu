<?php 
require 'functions.php';
$guests = getGuests();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Tamu</title>

    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2
        }
    </style>
</head>
<body>
    <h1>Daftar Tamu</h1>
    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>No. Tlp</th>
            <th>Jenis Kelamin</th>
            <th>Bertemu</th>
            <th>Keperluan</th>
            <th>Waktu</th>
            <th>aksi</th>
        </tr>

        <?php foreach ($guests as $guest) : ?>
        <tr>
            <td><?= htmlspecialchars($guest['id']) ?></td>
            <td><?= htmlspecialchars($guest['nama']) ?></td>
            <td><?= htmlspecialchars($guest['alamat']) ?></td>
            <td><?= htmlspecialchars($guest['no_tlp']) ?></td>
            <td><?= htmlspecialchars($guest['jenis_kelamin']) ?></td>
            <td><?= htmlspecialchars($guest['bertemu']) ?></td>
            <td><?= htmlspecialchars($guest['keperluan']) ?></td>
            <td><?= htmlspecialchars($guest['waktu']) ?></td>
            <td>
                <form action="ubah_tamu.php" method="post" style="display:inline;">
                    <input type="hidden" name="id" value="<?= htmlspecialchars($guest['id']) ?>">
                    <button type="submit" name="edit">Ubah</button>
                </form>
                <form action="hapus_tamu.php" method="post" style="display:inline">
                    <input type="hidden" name="id" value="<?= htmlspecialchars(['$guest']) ?>">
                    <button type="submit" name="delete" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus</button>
                </form>               
            </td>
        </tr>
        <?php endforeach; ?>
    </table>

    <br>
    <a href="register.php">Beranda</a>
</body>
</html>