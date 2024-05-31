<?php 
require 'functions.php';

if(isset($_POST['id'])) {
    $id = $_POST['id'];

    if (hapusKeperluan($id) > 0) {
        echo "Data berhasil dihapus!";
    } else {
        echo "Data gagal dihapus!";
    }
    header("Location: data_keperluan.php");
    exit;
} else{
    header("Location: data_keperluan.php");
    exit;
}
?>

