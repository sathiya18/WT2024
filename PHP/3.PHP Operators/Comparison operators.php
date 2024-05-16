<!--------------------==	Equal------------------------------>
<!DOCTYPE html>
<html>
<body align ="center">
<h3> ==	Equal</h3>
<?php
$x = 100;  
$y = "100";

var_dump($x == $y); // returns true because values are equal
?>  
</body>
</html>
<br><br><br>



<!----------------------===	Identical---------------------------->
<!DOCTYPE html>
<html>
<body>
<h3>===	Identical</h3>
<?php
$x = 100;  
$y = "100";
var_dump($x === $y); // returns false because types are not equal
?>  
</body>
</html>
<br><br><br>



<!-----------------------!=	Not equal--------------------------->
<!DOCTYPE html>
<html>
<body>
<h3>!=	Not equal</h3>
<?php
$x = 100;  
$y = "100";
var_dump($x != $y); // returns false because values are equal
?>  
</body>
</html>
<br><br><br>




<!-----------------------<>	Not equal--------------------------->
<!DOCTYPE html>
<html>
<body>
<h3><>	Not equal</h3>
<?php
$x = 100;  
$y = "100";
var_dump($x <> $y); // returns false because values are equal
?>  
</body>
</html>
<br><br><br>


<!----------------------!==	Not identical---------------------------->
<!DOCTYPE html>
<html>
<body>
<h3>!==	Not identical</h3>
<?php
$x = 100;  
$y = "100";
var_dump($x !== $y); // returns true because types are not equal
?>  
</body>
</html>
<br><br><br>



<!-------------------- >	Greater than------------------------------>
<!DOCTYPE html>
<html>
<body>
<h3>>	Greater than</h3>
<?php
$x = 100;
$y = 50;
var_dump($x > $y); // returns true because $x is greater than $y
?>  
</body>
</html>
<br><br><br>



<!--------------------- <	Less than ----------------------------->
<!DOCTYPE html>
<html>
<body>
<h3><	Less than</h3>
<?php
$x = 10;
$y = 50;
var_dump($x < $y); // returns true because $x is less than $y
?>  
</body>
</html>
<br><br><br>




<!--------------------- <	greater than or equal to ----------------------------->
<!DOCTYPE html>
<html>
<body>
<h3><	greater than or equal to</h3>
<?php
$x = 50;
$y = 50;
var_dump($x >= $y); // returns true because $x is greater than or equal to $y
?> 
</body>
</html>
<br><br><br>



<!---------------------- <=	Less than or equal to ---------------------------->
<!DOCTYPE html>
<html>
<body>
<h3><=	Less than or equal to</h3>
<?php
$x = 50;
$y = 50;
var_dump($x <= $y); // returns true because $x is less than or equal to $y
?>  
</body>
</html>
<br><br><br>



<!--------------------- <=>	Spaceship ----------------------------->
<!DOCTYPE html>
<html>
<body>
<h3><=>	Spaceship</h3>
<?php
$x = 5;  
$y = 10;
echo ($x <=> $y); // returns -1 because $x is less than $y
echo "<br>";
$x = 10;  
$y = 10;
echo ($x <=> $y); // returns 0 because values are equal
echo "<br>";
$x = 15;  
$y = 10;
echo ($x <=> $y); // returns +1 because $x is greater than $y
?>  
</body>
</html>
