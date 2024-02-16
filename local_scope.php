<?php
$x = 5; // global scope

function myTest() {
 
    $xy=10;//local varible and local varible can be called only in a function
    echo "this is the local function calling $xy \n";



}
myTest();

echo "Variable x outside function is: $x";

?>