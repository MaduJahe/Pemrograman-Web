<?php
session_start();

if (isset($_SESSION['username'])) {
    session_destroy();
    echo '<script> alert("Anda berhasil logout");
    window.location="index.php";
    </script>';
} else {
    header("location:login-page.php");
    exit();
}
