<?php
include ("Model/dbConfig.php");
error_reporting(0);

$Username =$_POST['Username'];
$Password =$_POST['Password'];

$conn= new mysqli("localhost","root","","webtech_project");

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


<form action="" method="post" onsubmit="return validation()">
<table> 
<tr>
<td><span class="font-mine">Username: </span></td>
<td><input type="text" placeholder="Username" id="username" name="username">
<br><span id="err_username"></span>
</td>
</tr>
<tr>
<td><span class="font-mine">Password: </span></td>
<td><input type="password" placeholder="Password" id="password" name="password">
<br><span id="err_password"></span>
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

<script>
		function get(id){
			return document.getElementById(id);
		}
		
		
		function validation(){
			cleanUp();
			var hasError=false;
			
			if(get("username").value == ""){
				get("err_username").innerHTML="Username Required";
				hasError=true;
				//err_msg += "*Username Required<br>";
			}
			if(get("password").value == ""){
				get("err_password").innerHTML="Password Required";
				hasError=true;
				//err_msg += "*Password Required<br>";
			}
			//alert(err_msg);
			if(!hasError){
				return true;
			}
			return false;
			
		}
		function cleanUp(){
			
			get("err_username").innerHTML="";
			get("err_password").innerHTML="";
		}
		

	</script>
</div>
<div id="centerheader" class="font-mine2"><h4>Welcome To Panda Delivery</h4></p>
</div>

<div id="footer" class="font-mine">Panda Delivery</p>
</div>
</body>
</html> 