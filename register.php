<?php 

require 'functions.php';

if( isset($_POST['submit']) ) {
    if (registerTamu($_POST) > 0 ) {
        echo "Data berhasil ditambahkan!";
    } else {
        echo "Data gagal ditambahkan!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register tamu</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Register Tamu</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="nama">Nama :</label>
                <input type="text" name="nama" id="nama" required>
            </li>
            <li>
                <label for="alamat">Alamat :</label>
                <input type="text" name="alamat" id="alamat" required>
            </li>
            <li>
                <label for="no_tlp">No. Tlp :</label>
                <input type="text" name="no_tlp" id="no_tlp" required>
            </li>
            <li>
                <label for="jenis_kelamin">Jenis Kelamin :</label>
                <select name="jenis_kelamin" id="jenis_kelamin" required>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </li>
            <li>
                <label for="bertemu">Bertemu :</label>
                <select name="bertemu" id="bertemu" required>
                    <option value="Manager">Manager</option>
                    <option value="HRD">HRD</option>
                    <option value="Staff">Staff</option>
                </select>
            </li>
            <li>
                <label for="keperluan">Keperluan</label>
                <select name="keperluan" id="keperluan">
                    <option value="Interview">Interview</option>
                    <option value="Meeting">Meeting</option>
                    <option value="Lainnya">Lainnya</option>
                </select>
            </li>
            <li>
                <button type="submit" name="submit">Submit</button>
            </li>
        </ul>
    </form>

    <br>
    <a href="daftar_tamu.php">Lihat Daftar Tamu</a>
    <br>
    <a href="data_keperluan.php">Lihat Data Keperluan</a>
</body>
</html>