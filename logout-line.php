<?php

session_start();


session_unset(); 


session_destroy(); 

?>


<!DOCTYPE html>
<html>
	
	<title>You're out</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Freckle+Face&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="CSSstyle.css">

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

    <p>You have been logged out!</p>

  </main>

	</body>
</html>