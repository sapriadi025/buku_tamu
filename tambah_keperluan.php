<?php 
require 'functions.php';

if(isset($_POST['submit']) ) {
    if(tambahKeperluan($_POST) > 0) {
        echo "Data berhasil ditambahkan!";
        header("Location: data_keperluan.php");
        exit;
    } else {
        echo "Data gagal dikirim!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Keperluan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Tambah Keperluan</h1>
    <form action="" method="post">
        <ul>
            <li>
                    <label for="keperluan">Keperluan</label>
                    <select name="keperluan" id="keperluan" required>
                        <option value="">>--Pilih Keperluan--<</option>
                        <option value="Meeting">Meeting</option>
                        <option value="Interview">Interview</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>
        </ul>
    </form>
</body>
</html>