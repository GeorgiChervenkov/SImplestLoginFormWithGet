<?php
session_start();

?>


<!DOCTYPE html>
<html>
	<head>
	   	<title>login form</title>
      <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Freckle+Face&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="CSSstyle.css"/>
  </head>

<body>

<nav>
    <ul>
    <li><a href="login.php">Home</a></li>
    <li><a href="blocked-page.php">Protected page</a></li>
    <li><a href="#">Contact</a></li>
    <li><a href="logout-line.php">Log Out</a></li>
  </ul>
</nav>



<main>


<?php

if(isset($_SESSION['isLoggedIn'])) {


  echo "<p>You are already logged in!</p>";

} else {

 
$theForm = <<<THEFORM


  <p>Welcome to WheatBook!</p>
  <h2>Please enter your user name and password to log in:</h2>

  <form method='post' action='response.php'>

      <input type='text' name='userName' id='username'>
      <input type='password' name='password'>
      <input type='submit'>

  </form>


THEFORM;

echo $theForm;
}

?>



  <?php


    $isBlock =  $_GET["Blocked"];
    $badUserCredentials = $_GET["badUserCredentials"];

    if(isset($isBlock)) {

      echo "<h2>Ah, ah, aaaaah ... please log in first!</h2>";
      echo "<script>document.getElementById('username').focus();</script>";

    } else if($badUserCredentials) {

      echo "<h2>User name OR password is wrong!</h2>";
      echo "<script>document.getElementById('username').focus();</script>";

    }


  ?>


</main>

	</body>
</html>