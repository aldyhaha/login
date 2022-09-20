<?php
session_start();
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    include 'koneksi.php';
    $query = mysqli_query($koneksi, "SELECT * FROM users WHERE email='$email' and password='$password'");
    $result = mysqli_fetch_array($query);
?>

    <?php
    if ($result > 0) {
        echo 'Hai Kamu ' . $result['nama'];
        // $_SESSION['nama'];
        $_SESSION['nama'] = $result['nama'];
        //$_SESSION = ["nama" => "azhari"];
        header("location: index.php");
    ?>
    <?php
    } else {
        echo 'tidak ada';
        header("location: login.php");
    }
    ?>
<?php
}
?>



