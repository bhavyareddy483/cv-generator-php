<!-- <!-- <!-- <?php 

session_start();
 ?>
<html>
<body  style="font-family: cursive;">
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
     $query = "insert into ans(name,imgna,address,city,state,postal,country,birthday,birthPlace,nationality,countryCode,mobile,email,sname,spercent,slocation,puc,pupercent,course,degree_clg,hdegreecrs,hdegree_clg,skills1,pos1,co1,pos2,co2,pos3,co3) 
     values('".$name."','".$imgna."','".$address ."','".$city."','".$state."','".$postal."','".$country."','".$birthday."','".$birthPlace."','".$nationality."','".$countryCode."','".$mobile."','".$email."','".$sname."','".$spercent."','".$slocation."','".$puc."','".$pupercent."','".$course."','".$degree_clg."','".$hdegreecrs."','".$hdegree_clg."','".$skills1."','".$pos1."','".$co1."','".$pos2."','".$co2."','".$pos3."','".$co3."')";
     mysqli_query($con,$query);

     move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$imgna);
  header("Location: templates.php");
         

  }
  ?><
  -->
  <div class="row" style="float:left;margin-right: 10px;">

<a href="templates.php" style="margin-top:5px;color:black;font-family: cursive;">Change Template</a>
</div>
  <div class="row" style="float: right;margin-right: 10px;">

<a href="index.php" style="margin-top:5px;color:black;font-family: cursive;">Home <span class="glyphicon glyphicon-home"></span>  </a>
</div>
<center><h3><u>CURRICULAM VITEA</u></h3></center>
<hr size=4 color="black">
<h2><b>PERSONAL INFORMATION</b></h2>

<?php

 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "cv";
 $con = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $con -> error);

 
$result = mysqli_query($con,"SELECT * FROM ans where email = '".$_SESSION['email']."'");
while($row = mysqli_fetch_array($result))
{
 echo " " . $row['name']."<br>".$row['address']."<br>".$row['city']."<br>".$row['state']."<br>".$row['postal']."<br>".$row['country']."<br>".$row['birthday']."<br>".$row['birthPlace']."<br>".$row['nationality']."<br>".$row['countryCode']."<br>".$row['mobile']."<br>".$row['email']."<br>".$row['imgna'];
}
?>
<hr size=4 color="black">
<h2><b>Education Qualification</b></h2>
<?php
$result = mysqli_query($con,"SELECT * FROM ans where email = '".$_SESSION['email']."'");
while($row = mysqli_fetch_array($result))
{

echo " ". $row['sname'] ."<br>" .$row['spercent']."<br>".$row['slocation']."<br>".$row['puc']."<br>".$row['pupercent']."<br>".$row['course']."<br>".$row['degree_clg']."<br>".$row['hdegreecrs']."<br>".$row['hdegree_clg'];
}
?>
<hr size=4 color="black">
<h2><b>Skills And Ability</b></h2>
<?php
$result = mysqli_query($con,"SELECT * FROM ans where email = '".$_SESSION['email']."'" );
while($row = mysqli_fetch_array($result))
{

echo " " . $row['skills1'].",";
}
?>
<hr size=4 color="black">
<h2><b>Expreience</b></h2>
<p><u>work1</u></p>
<?php
$result = mysqli_query($con,"SELECT * FROM ans where email = '".$_SESSION['email']."'");
while($row = mysqli_fetch_array($result))
{

echo " " . $row['pos1'] ."-" .$row['co1'];
}
?>
<p><u>work2</u></p>
<?php
$result = mysqli_query($con,"SELECT * FROM ans where email = '".$_SESSION['email']."'");
while($row = mysqli_fetch_array($result))
{

echo " " .$row['pos2']."-".$row['co2'];


}
?>
<p><u>work3</u></p>

<?php
$result = mysqli_query($con,"SELECT * FROM ans where email = '".$_SESSION['email']."'");
while($row = mysqli_fetch_array($result))
{

echo " " .$row['pos3']."- ".$row['co3'];
}
?>
<hr size="4" color="black">


<div>
<span><a href="t7.php"><input type="button" value="print cv"  style="float:left;margin-right: 10px;width:10%;height:5%;background-color: pink"></a>

<a href="t7.php" download="t7.doc"> <input type="button" value="Download"  style="float:left margin-right: 10px;width:10%;height:5%;background-color: pink"><span class="network-name"></span></a>
<a href="generated.php"><input type="button" value="next" style="float:right;margin-right: 10px;width:10%;height:5%;background-color: pink" ></a>
</div>
</form>
</div>
</body>
</html> --> --> -->