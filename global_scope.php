<?php

$x = 5; // global scope

function myTest() {
  // using x inside this function will generate an error
  //echo "Variable x inside function is: $x";


}
myTest();

echo "Variable x outside function is: $x";

?>