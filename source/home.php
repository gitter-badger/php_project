<?php
session_start();
//Mettre les cookies + variables de session
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Home</title>
    <meta charset="utf-8"/>
    <!-- <link rel="stylesheet" href="fonts/font-awesome-4.4.0/css/font-awesome.min.css"> Pas utile maintenant -->
    <link rel="stylesheet" type="text/css" href="global.css">
  </head>
  <body>
    <h1>PHP Project</h1>
    
    <h2>Sign up</h2>
    <?php
    if (!empty($_SESSION["add_error_msg"])) {
	echo $_SESSION["add_error_msg"] . "<br>";
	unset($_SESSION["add_error_msg"]); //Detruit la variable local $_SESSION["login_error_msg"]
    }
    ?>
    <form action="signup.php" method="post">
      <label for="login_su">Username :</label> <input type="text" id="login_su" name="login_su"/><br>
      <label for="password_su">Password :</label> <input type="password" id="password_su" name="password_su"/><br>
      <label for="email_su">Email :</label> <input type="text" id="email_su" name="email_su"/><br>
      <input type="submit" value="Sign up"/>
    </form>
    
    <h2>Sign in</h2>
    <?php
    if (!empty($_SESSION["login_error_msg"])) {
	echo $_SESSION["login_error_msg"] . "<br>";
	unset($_SESSION["login_error_msg"]);
    }
    ?>
    <form action="signin.php" method="post">
      <label for="login_si">Login :</label> <input type="text" id="login_si" name="login_si"/><br>
      <label for="password_si">Password :</label> <input type="password" id="password_si" name="password_si"/><br>
      <input type="submit" value="Sign in"/>
    </form>
  </body>
</html>
