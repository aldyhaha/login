<?php
include 'koneksi.php';

session_start();

if (!isset($_SESSION['nama'])) {
    $_SESSION['status'] = "GAGAL";
    header("location: login.php");
}
if (isset($_SESSION['pesan'])) {
    echo $_SESSION['pesan'];
    unset($_SESSION['pesan']);
}

if (isset($_SESSION['message'])) {
    echo $_SESSION['message'];
    unset($_SESSION['message']);
}

if (isset($_SESSION['hapus'])) {
    echo $_SESSION['hapus'];
    unset($_SESSION['hapus']);
}
if (isset($_SESSION['edit'])) {
    echo $_SESSION['edit'];
    unset($_SESSION['edit']);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Users</title>
</head>

<body>

    <h2>TABLE ROLES</h2>
    <table border="1" cellpadding="4">
        <p>
        <h1>Hello <?php echo $_SESSION['nama'] ?></h1>
        </p>
        <tr>
            <th>ROLES_ID</th>
            <th>NAMA_ROLES</th>

            <th colspan="3">AKSI</th>
        </tr>
        <?php

        $query = mysqli_query($koneksi, "SELECT * FROM roles");
        while ($result = mysqli_fetch_array($query)) {




        ?>
            <tr>
                <td><?php echo $result['id'] ?></td>
                <td><?php echo  htmlspecialchars($result['name']); ?></td>

                <td><a href="detail.php?id=<?= $result['id'] ?>">DETAIL</a></td>
                <td><a href="hapus.php?hapus=<?= $result['id'] ?>&name=<?php echo $result['name'] ?>">HAPUS</a></td>
                <td><a href="update.php?edit=<?= $result['id'] ?>">UPDATE</a></td>

                <!-- mengambil get dari url yaitu stelah ?id -->
            <?php
        }
            ?>


            <form method="POST" action="tambahin.php">
                <input type="text" name="nama" />
                <button type="submit" value="submit">TAMBAHKAN DATA</button>

            </form>
            <br></br>
            <table id="example1" class="table table-bordered table-striped">
                <a href="logout.php"> Logout</a>