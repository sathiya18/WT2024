<!--------------------Concatenation----------------------->
<!DOCTYPE html>
<html>
<body align ="center">
<h2>Concatenation</h2>
<?php
$txt1 = "Hello";
$txt2 = " world!";
echo $txt1 . $txt2;
?>  
</body>
</html>
<br><br><br>



<!-------------------      Concatenation assignment----------------------->
<!DOCTYPE html>
<html>
<body>
<h2>   Concatenation assignment</h2>
<?php
$txt1 = "Hello";
$txt2 = " world!";
$txt1 .= $txt2; //Appends $txt2 to $txt1
echo $txt1;
?>  

</body>
</html>

<br><br><br>