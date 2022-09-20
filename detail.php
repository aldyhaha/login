<?php
if (!empty($_GET['id'])) {
    $roles_id = $_GET['id'];
}
include "koneksi.php";
$query = mysqli_query($koneksi, "SELECT * FROM roles WHERE id='$roles_id'");
$result = mysqli_fetch_array($query);

?>



<!DOCTYPE html>
<html lang="en">

<body>
    <?php
    if ($result) :
    ?>
        <h2>DETAIL ROLES</h2>
        <table>
            <tr>
                <td>ROLES ID</td>
                <td>: <?php echo $result['id'] ?></td>
            </tr>
            <tr>
                <td>NAMA ROLES</td>
                <td>: <?php echo $result['name'] ?></td>
            </tr>
        <?php
    else :
        echo "LU OLANG NYARI YANG GAK ADA DATA";
    endif;
        ?>

        </table>
</body>

</html>