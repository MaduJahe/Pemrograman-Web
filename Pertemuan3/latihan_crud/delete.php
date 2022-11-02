<?php

use LDAP\Result;

include_once("config.php");

$id = $_GET['id'];

$result = mysqli_query($conn_db, "DELETE FROM customers WHERE id=$id");
if ($result) {
    $message = "Berhasil menghapus customer";
} else {
    $message = "Gagal Menghapus customer";
}
header("Location:index.php?message=" . $message);
