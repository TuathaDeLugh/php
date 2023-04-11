<?php
// not in practical start
include '36.php';
if (!isset($_GET['enroll'])){
    header('location:45-46index.php');
}
// not in practical end
if (!isset($_GET['enroll'])){
$enroll = $_GET['enroll'];

$q = " DELETE FROM `student` WHERE enroll = $enroll ";

mysqli_query($con, $q);
// header('location:old42.php');
echo "<script>;
window.location.replace('45-46index.php');</script>";
}

?>