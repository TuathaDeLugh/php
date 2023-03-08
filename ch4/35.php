<?php
$filename="Umang.txt";
fopen($filename,"r")
or die("Unable to Open $filename");

function num($num) {
    if($num%2==0) {
      throw new Exception("Given no is Even(this is throw exception)");
    }
    return true;
  }
  
  try {
    num(2);
    echo "Given no is Even(this is Try Block)";
  }
  
  catch(Exception $e) {
    echo 'Message: ' .$e->getMessage();
  }
?>