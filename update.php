<?php
include "koneksi.php";
$edit = $_GET['edit'];
$query = mysqli_query($koneksi, "SELECT * FROM roles WHERE id='$edit'");
$result = mysqli_fetch_array($query);

?>

<h1>EDIT DATA</h1>
<form method="post" action="proses-edit.php">

    <?php
    if ($result) :
    ?>
        <table>
            <tr>

                <td><input type="hidden" name="id" value=" <?php echo $result['id']; ?>"></td>
            </tr>
            <tr>
                <td>NAMA ROLES</td>
                <td>: <input type="text" name="name" value="<?php echo $result['name'] ?>"></td>
            </tr>
            <tr>
                <td><input type="submit" value="SIMPAN"></td>
            </tr>
        <?php
    else :
        echo "ID TERSEBUT TIDAK ADA";
    endif;
        ?>


        </table>
</form>