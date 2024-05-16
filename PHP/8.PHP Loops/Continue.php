<!DOCTYPE html>
<html>
<body align ="center">
<h1>Continue in For Loops <h2>
<?php  
for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    continue;
  }
  echo "The number is: $x <br>";
}
?>

</body>
</html>

