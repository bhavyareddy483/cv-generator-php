<?php
session_start();
error_reporting(E_ERROR | E_WARNING | E_PARSE);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cv1";
$sess = $_SESSION['login'];
if ($sess ){
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
 //$name=$_POST['name'];
 $emailid=$_POST['emailid'];
 $msg=$_POST['msg'];

 // if($_SESSION['email'] = $_POST['emailid'])
 // {

	$sql = "INSERT INTO fbk ( msg,email) VALUES ( '$msg','$sess')";

if ($conn->query($sql) === TRUE)
 {
  
header("location:successmsg.php");
    
    
} 
else 
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

}
?>
