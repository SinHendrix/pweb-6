<?php
    include('../config.php');

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "insert into admin (username, password) values('$username', '$password')";
    $query = mysqli_query($db_connection, $sql);

    if ($query) {
        echo "<p>penambahan admin: $username berhasil</p>";
        header('location: index.php');
    }
?>