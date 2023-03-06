<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
<input type="number" name="no"> 
    <input type="submit" name="submit" value="Submit" /> 
    </form>
    <?php
    if($_POST)
    {
        $no = $_POST['no'];
        function factorial($num) {

            if ($num < 2) {
                return 1;
            } else {
                return ($num * factorial($num-1));
            }
        }
        
        echo factorial($no);
    }
    ?>
</body>
</html>