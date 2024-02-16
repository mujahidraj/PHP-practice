<?php 

function myTest() {
    static $x = 10;
    echo "$x\n";
    $x++;
  }
  
  myTest();
  myTest();
  myTest();

?>