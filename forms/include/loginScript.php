<?php
 require 'db_connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

  <div>
     <?php

    
     
     if(isset($_POST['signup'])){

     $email = $_POST['email'];
     $password=$_POST['password'];

   

     $sql="INSERT INTO user_login (email,password) VALUES('$email','$password')";
          
       mysqli_query($link,$sql);  
     }

     
     ?> 
  </div>

    <form action="loginScript.php" method="post">

    <input type="email"  name="email" placeholder="name" required>
    <input type="password"  name="password" placeholder="name" required>
    <input type="submit"  name="signup" value="Sign up">
    
    
    

    </form>
</body>
</html>