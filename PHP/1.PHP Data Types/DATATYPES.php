<!-----------------------STRINGS-------------------->
<!DOCTYPE html>
<html>
<body align="center">
<?php 
//In PHP, a variable starts with the $ sign, followed by the name of the variable:

$x = "Hello world!";

// The PHP var_dump() function returns the data type and value
var_dump($x);
echo "<br>";

echo($x)

?>

</body>
</html>"

<BR><BR><BR>

<!-----------------------INTEGERS-------------------->


<!DOCTYPE html>
<html>
<body>

<?php  
$x = 5985;

// The PHP var_dump() function returns the data type and value
var_dump($x);
echo "<br>";
echo($x)

?>  

</body>
</html>

<BR><BR><BR>

<!-----------------------FLOAT-------------------->
<!DOCTYPE html>
<html>
<body>

<?php  
$x = 10.365;
var_dump($x);
echo "<br>";
echo($x)

?>  

</body>
</html>

<BR><BR><BR>

<!----------------------- Boolean-------------------->

<!DOCTYPE html>
<html>
<body>

<?php 
$x = true;
var_dump($x);
echo "<br>";
echo($x)
?>

</body>
</html>
<BR><BR><BR>

<!-----------------------Array -------------------->
<!DOCTYPE html>
<html>
<body>

<?php  
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);

?>  

</body>
</html>
<BR><BR><BR>

<!----------------------- Object-------------------->
<!DOCTYPE html>
<html>
<body>

<?php
class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}

$myCar = new Car("red", "Volvo");
var_dump($myCar);
?>

</body>
</html>
<BR><BR><BR>

<!----------------------- NULL-------------------->

<!DOCTYPE html>
<html>
<body>

<?php
$x = "Hello world!";
$x = null;
var_dump($x);
?>

</body>
</html>
<!------------------>