<?php
  session_start();

  if (!isset($_SESSION['authenticated'])) {
    header('location: /login.php');
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <title>JStrachan - Assignment 1</title>
  </head>
  
  <body>
  
    <h1>Assignment 1</h1>
    <h3>Welcome, <?=$_SESSION['username'] ?></h3>
    
  </body>

  <footer>

    <button onclick="document.location='logout.php'">Log Out</button>
    
  </footer>
  
</html>