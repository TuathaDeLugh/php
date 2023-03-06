<?php
    $obj = fopen("text.txt", "w+");
    // $obj = fopen("text.txt", "a");
    fwrite($obj, "Umang");
    echo fread($obj, 10);
    fclose($obj);
?>