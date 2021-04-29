<?php
include ("Model/dbConfig.php");
error_reporting(0);

$Name     =$_GET['Name'];
$Username =$_GET['Username'];
$Password =$_GET['Password'];
$Email    =$_GET['Email'];

?>


<html>
	<head></head> 
	<body>
		
	
		<fieldset>
			<legend><h1>EDIT Registration For Admin </h1></legend>
			<form action="" method="post" onsubmit="return validation()">
				<table>
					<tr>
						<td><span>Name</span></td>
						<td>:<input type="text" placeholder="Name" name="name" id="name"></td>
						<br><span id="err_name"></span>
					</tr>
					
					<tr>
						<td><span>Username</span></td>
						<td>:<input type="text" placeholder="Username" name="username" id="username"></td>
						<br><span id="err_username"></span>
					</tr>
					
					<tr>
					    <td><span>Password</span></td>
					    <td>:<input type="password" placeholder="Password" name="password" id="password"></td>
						<br><span id="err_password"></span>
					</tr>
				
					<tr>
						<td><span>Email</span></td>
						<td>:<input type="text" placeholder="Email" name="email" id="email"></td>
						<br><span id="err_email"></span>
					</tr>
					
					<tr>
						<td><span>Gender</span></td>
						<td>:<input type="radio" value="Male" name="gender">Male<input type="radio" value="Female" name="gender">Female</td>
					</tr>
					
					<tr>
						<td><span>Role </span></td>
						<td>:
							<select name="profession">
								<option>Admin</option>
								<option>Employee</option>
								<option>Delivery Man</option>
								<option>Customer</option>
							</select> 
						</td>
					</tr>
					
					
					<tr>
						<td align="center" colspan="5"><input type="submit" name="submit" value="Edit"></td>
					</tr>
					
				</table>
				 
				
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
	
		</fieldset>
		
	</body>
</html>

