
              
  <?php
// Start the session
session_start();
?>

<html>
<head>
  <title>coverletter</title>
   <style>
body {
  margin:1rem auto;
  padding:1rem;
  max-width:38rem;
  border-style:solid;
}
  </style>
  
</head>
<body style="font-family:normal;">
<form>
 <div class="row" style="float:right;margin-right: 10px;">
<a href="templates.php" class="btn btn-primary" style= "border-radius: 25px ;margin-left: 20px;background-color: white;color: black; font-family: cursive;"> <span class="network-name">BACK</span></a>
<a href="index.php" style="margin-top:5px;color:black;font-family: cursive;">Home <span class="glyphicon glyphicon-home"></span>  </a>
</div>
<center><h3><u>COVER LETTER</u></h3></center>
<?php

 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "cv1";
 $con = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $con -> error);

 
$result = mysqli_query($con,"SELECT * FROM ans  WHERE email = '".$_SESSION['email']."'");
while($row = mysqli_fetch_array($result))
{
 echo " " . $row['name'];
}
?>
<hr size=4 color="black">
<?php
$result = mysqli_query($con,"SELECT * FROM ans  WHERE email = '".$_SESSION['email']."'");
while($row = mysqli_fetch_array($result))
{
 echo " " .$row['address'];
}
?>
<br>
<br>
<div>
<label for="comment">To Address</label>
<br>
<br>
  <!-- <input type="textarea" class="form-control" rows="5" name="skills1"></input> -->
 <!--<input type="text" style="width: 100"  name="To address" placeholder="enter address"/-->
</div>
<p><b>Respected Employer,</b></p>
<p>Your search for a candidate has called me out because the position a sdescribed is a perfect
match whith my skills as you see in my attached CV. I am an highly skilled and an hardworking,
smartworking person. I am a very friendly and am an enthusiastic team player which is one of the
main characteristic of a successful employee.</p>

<p><b>Here are some of my skills:</b></p>
<?php
$result = mysqli_query($con,"SELECT * FROM ans WHERE email = '".$_SESSION['email']."'");
while($row = mysqli_fetch_array($result))
{

echo " " . $row['skills1'].",";
}
?>
<br>
<br>
<p><b>Additionally my work history is :</b></p>
<p><u>work1</u></p>
<?php
$result = mysqli_query($con,"SELECT * FROM ans WHERE email = '".$_SESSION['email']."' ");
while($row = mysqli_fetch_array($result))
{

echo "I worked as  " . $row['pos1'] ." in " .$row['co1'];
}
?>
<p><u>work2</u></p>
<?php
$result = mysqli_query($con,"SELECT * FROM ans WHERE email = '".$_SESSION['email']."' ");
while($row = mysqli_fetch_array($result))
{

echo "I worked as " .$row['pos2']." in ".$row['co2'];


}
?>
<p><u>work3</u></p>

<?php
$result = mysqli_query($con,"SELECT * FROM ans WHERE email = '".$_SESSION['email']."' ");
while($row = mysqli_fetch_array($result))
{

echo "I worked as" .$row['pos3']." in ".$row['co3'];
}
?>
<p>Please contact me if you would like to schedule an interview or hav any questions about my skills or
experience.</p>

<p>Sincerely,</p>
<?php
{
$result = mysqli_query($con,"SELECT * FROM ans  WHERE email = '".$_SESSION['email']."'");
while($row = mysqli_fetch_array($result))

 echo " <b>" . $row['name']."</b>";
}
?>
<hr size=4 color="black">
<div>
  <span><a href="coverletter.php"><input type="button" value="print"  style="float:left;margin-right: 10px;width:15%;height:5%;background-color: pink"></a>

<a href="coverletter.php" download="coverletter.doc"> <input type="button" value="Download"  style="float:left margin-right: 10px;width:15%;height:5%;background-color: pink"><span class="network-name"></span></a>
<a href="lastpg.php"><input type="button" value="Finish" style="float:right;margin-right: 10px;width:15%;height:5%;background-color: pink" ></a>
</div>
</form>
</body>
</html>