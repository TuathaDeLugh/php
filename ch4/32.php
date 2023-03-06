<?php
session_start();
if(isset($_SESSION['no']))
{
    $i=$_SESSION['no'];
    echo"this is reload no $i";
    $i++;
    $_SESSION['no']=$i;
}
if(!(isset($_SESSION['no'])))
{
    echo"thsi is reload no 0";
    $i++;
    $_SESSION['no']="1";
}
?>