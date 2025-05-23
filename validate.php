<?php

  session_start();

  $valid_username = 'jan';
  $valid_password = 'password123!';

  $username = $_REQUEST['username'];
  $password = $_REQUEST['password'];

  if ($username == $valid_username && $password == $valid_password)
  {
    echo 'Successful login!';
  } else {
    if (!isset($_SESSION['login_attempts'])){
      $_SESSION['login_attempts'] = 1;
    } else {
      $_SESSION['login_attempts']++;
    }

    echo 'Invalid username or password. You have ' .      
    $_SESSION['login_attempts'] . ' unsuccessful login attempts.';
  }

  

?>