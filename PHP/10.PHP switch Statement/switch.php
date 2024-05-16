<!DOCTYPE html>
<html>
<body align ="center">
<h1>Switch Statement  </h1>

<?php
$favcolor = "red";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
    break; //The break keyword breaks out of the switch block
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default: //The default keyword specifies the code to run if there is no case match:
    echo "Your favorite color is neither red, blue, nor green!";
}
?>
 
</body>
</html>
