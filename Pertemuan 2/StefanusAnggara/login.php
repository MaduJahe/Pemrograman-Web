<?php
session_start();

$database = [
    'username' => 'angga',
    'password' => 'open123'
];

if (isset($_POST['submit'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == $database['username'] && $password == $database['password']) {

        $_SESSION['username'] = $username;

        header('Location:admin.php');
    } else {
        echo '<script> alert("Username atau password salah!");
        window.location="login-page.php"; </script>';
    }
} else {
    echo '<script> window.location="login-page.php"; </script>';
}