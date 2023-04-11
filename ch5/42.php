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
$qu ="select * from customer";
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
        echo "<td>".$row['no']."<br></td>";
        echo "<td>".$row['name']."<br></td>";
        echo "<td>".$row['item_purchase']."<br></td>";
        echo "<td>".$row['mobile']."<br></td>";
        echo "</tr>";
    }
    echo "</table>";
?>
    
</body>
</html>