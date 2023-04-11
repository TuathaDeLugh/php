<?php
    $con = mysqli_connect("localhost","root","");
    mysqli_select_db($con,"db");
    $q = "insert into admin values('29','UmangSailor')";
    if(isset($con))
    {
        echo "Connect to Mysql";
    }
    else{
        echo "Couldn't connect ".mysqli_error($con);
    }
    if(mysqli_query($con,$q))
    {
        echo "<br>Data Inserted!";
    }
    mysqli_close($con);
?>