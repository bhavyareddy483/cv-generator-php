<!DOCTYPE html>
<html>
<head>
    <title></title>
<!--<meta charset="utf-8">-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css" />


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
<link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">
 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
 
 <style >
body {
            background-image: url(img/ban.jpg);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
        div{
            margin-top:30px;
            margin-left:175px;
            text-align: center;
        }
        h1{
            margin-left: 175px;
        }
     

</style>
        
</head>
<body>

<?php
require('config.php');
//If form submitted, insert values into the database.
if (isset($_REQUEST['username']))
{
        // removes backslashes
    $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
    $username = mysqli_real_escape_string($con,$username); 
    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($con,$email);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con,$password);
    $query = "INSERT into `register` (username, password, email)
    VALUES ('$username', '$password', '$email')";
        $result = mysqli_query($con,$query);
        if($result)
        {
            header("Location:login.php");
   //          echo "<div class='form'>

   // <h1> You are registered successfully.</h1>
   //  <br/><h3>Click here to <a href='login.php'>Login</a></h3></div>";
        }
else{
        echo '<script>alert("invalid email or password")</script>'; 
       }
     }
?>
<form>
 
<br>
<br>
  <div class="form" >
     <!--<b><h1 style="font-family:normal;">REGISTER</h1></b>-->
<form name="registration" action="" method="post">
                           <!-- <div>

       <input type="text" class="form-control" name="username" placeholder="Username" required />
       <br></br>
  <input type="email" class="form-control" name="email" placeholder="Email" required />
  <br></br>
    
       <input type="password" class="form-control" name="password" placeholder="Password" required />
       <br></br>
       
<center> <input type="submit" class="btn btn-primary"  name="submit" value="Register" /></center>
   
    </div> -->

    <div class="col-xs-4">
      <h1 style="font-family: cursive;">Register</h1>
      <div class="input-group">
     
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input id="username" type="text" class="form-control" name="username" placeholder="username" style="width:200px;height: 30px;" required/>
      </div>
     <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
      <input id="email" type="text" class="form-control" name="email" placeholder="Email" style="width:200px;height: 30px;" required/>
    </div>
   <div class="input-group">
    
<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
      <input id="password" type="password" class="form-control" name="password" placeholder="password" style="width:200px;height: 30px;" required/>
    </div>

    <br>
     <div class="input-group">
    
  <input type="submit" class="btn btn-primary" style= "border-radius: 25px ;"  name="submit" value="Register" /><br/>
  <div style="margin-left: 15px;">
 <p><h2 style="color: white">Already registered?<a href='login.php' style="color:blue;font-family:normal;">Login now</a></h2></p>
</div>
 
</div>

</div>

</form>
  
  </body>
</html>