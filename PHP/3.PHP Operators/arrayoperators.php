<!------------------------Union----------------------------->
<!DOCTYPE html>
<html>
<body align ="center">
<h2>Union</h2>
<?php
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  
var_dump($x + $y); 
?>  
</body>
</html>
<br><br><br>



<!------------------------Equality----------------------------->
<!DOCTYPE html>
<html>
<body>
<h2>Equality</h2>
<?php
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  
var_dump($x == $y);
?>  
</body>
</html>
<br><br><br>




<!---------------------Identity-------------------------------->
<!DOCTYPE html>
<html>
<body>
<h2>Identity</h2>
<?php
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  
var_dump($x === $y);
?>  
</body>
</html>
<br><br><br>




<!-----------------------Inequality------------------------------>
<!DOCTYPE html>
<html>
<body>
<h2>Inequality</h2>
<?php
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  
var_dump($x != $y);
?>  
</body>
</html>
<br><br><br>




<!-------------------------Inequality---------------------------->
<!DOCTYPE html>
<html>
<body>
<h2>Inequality</h2>
<?php
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  
var_dump($x <> $y);
?>  
</body>
</html>
<br><br><br>




<!-------------------------Non-identity---------------------------->
<!DOCTYPE html>
<html>
<body>
<h2>Non-identity</h2>
<?php
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  
var_dump($x !== $y);
?>  
</body>
</html>
