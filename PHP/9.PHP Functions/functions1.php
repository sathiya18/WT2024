<?php

// Access user input directly (assuming form is submitted)
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];


function add($num1, $num2) {
  return $num1 + $num2;
}

$res = add($num1, $num2);

?>

<!DOCTYPE html>
<html>
<body bgcolor="lightblue">
<form action="" method="post">
  <table align="center" border="3" width="20%">
    <tr>
      <td colspan="2">
        <font color="black" size="5">CALCULATOR(ADDITION)</font>
      </td>
    </tr>
    <tr>
      <td>First Number:</td>
      <td><input type="integer" name="num1"></td>
    </tr>
    <tr>
      <td>Second Number:</td>
      <td><input type="integer" name="num2"></td>
    </tr>
    
    <tr>
    <td><input type="submit" value=" ADD "></td>
      <td><input type="integer" value="<?php echo $res; ?>" readonly="true"></td>
    </tr>
  </table>
</body>
</html>
