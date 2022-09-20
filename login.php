<?php
session_start();

if (isset($_SESSION['nama'])) {
    header("location: index.php");
}
if (isset($_SESSION['status'])) {
    echo $_SESSION['status'];
    //ditampilkan
    unset($_SESSION['status']);
    //dihapous
}
if (!isset($_SESSION['pesan'])) {
    $_SESSION['pesan'] = "Login Berhasil";
}



?>

<head>
    <title>Halaman Login</title>
</head>
<form method="post" action="cek.php" style="margin-top: 200px;">
    <table border=0 align="center">
        <h1 align="center">Masuk Sini</h1>
        <tr>
            <td>email</td>
            <td><input type="text" name="email" placeholder="contoh@gmail.com"></td>
        </tr>
        <tr>
            <td>password</td>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="LOGIN"></td>
        </tr>
    </table>
</form>