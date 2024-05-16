<HTML>
  <HEAD>
  <body align ="center">
<h2>global keyword </h2>
<?php  
    $num1 = 5;      //global variable  
    $num2 = 13;     //global variable  
    function global_var()  
    {  
            $sum = $GLOBALS['num1'] + $GLOBALS['num2'];  
            echo "Sum of global variables is: " .$sum;  
    }  
    global_var();  
?>  </BODY> 
</HEAD>
</HTML>