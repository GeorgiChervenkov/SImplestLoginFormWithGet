<?php

session_start();



if(isset($_SESSION['isLoggedIn'])) {


} else {

  header('Location: login.php?Blocked=true');

}

?>


<!DOCTYPE html>
<html>

	<title>protected page.</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Freckle+Face&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="styles.php">

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

    <p>You did it. Aren't you special!</p>

  </main>

	</body>
</html>