<?php   
session_start(); //to ensure you are using same session
$_SESSION['login'] ="";
session_destroy(); //destroy the session
// header("location:http://http://localhost/expressCourier/CV/index.php"); //to redirect back to "index.php" after logging out
header ("Location: http://localhost/CV/index.php");
exit();
?>