<?php

include "koneksi.php";
$nama = $_POST['nama'];
session_start();
if (!isset($_SESSION['message'])) {
    $_SESSION['message'] = "Data Bernama $nama Berhasil Ditambah";
}
?>

<?php
if ($_POST) {
    $nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
    $insert = mysqli_query($koneksi, "INSERT INTO roles SET name='$nama' ");
    if ($insert) {
        header("location: index.php");
    } else {
        echo 'Data gagal';
    }
};



?>