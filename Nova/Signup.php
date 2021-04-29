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
		<form>
			<fieldset>
				<legend><h1> Sign Up/ Registration Form</h1></legend>
				<table>
					<tr>
						<td>Name:</td>
						<td><input type="text" name="name" required></td>
					</tr>
					<tr>
						<td>Username:</td>
						<td><input type="text" name="username" required></td>
					</tr>
					<tr>
						<td>Email:</td>
						<td><input type="text" name="email" required></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><input type="password" name="password" required></td>
					</tr>
					<tr>
						<td>Gender: <?php echo $err_gender;?></td>
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
						<td colspan="5" align="center" font color='green'><input type="submit" name="register" value="Register"></td>
					</tr>
				</table>
			</fieldset>
		</form>
	</body>
	
</html>

<?php

$Name     =$_GET['name'];
$Username =$_GET['username'];
$Password =$_GET['password'];
$Email    =$_GET['email'];

$query="INSERT INTO USERS VALUES ('$Name','$Username','$Password','$Email')";
$data=mysqli_query($conn,$query);

if($data){
	echo "INSERTED";
}
else{
	echo "FAILED";
}

?>