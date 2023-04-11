<?php

include '36.php';

$enroll = $_GET['enroll'];

$q = " DELETE FROM `student` WHERE enroll = $enroll ";

mysqli_query($con, $q);
// header('location:old42.php');
echo "<script>;
window.location.replace('45-46index.php');</script>";


?>