<?php
// Start the session
session_start();
?>

<html>
<head>
	<title>Template1</title>
  <style>
body {
  margin:1rem auto;
  padding:1rem;
  max-width:38rem;
  border-style: double;
}
  
/*h1   {color: blue;}
p    {color: red;}*/
</style>
  
</head>
<body  style="font-family:normal;">
 
<form>
   <div class="row" style="float:left;margin-right: 10px;">
    <span><a href="templates.php"><input type="button" value="Change Template" style="width:130px;height:5%;background-color: pink"></a>
</div>
  <div class="row" style="float: right;margin-right: 10px;">
    <span><a href="index.php"><input type="button" value="Home" style="width:130px;height:5%;background-color: pink"></a>
</div>
 
<center><h3><u>CURRICULAM VITAE</u></h3></center>
<table background-color="blue" border="2 " width="100%"><tr><td style="border-color: red">PERSONAL INFORMATION</td></table></tr><br>

<?php
$dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "cv1";
 $con = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $con -> error);

 
$result = mysqli_query($con,"SELECT * FROM ans  WHERE email = '".$_SESSION['email']."' ");
while($row = mysqli_fetch_array($result))
{
 echo " Name : " . $row['name']."<br> Address :".$row['address']."<br>".$row['city']."<br>".$row['state']."<br>".$row['postal']."<br>".$row['country']."<br> DOB :".$row['birthday']."<br> Birthplace :".$row['birthPlace']."<br> Nationality :".$row['nationality']."<br> Contact :".$row['countryCode']." - ".$row['mobile']."<br> Email id :".$row['email'];
}
?>
<table background-color="blue" border="2 " width="100%"><tr><td style="border-color: red">Education Qualification</td></tr></table><br>
<?php
$result = mysqli_query($con,"SELECT * FROM ans WHERE email = '".$_SESSION['email']."'");
while($row = mysqli_fetch_array($result))
{

echo "I completed my schooling in ". $row['sname'] ." and scored " .$row['spercent']."%."."<br>";
echo "After schooling,I did ".$row['puc']." and scored ".$row['pupercent']."%."."<br>";
echo "My degree course was ".$row['course']."<br>";

}
?>
<table background-color="blue" border="2 " width="100%"><tr><td style="border-color: red">Skills And Ability</td></tr></table><br>
<?php
$result = mysqli_query($con,"SELECT * FROM ans WHERE email = '".$_SESSION['email']."'");
while($row = mysqli_fetch_array($result))
{

echo " " . $row['skills1'].",";
}
?>
<table background-color="blue" border="2 " width="100%"><tr><td style="border-color: red">Experience</td></tr></table><br>
<p><u>work1</u></p>
<?php
$result = mysqli_query($con,"SELECT * FROM ans WHERE email = '".$_SESSION['email']."' ");
while($row = mysqli_fetch_array($result))
{

echo " I worked as " . $row['pos1'] ." in " .$row['co1'];
}
?>
<p><u>work2</u></p>
<?php
$result = mysqli_query($con,"SELECT * FROM ans WHERE email = '".$_SESSION['email']."' ");
while($row = mysqli_fetch_array($result))
{

echo " I worked as " .$row['pos2']." in ".$row['co2'];


}
?>
<p><u>work3</u></p>

<?php
$result = mysqli_query($con,"SELECT * FROM ans WHERE email = '".$_SESSION['email']."' ");
while($row = mysqli_fetch_array($result))
{

echo " I worked as " .$row['pos3']." in ".$row['co3'];
}
?>
<hr size="2" color="black">

<div>
<span><a href="t1.php"><input type="button" value="Print Cv" style="width:15%;height:5%;background-color: pink"></a>

<a href="t1.php" download="t1.doc"> <input type="button" value="Download"style="width:15%;height:5%;background-color:pink"><span class="network-name"></span></a>


<a href="coverletter.php"><input type="button" value="Next" style="float:right;margin-right:15px;width:10%;height:5%;background-color: pink"></a>
</div>
</form>



</body>
</html>






