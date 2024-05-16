<?php  
session_start();
    include('connection.php'); 
  
    $username = $_POST['user'];  
    $password = $_POST['pass'];  
                
        $sql = "select *from register where username = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1)
        {   echo "<CENTER>" ;
            echo "<h1><center> PHP CRUD OPERATIONS </center></h1>"; 
            echo "<h4>Welcome ".$username."</h4>" ;
            echo "<br> <a href='register.html'> Add User </a></br>" ;
            echo "<br> <a href='updateuser.html'> Update User </a> <br>" ;
            echo "<br> <a href='deleteuser.html'> Delete User </a><br>" ;
            echo "<br> <a href='searchuser.html'> Search User </a><br>" ;
            echo "<br> <a href='showalluser.php'> Show All Users </a><br>" ;
            echo "<button onclick=\"window.location.href='Login.html'\">logout</button>";
            echo "</CENTER>" ;     
           
        }  
        else
        {  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
            
        }     
?> 
