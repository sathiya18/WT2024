<HTML>
  <HEAD>
  <body align ="center">
<h2>global variable scope</h2>
<?php  
    $name = "Puducherry Technical University";        //Global Variable  
    function global_var()  
    {  
        global $name;  
        echo "Variable inside the function: ". $name;  
        echo "</br>";  
    }  
    global_var();  
    echo "Variable outside the function: ". $name;  
?>  
</BODY> 
</HEAD>
</HTML>