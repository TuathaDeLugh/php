<?php
    $con = mysqli_connect("localhost","root","") or die('cannot connect'.mysqli_error($con));
    mysqli_select_db($con,"db");
    $q = "update customer set custname='bob' where custid=1";
    if(mysqli_query($con,$q)){
        echo "Updated!";
    }
    $a = "delete from customer where no='3'";
    if(mysqli_query($con,$a)){
        echo "<br>Deleted!";
    }
?>