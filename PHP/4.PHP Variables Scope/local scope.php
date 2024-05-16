<HTML>
  <HEAD>
  <body align ="center">
<h2>local variable scope</h2>
  <?php  
    function local_var()  
    {  
        $num = 45;  //local variable  
        echo "Local variable declared inside the function is: ". $num;  
    }  
    local_var();  
    
?>
</BODY> 
</HEAD>
</HTML>