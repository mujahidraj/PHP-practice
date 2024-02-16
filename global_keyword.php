<?php
$x = 5; //global variable
$y = 10; // global variable

function myTest() {
  global $x, $y; // by using global keyword we can use a global variable is a function
  $y = $x + $y; // we cannot use global variable without using global keyword
}

myTest();
echo $y;


?>