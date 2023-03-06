<html>
    <body>
    <form method="post">  
    Enter 2 no:<br>  
    <input type="number" name="no1"> 
    <input type="number" name="no2">  
    <input type="submit" name="submit" value="Submit" /> 
    <br>
    </form> 
    <!-- I think thats it!!! -->
    <?php
    if ($_POST) {
        function add($x=0, $y=1)
        {
            echo "addition of no are  ";
            $c = $x + $y;
            return $c;
        }
        $var = "add";
        $var($_POST['no1'],$_POST['no2']);
        echo $c;
    }
?>
    </body>
</html>