<?php

require 'functions.php';
$keperluans =getKeperluans();

if (isset($_POST['delete'])) {
    $id = $_POST['id'];
    hapusKeperluan($id);
    header("Location: data_keperluan.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Keperluan</title>

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
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Data Keperluan</h1>
    <a href="tambah_keperluan.php">Tambah Keperluan</a>
    <table>
        <tr>
            <th>Nomor</th>
            <th>Keperluan</th>
            <th>Aksi</th>
        </tr>

        <?php foreach ($keperluans as $keperluan) : ?>
        <tr>
            <td><?= htmlspecialchars($keperluan['id']) ?></td>
            <td><?= htmlspecialchars($keperluan['keperluan']) ?></td>
            <td>
                <form action="ubah_keperluan.php" method="post" style="display:inline;">
                    <input type="hidden" name="id" value="<?= htmlspecialchars($keperluan['id']) ?>">
                    <button type="submit" name="edit">Ubah</button>
                </form>
                <form action="hapus_keperluan.php" method="post" style="display:inline";>
                    <input type="hidden" name="id" value="<?= htmlspecialchars($keperluan['id']) ?>">
                    <button type="submit" name="delete" onclik="return confirm('apakah anda yakin ingin menghapus data ini?')">Hapus</button>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <br>
    <a href="register.php">Beranda</a>
</body>
</html>