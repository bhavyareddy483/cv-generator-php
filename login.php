<!DOCTYPE html>
<html>
<!--<meta charset="utf-8">-->
<title>Login</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/style.css" />
<style type="text/css">
body {
            background-image: url(img/ban.jpg);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
       
        
</style>
</head>
<body>
<?php
require('config.php');
session_start();
// If form submitted, insert values into the database.
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $_SESSION['email'] = $_POST['email'];
      }


if (isset($_POST['email'])){
        // removes backslashes
    $email= stripslashes($_REQUEST['email']);
        //escapes special characters in a string
    // $email= mysqli_real_escape_string($con,$username);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con,$password);
    //Checking is user existing in the database or not
        $query = "SELECT * FROM `register` WHERE email='$email'
and password='$password'";
        $result = mysqli_query($con,$query) or die(mysqli_error($con));
        $rows = mysqli_num_rows($result);
        if($rows){
        $_SESSION['login'] = $email;
            // Redirect user to index.php
        header("Location: options.html");
         }else{
    echo "<div class='form'>
    <br>
    <br>
    <br>
    <br>
    <br>
   <center><h1>..Username/password is incorrect.</h1></center>
   <center> <br/><h3>Click here to <a href='login.php'>Login</a></h3></center></div>";
    }
    }else{
?>

<div class="form" style="position: absolute;left:500px;top:150px">
<h1 style="font-family:normal">Log In</h1>
<form action="" method="post" name="login">
   <!--  <div class="form-group col-md-4"> -->
        
 <!--<input type="email" class="form-control" name="email" placeholder="Email" style="width:200px;height:30px;" required  />-->
 <div class="col-xs-4">
  <div class="input-group">
     
      <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
      <input id="email" type="text" class="form-control" name="email" placeholder="Email" style="width:200px;height: 30px;" required/>
    </div>



    <br>



  <div class="input-group">
     
      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
      <input id="password" type="password" class="form-control" name="password" placeholder="password" style="width:200px;height: 30px;" required/>
    
</div>
<div>
</br>
    </div>
<input name="submit" type="submit" style="width:100px; border-radius: 25px ; color: blue" value="Login" />
</div>
<br>
<br>
<br>
<br>
<div>
<p><h2 style="color: white">Not registered yet?<a href='register.php' style="color:blue;font-family:normal;">Register Here</a></h2></p>
</div>
</form>

<?php } ?>
</body>
</html>

