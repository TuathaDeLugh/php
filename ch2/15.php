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
    for ($i=ord('a');$i<=ord('z');$i++)
    {
        echo chr($i)."<br>";
    } 
    $name="Umang Sailor";
    $uppr=strtoupper($name);
    $low=strtolower($name);
    $rev=strrev($name);
    echo $uppr."<br>".$low."<br>".$rev;

    ?>
</body>
</html>