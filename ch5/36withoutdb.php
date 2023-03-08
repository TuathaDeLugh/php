<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $con = new mysqli($servername, $username, $password);
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
      }
      error_reporting(E_ERROR | E_PARSE);
?>