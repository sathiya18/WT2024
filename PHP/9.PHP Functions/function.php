<html>
    <head>
        <title>PHP FUNCTION</title>
    </head>
 <body align="center" >
        <H1>FUNCTIONS IN PHP</H1>
        <table align = "center" border = "1" cellpadding = "20" cellspacing = "5">  
               <?php
                  function addition($first, $second) //function along with two parameters

                  {
                     $result = $first+$second;
                     
                     echo "<tr>";
                     echo "<td>First number: $first </td>"; 
                     echo"<br>";
                     echo "<td>Second number: $second </td>";
                     echo"<br>";
                     echo "<td>Addition: $result </td>";
                     echo "</tr>"; 

                  }

                  addition(10, 20); // Passing two arguments 
               ?>

            </table>
</body>
</html>
