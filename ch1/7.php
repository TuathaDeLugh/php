<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <h1>Loops</h1>
        <form method="post">
            entr no for Loop
        <input type="number" name="no"> 
    <input type="submit" name="submit" value="Submit" /> 
        </form>
        <?php
        if ($_POST) { 
        $x = $_POST['no'];
            echo "While loop triggr when no <= 10";
        while($x <= 10) {
          echo "The number is: $x <br>";
          $x++;
        }
        echo "While loop triggr whn no <= 5";
        do {
            echo "The number is: $x <br>";
            $x++;
          } while ($x <= 5);
          echo "While loop triggr whn no <= 15";
          for ($x = 0; $x <= 15; $x++) {
            echo "The number is: $x <br>";
          }
          echo "for loop triggr whn no <= 25";
          for ($x = 0; $x < 25; $x++) {
            echo "The number is: $x <br>";
          }
          echo "";
        }
        ?>
    </body>
</html>