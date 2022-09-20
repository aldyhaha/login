<?php
session_start();
if (!empty($_GET['hapus'])) {
    $hapus = $_GET['hapus'];
    //$nama = $_GET['hapus'];
    include 'koneksi.php';


    // $nama = mysqli_query($koneksi, "DELETE * FROM roles WHERE name='$hapus'");
    // $cek = mysqli_fetch_array($nama);
    $query = mysqli_query($koneksi, "SELECT * FROM roles WHERE id='$hapus'");
    $hasil = mysqli_fetch_array($query);
    if ($hasil) {
        $delete = "DELETE FROM roles WHERE id='$hapus'";
        $sql = mysqli_query($koneksi, $delete);
        if ($sql) {
            $_SESSION['hapus'] = "Data $_GET[name] Berhasil dihapus";
            header("location: index.php");
        } else
            echo $delete;
    }
}
