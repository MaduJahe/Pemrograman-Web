<?php

session_start(); 

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesi 5 - Checking</title>
</head>

<body>
    <?php

    unset($_SESSION['absen']);
    
    if(isset($_SESSION['absen'])){
        echo "Absen sya" . $_SESSION['absen'];
    } else{
        echo "Maaf absen tidak ditemukan";
    }
    
    ?>

</body>

</html>