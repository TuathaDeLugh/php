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
        $num='000547023.24';
        $fox='The quick brown fox jumps over the lazy dog///';
        $php='  PHP Programming  ';
        echo ltrim($num,'0')."<br>".rtrim($fox,'/')."<br>".trim($php);
    ?>
</body>
</html>