<?php
// Start the session
session_start();
?>

<html>
<head>
  <title>Customers Feedback</title>
  <style>
body {
  margin:1rem auto;
  padding:1rem;
  max-width:38rem;
  border-style: double;
}
  hr{
    size:4;
    color: black;
  }

/*h1   {color: blue;}
p    {color: red;}*/
</style>
  
</head>
<body  style="font-family:normal;">
 <a href="index.php" style="font-size:20px;font-family: cursive;color:black;float:left;margin-right: 10px;">Home</a>
 
<form>
   <div class="row" style="margin-right: 10px;">
 
<center><h3><u>FEEDBACK</u></h3></center>
<hr size="3" color="black">

<?php

 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db ="cv1";
 $con = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $con -> error);

$result = mysqli_query($con,"SELECT * FROM fbk");
while($row = mysqli_fetch_array($result))
{
 echo "Email id :".$row['email']."<br>Given Feedback is:".$row['msg']."<br>"."<hr>";
}
?>
<hr size="3" color="black">

</div></form>
</body></html>


