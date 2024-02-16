<?php 

$favcolor = "blue";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
    break; //When PHP reaches a break keyword, it breaks out of the switch block.

   // This will stop the execution of more code, and no more cases are tested.
    
    //The last block does not need a break, the block breaks (ends) there anyway.
  case "blue":
    "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default: //The default keyword specifies the code to run if there is no case match
    echo "Your favorite color is neither red, blue, nor green!";
}


?>