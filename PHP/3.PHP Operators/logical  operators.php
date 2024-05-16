
<!----------AND------------>
<!DOCTYPE html>
<html>
<body>

<h1>The and Operator</h1>

<p>Write a message if both conditions are true.</p>

<?php
$x = 100;  
$y = 50;

if ($x == 100 and $y == 50) {
    echo "Hello world!";
}
?>  

</body>
</html>
<BR><BR><BR>

<!---------OR------------->
<!DOCTYPE html>
<html>
<body>

<h1>The or Operator</h1>

<p>Write a message if at least one of the conditions are true.</p>

<?php
$x = 100;  
$y = 50;

if ($x == 100 or $y == 80) {
    echo "Hello world!";
}
?>  

</body>
</html>

<BR><BR><BR>

<!---------XOR------------->
<!DOCTYPE html>
<html>
<body>

<h1>The xor Operator</h1>

<p>Write a message if one of the conditions are true, bot not if both conditions are true.</p>

<?php
$x = 100;  
$y = 50;

if ($x == 100 xor $y == 80) {
    echo "Hello world!";
}
?>  

</body>
</html>
<BR><BR><BR>
<!----------&&(AND)------------><!DOCTYPE html>
<html>
<body>

<h1>The && Operator</h1>

<p>Write a message if both conditions are true.</p>

<?php
$x = 100;  
$y = 50;

if ($x == 100 && $y == 50) {
    echo "Hello world!";
}
?>  

</body>
</html>
<BR><BR><BR>
<!----------------||(OR)--------------------->
<!DOCTYPE html>
<html>
<body>

<h1>The || Operator</h1>

<p>Write a message if at least one of the conditions are true.</p>

<?php
$x = 100;  
$y = 50;

if ($x == 100 || $y == 80) {
    echo "Hello world!";
}
?>  

</body>
</html>
<BR><BR><BR>
<!----------------!(NOT)--------------------->
<!DOCTYPE html>
<html>
<body>

<h1>The ! Operator</h1>

<p>Write a message if the condition is NOT true.</p>

<?php
$x = 100;  

if (!($x == 90)) {
    echo "Hello world!";
}
?>  

</body>
</html>
