<?php

session_start(); 

$_SESSION['nama'] = "Stefanus Anggara Murti";
$_SESSION['absen'] = 27;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <?php

    echo "Nama saya " . $_SESSION['nama'] . "<br>" . 
    "Nomor absen " . $_SESSION['absen']; 
    ?>

</body>


</html>