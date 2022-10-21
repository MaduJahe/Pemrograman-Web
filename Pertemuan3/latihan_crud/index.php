<?php

include_once("config.php");

$query = "SELECT * FROM customers ORDER BY id DESC";
$result = mysqli_query($conn_db, $query);

?>

<html>

<head>
    <title>Home Page</title>
</head>

<body>
    <a href="add.php">Add New Customer</a><br /><br />
    <table width='80%' border=1>
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
                        <td><?= $customer_data['update'] ?></td>

                        <td>
                            <a href='edit.php?id=<?= $customer_data["id"] ?>'>Edit</a> |
                            <a href='delete.php?id=<?= $customer_data['id'] ?>'>Delete</a>
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

    <?php if (isset($_GET["message"])) {
        $message = $_GET["message"];
        echo "<script type='text/javascript'>alert('$message');";
        echo "window.location='index.php' </script>";
    } ?>
</body>

</html>