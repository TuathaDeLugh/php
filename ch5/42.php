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
$con =mysqli_connect("localhost","root","","db");
$qu ="select * from cust";
    $res=mysqli_query($con,$qu);
    echo "<table border='2'>";
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
    
</body>
</html>