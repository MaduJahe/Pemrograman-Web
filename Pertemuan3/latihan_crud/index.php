<?php

include_once("config.php");

$query = "SELECT * FROM customers ORDER BY id DESC";
$result = mysqli_query($conn_db, $query);

?>

<html>

<head>
    <title>Home Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body class="text-bg-primary p-3">
    <div class="bg-light border border-dark" style="padding: 20px;">
        <h1 class="text-center text-decoration-underline text-primary">List Customer</h1>
        <a href="add.php" class="btn btn-primary">Add New Customer</a><br /><br />
        <div class="KotakIndex">
            <table width='80%' border=1 align="center" class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Join Date</th>
                        <th>Last Update</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($result->num_rows > 0) : ?>
                        <?php while ($customer_data = mysqli_fetch_array($result)) : ?>
                            <tr>
                                <td><?php echo $customer_data['name'] ?></td>
                                <td><?php echo $customer_data['phone'] ?></td>
                                <td><?php echo $customer_data['email'] ?></td>
                                <td><?= $customer_data['created'] ?></td>
                                <td><?= $customer_data['updated'] ?></td>

                                <td>
                                    <a href='edit.php?id=<?= $customer_data["id"] ?>' class="btn btn-outline-primary">Edit</a> |
                                    <a href='delete.php?id=<?= $customer_data['id'] ?>' class="btn btn-outline-danger">Delete</a>
                                </td>
                            </tr>

                        <?php endwhile; ?>

                    <?php else : ?>
                        <tr>
                            <td colspan="6" rowspan="1" headers="" align="center"> Data Customer Tidak Di Temukan! </td>
                        </tr>

                    <?php endif; ?>

                    <?php mysqli_free_result($result); ?>
                </tbody>
            </table>
        </div>

        <?php if (isset($_GET["message"])) {
            $message = $_GET["message"];
            echo "<script type='text/javascript'>alert('$message');";
            echo "window.location='index.php' </script>";
        } ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>

</html>