<?php 
require 'functions.php';

if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $guest = getGuests($id);
}

if(isset($_POST['submit'])) {
    if (updateTamu($_POST) > 0) {
        echo "Data berhasil diubah!";
        header("Location: daftar_tamu.php");
        exit;
    } else {
        echo "Data gagal diubah";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Tamu</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Ubah Tamu</h1>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?= htmlspecialchars($guest['id']) ?>">
        <ul>
            <li>
                <label for="nama">Nama:</label>
                <input type="text" name="nama" id="nama" value="<?= htmlspecialchars($guest['nama']) ?>"  required>
            </li>
            <li>
                <label for="alamat">Alamat:</label>
                <input type="text" name="alamat" id="alamat" value="<?= htmlspecialchars($guest['alamat']) ?>"  required>
            </li>
            <li>
                <label for="no_tlp">No. tlp:</label>
                <input type="text" name="no_tlp" id="no_tlp" value="<?= htmlspecialchars($guest['no_tlp']) ?>"  required>
            </li>
            <li>
                <label for="jenis_kelamin">Jenis Kelamin:</label>
                <select name="jenis_kelamin" id="jenis_kelamin" required>
                    <option value="Laki-laki" <?= $guest['jenis_kelamin'] == 'Laki-laki' ? 'selected' : '' ?>>Laki-laki</option>
                    <option value="Perempuan" <?= $guest['jenis_kelamin'] == 'Perempuan' ? 'selected' : '' ?>>Perempuan</option>                        
                </select>
            </li>
            <li>
                <label for="bertemu">Bertemu:</label>
                <input type="text" name="bertemu" id="bertemu" value="<?= htmlspecialchars($guest['bertemu']) ?>" required>
            </li>
            <li>
                <label for="keperluan">Keperluan:</label>
                <select name="keperluan" id="keperluan" required>
                    <?php
                    $keperluans = $getKeperluans();
                    foreach ($keperluans as $keperluan) : ?>
                        <option value="<?= htmlspecialchars($keperluan['id']) ?>" <?= $guest['keperluan'] == $keperluan['id'] ? 'selected' : '' ?>><?=htmlspecialchars($keperluan['keperluan']) ?></option>
                    <?php endforeach ; ?>
                </select>
            </li>
            <li>
                <button type="submit" name="submit">Ubah Data</button>
            </li>
        </ul>
    </form>

</body>
</html>