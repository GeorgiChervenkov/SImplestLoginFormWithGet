<?php
session_start();



$userName = $_POST["userName"];

if(trim($userName) == "Georgi") {

    $_SESSION['isLoggedIn'] = true;
    header('Location: blocked-page.php');

} else {

  header('Location: login.php?badUserCredentials=true');

}

?>

