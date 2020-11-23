<?php
session_start();

if (isset($_POST['login'])) {
    $username = $_POST['myUsername'];
    $password = $_POST['myPassword'];
    $password = md5($password);
    $query = "select * from login where user='$username' and pass='$password'";
    $result = mysqli_query($db, $query);

    if (mysqli_fetch_assoc($result)) {
        $_SESSION['User'] = $username;
        echo 'You are logged in as: ' . $_SESSION['User'] ;
    } else {
        echo 'Could not log you in.';
    }
} else {
    echo 'Please login to register for events...';
}
