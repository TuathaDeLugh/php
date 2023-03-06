<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <form method="post">
        Enter string for global:
    <input type="text" name="gl" value="Umang">  <br>
    Enter string for local:
    <input type="text" name="lo" value="Sailor">  <br>
    Enter number for static:
    <input type="number" name="st" value="0">  <br>
    <input type="submit" name="submit" value="Submit" /> 
        </form>
    <?php
    if ($_POST) {
        $gl = $_POST['gl'];
        function local()
        {
            global $gl;
            $lo =  $_POST['lo'];
            echo "This is global $gl in function<br>";
            echo "This is local $lo in function<br>";
        }
        local();
        echo "This is global $gl outside function<br>";
        function staticfun()
        {
            static $st = 0;
            echo $st . "<br>";
            $st++;
        }
        staticfun();
        staticfun();
        staticfun();
    }
    ?>
    </body>
</html>