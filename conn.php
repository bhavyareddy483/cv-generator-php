
<?php

 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "cv1";
 $con = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n". $con -> error);
  

 
// Check connection  

$name=$_POST['name'];
$address=$_POST['address'];
$city=$_POST['city'];
$state=$_POST['state'];
$postal=$_POST['postal'];
$country=$_POST['country'];
$birthday=$_POST['birthday'];
$birthPlace=$_POST['birthPlace'];
$nationality=$_POST['nationality'];
$countryCode=$_POST['countryCode'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$sname=$_POST['sname'];
$spercent=$_POST['spercent'];
//$slocation=$_POST['slocation'];
$puc=$_POST['puc'];
$pupercent=$_POST['pupercent'];
//$course=$_POST['course'];
//$degree_clg=$_POST['degree_clg'];
$course=$_POST['course'];
//$hdegree_clg=$_POST['hdegree_clg'];
$skills1=$_POST['skills1'];
$pos1=$_POST['pos1'];
$co1=$_POST['co1'];
$pos2=$_POST['pos2'];
$co2=$_POST['co2'];
$pos3=$_POST['pos3'];
$co3=$_POST['co3'];

$sql="insert into ans(name,address,city,state,postal,country,birthday,birthPlace,nationality,countryCode,mobile,email,sname,spercent,puc,pupercent,course,skills1,pos1,co1,pos2,co2,pos3,co3) 
     values('".$name."','".$address ."','".$city."','".$state."','".$postal."','".$country."','".$birthday."','".$birthPlace."','".$nationality."','".$countryCode."','".$mobile."','".$email."','".$sname."','".$spercent."','".$puc."','".$pupercent."','".$course."','".$skills1."','".$pos1."','".$co1."','".$pos2."','".$co2."','".$pos3."','".$co3."')";

if(!mysqli_query($con,$sql))
{
	echo "not inserted";
}
else
{
	echo "inserted";
}


	header("Location: templates.php");
         

  ?>
