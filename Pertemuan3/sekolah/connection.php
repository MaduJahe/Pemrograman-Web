<?php

$connection = mysqli_connect("localhost", "root", "", "sekolah_angga");

if (!$connection) {
    echo mysqli_connect_error();
}
