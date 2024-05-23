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
        $val = "Hallo";
        echo gettype($val) ."<br>";
        $val2 = true;
        settype($val2,'string');
        echo gettype($val2);
        $a=array(10,20,30);
        print_r($a);
        if (isset($val)){
               echo"value of a is set $val";
        }
        echo"value of val $val";
        unset($val);
        
        echo"value of val $val";
        
        ?>
</body>
</html>