<?php
include "../db/db.php";
if (isset($_POST['sign-in-email']) && isset($_POST['sign-in-password'])) {
    $email = $_POST['sign-in-email'];
    $password = $_POST['sign-in-password'];

    $q = "select * from admin where email='$email' && password='$password'";

    $query = mysqli_query($con, $q);


    if (mysqli_num_rows($query) === 1) {
        session_start();
        $_SESSION['admin'] = $email;
        header('Location:../admin.php');
        exit();

    } else {
        setcookie("data", "Invalid ID or Password",time()+5,"/");
        header("location:../login.php");
        // echo "<script>window.location.replace('../login.php');</script>";
        exit();
    }
} elseif (isset($_POST['logout'])) {
    session_start();
    session_destroy();
    setcookie("data", "Loged Out Successfully",time()+5,"/");
    header("location:../index.php");
    // echo "<script>window.location.replace('../index.php');</script>";
    exit();
} else {
    header('Location:../index.php');
    exit();
}