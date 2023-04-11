<?php

include '36.php';

$cust_no = $_GET['cust_no'];

$q = " DELETE FROM `cust` WHERE cust_no = $cust_no ";

mysqli_query($con, $q);
// header('location:old42.php');
echo "<script>;
window.location.replace('old42.php');</script>";


?>