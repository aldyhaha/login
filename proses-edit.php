<?php
session_start();
$nama = $_POST['name'];
include 'koneksi.php';
if (!isset($_SESSION['edit'])) {
    $_SESSION['edit'] = "Data Bernama $nama Berhasil Di Update ";

    $id = $_POST['id'];
    $nama = $_POST['name'];
}
mysqli_query($koneksi, "UPDATE roles SET name='$nama' WHERE id='$id'");
header("Location:index.php");
