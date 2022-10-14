<?php

$connection = mysqli_connect("localhost", "root", "", "project1");

if (!$connection) {
    die("Connection Failed : " . mysqli_connect_error());
}
echo "Connection Successfully to Project1 <br>";

$query_insert = mysqli_query($connection, "INSERT INTO guru(ID, NAMA_LENGKAP, ALAMAT, TANGGAL, NIP, JURUSAN) 
VALUES('', 'Stefanus Anggara M', 'Sangkrah Rt02/Rw03', '2005-09-13', '12345', 'RPL')");

if ($query_insert) {
    echo ("Error query " . mysqli_error($connection));
}
mysqli_close($connection);
