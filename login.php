<?php
  session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <title>JStrachan - A1 Login</title>
  </head>

  <body>

    <h1>A1 Login Form</h1>

    <form action="/validate.php" method="post">
      <label for="username">Username:</label>
      <br>
      <input type="text" id="username" name="username">
      <br>
      <label for="password">Password:</label>
      <br>
      <input type="password" id="password" name="password">
      <br>
      <br>
      <input type="submit" value="Log In">
    </form>

    <?php
      if (isset($_SESSION['login_attempts'])) {
        echo '<p style="color: red;">Invalid username or password. Number of unsuccessful login attempts: ' . $_SESSION['login_attempts'] . '</p>';
      }

    ?>


  </body>

</html>