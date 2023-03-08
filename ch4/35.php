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
error_reporting(E_ERROR | E_PARSE);
    if (isset($_POST['save'])){
$filename="Umang.txt";

function num($num) {
    if($num%2==0) {
        throw new Exception("Given no is Even(this is throw exception)<br>");
    }
    return true;
}

try {
    num($_POST['no']);
    echo "Given no is Even(this is Try Block)<br>";
}

catch(Exception $e) {
    echo 'error: ' .$e->getMessage();
}
fopen($filename,"r")
or die("Unable to Open $filename");
    }
?>
<form action="35.php" method="post">
    Enter Any Number
    <input type="number" name="no" id="no">
    <input type="submit" value="save" name="save">
</form>

</body>
</html>
