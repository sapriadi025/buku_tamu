<?php 
require 'functions.php';

if(isset($_POST['id'])) {
    $id = $_POST['id'];
    if (deleteTamu($id) > 0) {
        echo "Data berhasil dihapus!";
    } else {
        echo "Data gagal dihapus!";
    }
    header("Location: daftar_tamu.php");
    exit;
} else {
    header("Location: daftrar_tamu.php");
    exit;
}

?>