<html>
<body>
<?php
$con =mysqli_connect("localhost","root","","db");
$qu ="select * from Employee";
    $res=mysqli_query($con,$qu);
    ?>
    <table border='1'>
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
        echo "<td>".$row['desg']."<br></td>";
        echo "<td>".$row['sal']."<br></td>";
        echo "</tr>";
    }
    ?>
    </table>
</body>
</html>