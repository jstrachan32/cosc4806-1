<?php

  $valid_username = 'jan';
  $valid_password = 'password123!';

  $username = $_REQUEST['username'];
  $password = $_REQUEST['password'];

  if ($username == $valid_username && $password == $valid_password)
  {
    echo 'Successful login!';
  } else {
    echo 'Invalid username or password';
  }

?>