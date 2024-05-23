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
    $mail="it.tdec@gmail.com";
    $url="umangsailor.bsite.net/login.aspx";
    echo substr($mail,0,strpos($mail,'@'))."<br>";
    echo substr($mail,-9,9 )."<br>";
    echo substr($url,strpos($url,'/'),strpos($url,'/'))."<br>";
    ?>
</body>
</html>