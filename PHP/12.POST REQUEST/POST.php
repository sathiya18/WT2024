
<html>
    <head>
        <title> POST REQUEST</title>
    </head>
        <body align ="CENTER" >
        <H1>POST REQUEST IN PHP</H1>
        <table align = "center" border = "1" cellpadding = "20" cellspacing = "0">  
<?php  

$name=$_POST["name"];          //receiving name field value in $name variable  
$course=$_POST["course"];        //receiving course field value in $course variable  
$institute=$_POST["institute"];     //receiving institute field value in $institute variable 

echo "<tr>";
echo "<td ><b>NAME </b></td>    
<td>$name</td>"; 
echo "</tr>"; 

echo "<tr>";
echo "<td><b>COURSE</b></td>    
<td>$course</td>";
echo "</tr>";

echo "<tr>";
echo "<td><b>INSTITUTE<b></td>   
<td>$institute</td>";
echo "</tr>"; 

echo "<tr>";
echo "<td></td><td><button onclick=\"window.location.href='POST.html'\">BACK</button></td>";
echo "</tr>"; 

?>  

</table>
</body>
</html>
