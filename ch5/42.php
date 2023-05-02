<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/simple-notify@0.5.5/dist/simple-notify.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</head>
<body>
<div class="container">
<?php
$con =mysqli_connect("localhost","root","","db");
$qu ="select * from cust";
    $res=mysqli_query($con,$qu);
    echo "<table class='table table-striped' border='2'>";
    ?>
    <tr> <td>no</td>
    <td>name</td>
    <td>item</td>
    <td>mobile</td>
</tr>
    <?php

    while($row = mysqli_fetch_array($res)){
        echo "<tr>";
        echo "<td>".$row['cust_no']."<br></td>";
        echo "<td>".$row['cust_name']."<br></td>";
        echo "<td>".$row['item_purchase']."<br></td>";
        echo "<td>".$row['mob_no']."<br></td>";
        echo "</tr>";
    }
    echo "</table>";
?>
    </div>
</diV>
</body>
</html>