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
  border-style:inset;
}
  
/*h1   {color: blue;}
p    {color: red;}*/
</style>
  
</head>
<body  style="font-family:normal;">
 
<form>
<!--  <?php

 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "cv";
 $imgna= $_FILES['file']['name'];
  $target_dir = "upload/";
  $target_file = $target_dir . basename($_FILES["file"]["name"]);

  // Select file type
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Valid file extensions
  $extensions_arr = array("jpg","jpeg","png","gif");

  // Check extension
  if( in_array($imageFileType,$extensions_arr) )
  {
 
     // Insert record
     $query = "insert into ans(name,imgna,address,city,state,postal,country,birthday,birthPlace,nationality,countryCode,mobile,email,sname,spercent,puc,pupercent,course,skills1,pos1,co1,pos2,co2,pos3,co3) 
     values('".$name."','".$imgna."','".$address ."','".$city."','".$state."','".$postal."','".$country."','".$birthday."','".$birthPlace."','".$nationality."','".$countryCode."','".$mobile."','".$email."','".$sname."','".$spercent."','".$slocation."','".$puc."','".$pupercent."','".$course."','".$degree_clg."','".$hdegreecrs."','".$hdegree_clg."','".$skills1."','".$pos1."','".$co1."','".$pos2."','".$co2."','".$pos3."','".$co3."')";
     mysqli_query($con,$query);

     move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$imgna);
  header("Location: templates.php");
         

  }
  ?> -->
   <div class="row" style="float:left;margin-right: 10px;">
    <span><a href="templates.php"><input type="button" value="Change Template" style="width:130px;height:5%;background-color: pink"></a>
</div>
  <div class="row" style="float: right;margin-right: 10px;">
    <span><a href="index.php"><input type="button" value="Home" style="width:130px;height:5%;background-color: pink"></a>
</div>
 
<center><h3><u>CURRICULAM VITAE</u></h3></center>
<hr size=5 color="black">
<h2><b>Personal Information</b></h2>

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
<hr size=5 color="black">
<h2><b>Education Qualification</b></h2>
<?php
$result = mysqli_query($con,"SELECT * FROM ans WHERE email = '".$_SESSION['email']."'");
while($row = mysqli_fetch_array($result))
{

echo "I completed my schooling in ". $row['sname'] ." and scored " .$row['spercent']."%."."<br>";
echo "After schooling,I did ".$row['puc']." and scored ".$row['pupercent']."%."."<br>";
echo "My degree course was ".$row['course']."<br>";

}
?>
<hr size=5 color="black">
<h2><b>Skills And Ability</b></h2>

<?php
$result = mysqli_query($con,"SELECT * FROM ans WHERE email = '".$_SESSION['email']."'");
while($row = mysqli_fetch_array($result))
{

echo " " . $row['skills1'].",";
}
?>
<hr size=5 color="black">
<h2><b>Expreience</b></h2>
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
<span><a href="t3.php"><input type="button" value="Print Cv" style="width:15%;height:5%;background-color: pink"></a>

<a href="t3.php" download="t3.doc"> <input type="button" value="Download"style="width:15%;height:5%;background-color:pink"><span class="network-name"></span></a>


<a href="coverletter.php"><input type="button" value="Next" style="float:right;margin-right:15px;width:10%;height:5%;background-color: pink"></a>
</div>
</form>



</body>
</html>






