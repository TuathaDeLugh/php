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
            Enter no for table
        <input type="number" name="no"> 
    <input type="submit" name="submit" value="Submit" />     
    </form>
        <?php
        if($_POST){
            $no = $_POST['no'];
            for ($i = 1; $i <= 10; $i++) {
                $ans = $no * $i;
                echo $no . " * " . $i . " = " . $ans ."<br>";
              }
        }
        ?>
    </body>
</html>