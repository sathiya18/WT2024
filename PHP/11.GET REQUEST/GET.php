<html>
    <head>
        <title>GET REQUEST</title>
    </head>

<body align="CENTER">
<H1>GET REQUEST IN PHP</H1>
<table align = "center" border = "1" cellpadding = "20" cellspacing = "5"> 

<?php  

$name=$_GET["name"];       //receiving name field value in $name variable
$course=$_GET["course"];  //receiving course field value in $Course variable   

echo "<tr>";
echo "<td ><b>NAME </b></td>    
<td>$name</td>"; 
echo "</tr>"; 

echo "<tr>";
echo "<td><b>COURSE</b></td>    
<td>$course</td>";
echo "</tr>";

echo "<tr>";
echo "<td><button onclick=\"window.location.href='GET.html'\">BACK</button></td>";
echo "</tr>";

?>  

</table>
</body>
</html>
