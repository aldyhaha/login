<?php
session_start();

if (isset($_POST['username'])) {
    $username = $_POST['username'];

    $query = mysqli_query($koneksi, "SELECT username FROM users WHERE username='$username'");

    if ($query->num->rows > 0) {
        echo 'email tidak ada';
    } else {
        mysqli_query($koneksi, "INSERT INTO users (username) VALUES ('$username')");
    }
}

//dapat dr data user
$nama = $_POST['nama'];
$email = $_POST['email'];
$password = $_POST['password'];
$query = mysqli_query($koneksi, "SELECT * FROM users WHERE nama='$nama', email='$email' and password='$password'");
$cek = mysqli_num_rows($query);
echo $cek;


//cocokan data user dengan yg valid
foreach ($list_user as $key => $value) {
    //login sukses
    if ($value['username'] == $user['username'] && $value['password'] == $user['password']) {
        $_SESSION['login'] = true;
        $_SESSION['username'] = $data['username'];
        $_SESSION['message'] = 'gagal';
        $_SESSION['status'] = 'berhasil';
        $_SESSION['pesan'] = 'edit';




        header("location: index.php");
    }

    //pw salah
    else if ($value['username'] == $user['username'] && $value['password']  !== $user['password']) {
        $_SESSION['error'] = 'Password salah';
        header("location: login.php");
    }

    //username salah
    else if ($value['username'] !== $user['username']) {
        $_SESSION['error'] = 'Username gaje';
        header("location: login.php");
    }
}
