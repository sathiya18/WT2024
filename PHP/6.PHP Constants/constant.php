<!------------------Constants are like variables, except that once they are defined they cannot be changed or undefined.------------------------->
<!--
const vs. define()

const are always case-sensitive
define() has has a case-insensitive option.
const cannot be created inside another block scope, like inside a function or inside an if statement.
define can be created inside another block scope.

-->

<!--------------Create a constant with a case-sensitive name:---------------------->
<!DOCTYPE html>
<html>
<body>
<body align ="center">
<h2>Create a constant with a case-sensitive name:</h2>
<?php
// case-sensitive constant name
define("GREETING", "Welcome to PTU....!");
echo GREETING;
?> 
</body>
</html>
<br><br><br>


<!--------------Create a constant with a const keyword:---------------------->
<!DOCTYPE html>
<html>
<body>
<body align ="center">
<h2>Create a constant with a const keyword</h2>
<?php
const MYCAR = "Volvo";
echo MYCAR;
?> 
</body>
</html>
<br><br><br>



<!--------------Create a constant with a const Arrays:---------------------->
<!DOCTYPE html>
<html>
<body>
<body align ="center">
<h2>Create a constant with a const Arrays</h2>
<?php
define("cars", [
  "Alfa Romeo",
  "BMW",
  "Toyota"
]);
echo cars[0];
?> 
</body>
</html>
<br><br><br>



<!-----------------Constants are Global------------------->
<!DOCTYPE html>
<html>
<body>
<body align ="center">
<h2>Constants are Global</h2>
<?php
define("GREETINGS", "Welcome to PTU...!");

function myTest() {
  echo GREETINGS;
}
 
myTest();
?> 

</body>
</html>







