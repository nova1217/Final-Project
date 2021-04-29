<?php
include ("Model/dbConfig.php");
error_reporting(0);

$Username =$_POST['Username'];
$Password =$_POST['Password'];

$conn= new mysqli("localhost","root","","webtech_project");

$username="";
$err_username="";
$password="";
$err_password="";
$hasError=false;
$err_message="";
			 
if($_SERVER["REQUEST_METHOD"]=="POST"){
if(empty($_POST["username"])){
	$err_username="Username Required";
	$hasError= true;
}
else {
	$username= htmlspecialchars($_POST["username"]);
}
if(empty($_POST["password"])){
	$err_password="Password Required";
	$hasError= true;
}
else{
	$password= htmlspecialchars($_POST["password"]);
	
}
if(!$hasError){
	$found=false;
		header("Location: dashboard.php");
	}
	if(!$found) {
		$err_message="Invalid Username or Password";
	}
	}
?>

<html>
     <head>
     <link rel="stylesheet" type="text/css" href="Style/Mystyle.css">
     </head>
  <body>
     <div id="header" class="font-mine">Panda Delivery</p>
     </div>
  <div id="logindiv">
  <table align="center">
  <tr>
<td colspan="2" align="center"><span class="err-msg"><?php echo $err_message;?></span></td>
<td><img src="logo/logo.jpg" width="150px" height="100px"></td>
<h1 align="center">Login Form</h1>


<form action="Loginpage.php" method="post">
<table> 
<tr>
<td><span class="font-mine">Username: </span></td>
<td><input type="text" placeholder="Username" name="username">
<br><span class="err-msg"><?php echo $err_username;?></span>
</td>
</tr>
<tr>
<td><span class="font-mine">Password: </span></td>
<td><input type="password" placeholder="Password" name="password">
<br><span class="err-msg"><?php echo $err_password;?></span>
</tr> 
<tr>
<td colspan="2" align="right"><input class="btn-mine" type="Submit" value="Login" name="login">
</tr>
<tr>
<h2 align="center">Not Registered Yet?</h2>
<a href="Signup.php"> <h3 align="center">Sign Up</h3></a></span></td>
</tr>
<tr>
</table>
</form>
</div>
<div id="centerheader" class="font-mine2"><h4>Welcome To Panda Delivery</h4></p>
</div>

<div id="footer" class="font-mine">Panda Delivery</p>
</div>
</body>
</html>