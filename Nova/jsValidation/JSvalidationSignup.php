<?php

include("Model/dbConfig.php");
error_reporting(0);

?>


<html>
	<head>
		<title>Registation</title>
	</head>
	<body>
		
		<hr> 
		<form action="" method="post" onsubmit="return validation()">
			<fieldset>
				<legend><h1> Sign Up/ Registration Form</h1></legend>
				<table>
					<tr>
						<td>Name:</td>
						<td><input type="text" name="name" id="name"></td>
						<br><span id="err_name"></span>
					</tr>
					
					<tr>
						<td>Username:</td>
						<td><input type="text" name="username" id="username"></td>
						<br><span id="err_username"></span>
					</tr>
					
					<tr>
						<td>Email:</td>
						<td><input type="text" name="email" id="email"></td>
						<span id="err_email"></span>
					</tr>
					<tr>
						<td>Password:</td>
						<td><input type="password" name="password" id="password"></td>
						<br><span id="err_password"></span>
					</tr>
					
					<tr>
						<td>Gender: <?php //echo $err_gender;?></td>
						<td>
							<input type="radio" name="gender" value="Male"> Male
							<input type="radio" name="gender" value="Female"> Female
						</td>
					</tr>
					<tr>
						<td>Role:</td>
						<td>
							<select name="role">
								<option disabled selected>Choose</option>
								<option >Admin</option>
								<option >Employee</option>
								<option >Customer</option>
                                <option >Delivery Man</option>								
							</select>
						</td>
					</tr>
					<tr>
						<td colspan="5" align="center" ><input type="submit" name="register" value="Register"></td>
					</tr>
				</table>
			</fieldset>
		</form>
		
		<script>
		function get(id){
			return document.getElementById(id);
		}
		
		
		function validation(){
			cleanUp();
			var hasError=false;
			
			if(get("name").value == ""){
				get("err_name").innerHTML="Name Required";
				hasError=true;
				//err_msg += "*Name Required<br>";
			}
			
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
			
			if(get("email").value == ""){
				get("err_email").innerHTML="Email Required";
				hasError=true;
				//err_msg += "*Email Required<br>";
			} 
			
			//alert(err_msg);
			if(!hasError){
				return true;
			}
			return false;
			
		}
		function cleanUp(){
			
			get("err_name").innerHTML="";
			get("err_password").innerHTML="";
			get("err_username").innerHTML="";
			get("err_email").innerHTML="";
		}
		

	</script>
	
	</body>
	
</html>
