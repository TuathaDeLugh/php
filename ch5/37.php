<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include('36withoutdb.php');
    $q = "create database db1";
    $query = mysqli_query($con,$q) or
        die("Database not created");
    echo"database created";
    ?>
</body>
</html>