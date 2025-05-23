<?php
  session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <title>JStrachan - Assignment 1</title>
  </head>
  
  <body>
  
    <h1>Assignment 1</h1>
    <h3>Welcome, <?=$_SESSION['username'] ?></h3>

    <p><a href="/login.php">Click here to login</a></p>
    
  
  </body>
  
</html>