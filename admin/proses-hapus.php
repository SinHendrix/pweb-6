<?php 
    include('../config.php');

    if (! isset($_GET['id'])) {
        header('Location: list-siswa.php');
    }

    $id = $_GET['id'];
    $sql = 'delete from calon_siswa where id='.$id;
    $query = mysqli_query($db_connection, $sql);

    if ($query) {
        header('Location: list-siswa.php?status:sukses');
    }
    else header('Location: list-siswa.php?status:gagal');
?>