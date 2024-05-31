<?php 
require 'functions.php';

if(isset($_POST['update'])) {
    if (updateKeperluan($_POST) > 0) {
        echo "Data berhasil diubah!";
    } else {
        echo "Data gagal diubah!";
    }
}

if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $keperluan = getKeperluanById($id);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Keperluan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Ubah Keperluan</h1>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?= htmlspecialchars($id) ?>">
        <label for="keperluan">Keperluan :</label>
        <input type="text" name="keperluan" id="keperluan" value="<?= htmlspecialchars($keperluan['keperluan']) ?>" required>
        <button type="submit" name="update">Ubah Data</button>
    </form>
    <a href="data_keperluan.php">Kembali Ke Halaman Keperluan</a>
</body>
</html>