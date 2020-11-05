<?php
    session_start();
    include('../config.php');
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "select * from admin where username = '$username'";
    $query = mysqli_query($db_connection, $sql);
    $result = mysqli_fetch_assoc($query);
    if (mysqli_num_rows($query) == 0) {
        echo "<p>salah username <a href='form-login.php'>back</a></p>";
    }
    else {
        if ($password != $result['password']) {
            echo "<p>salah password <a href='form-login.php'>back</a></p>";
        }
        else {
            $_SESSION['username'] = $result['username'];
            header('location: index.php');
        }
    }

?>