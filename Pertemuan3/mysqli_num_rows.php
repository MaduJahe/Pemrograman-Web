<?php

$connection = mysqli_connect("localhost", "root", "", "project1");

if (!$connection) {
    die("Connection Failed : " . mysqli_connect_error());
}
echo "Connection Successfully to Project1 <br>";

$query = mysqli_query($connection, "SELECT * FROM guru");
if (!$query) {
    echo ("Error Query " . mysqli_error($connection));
} else {
    $num_of_rec = mysqli_num_rows($query);
    echo "Number of record = " . $num_of_rec;
}

mysqli_error($connection);
