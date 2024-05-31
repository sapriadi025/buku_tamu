<?php 
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "buku_tamu");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// fungsi untuk menambahkan data tamu
function registerTamu($data) {
    global $conn;

    $nama = htmlspecialchars($data["nama"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $no_tlp = htmlspecialchars($data["no_tlp"]);
    $jenis_kelamin = htmlspecialchars($data["jenis_kelamin"]);
    $bertemu = htmlspecialchars($data["bertemu"]);
    $keperluan = htmlspecialchars($data["keperluan"]);

    $query = "INSERT INTO tamu (nama, alamat, no_tlp, jenis_kelamin, bertemu, keperluan)
    VALUES ('$nama', '$alamat', '$no_tlp', '$jenis_kelamin', '$bertemu', '$keperluan_id')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function getGuests() {
    global $conn;
    $query = "SELECT * FROM tamu";
    $result = mysqli_query($conn, $query);
    $guest = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $guests[] = $row;
    }
    return $guests;
}

function getKeperluans() {
    global $conn;
    $result = mysqli_query($conn, "SELECT * FROM keperluan");
    $keperluans = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $keperluans[] = $row;
    }
    return $keperluans;
}

function hapusKeperluan($id) {
    global $conn;
    $query = "DELETE FROM keperluan WHERE id = $id";
    mysqli_query($conn, $query);
    return mysqli_fetch_assoc($result);
}

function getKeperluanById($id) {
    global $conn;
    $query = "SELECT keperluan FROM tamu WHERE id = $id LIMIT 1";
    $result =  mysqli_query($conn, $query);
    return mysqli_fetch_assoc($result);
}

function ubahKeperluan($data, $id) {
    global $conn;
    $keperluan = htmlspecialchars($data["keperluan"]);
    $query = "UPDATE tamu SET keperluan = '$keperluan' WHERE id = $id";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function tambahKeperluan ($data) {
    global $conn;
    $keperluan = htmlspecialchars($data["keperluan"]);
    $query = "INSERT INTO keperluan (keperluan) VALUES ('$keperluan')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function updateKeperluan($data) {
    global $conn;
    $id = $data["id"];
    $keperluan = htmlspecialchars($data["keperluan"]);
    $query = "UPDATE keperluan  SET keperluan = '$keperluan' WHERE $id = $id";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function updateTamu($data) {
    global $conn;

    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $no_tlp = htmlspecialchars($data["no_tlp"]);
    $jenis_kelamin = htmlspecialchars($data["jenis_kelamin"]);
    $bertemu = htmlspecialchars($data["bertemu"]);
    $keperluan = htmlspecialchars($data["keperluan"]);

    $query = "UPDATE tamu SET
              nama = '$nama',
              alamat = '$alamat',
              no_tlp = 'no_tlp',
              jenis_kelamin = '$jenis_kelamin',
              bertemu = '$bertemu',
              keperluan = $keperluan
              WHERE id = $id";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function deleteTamu($id) {
    global $conn;
    $query = "DELETE FROM tamu WHERE id = $id";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

?>