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
    if (isset($_POST['name']))
    {
        setcookie('name',$_POST['name'],time()+14400);
        echo"cookie set for 4 hour";
    }?>
</body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Enter the name:<br>  
    <input type="text" name="name">
    <input type="submit"/> 
        </form>
</html>