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
			<form action="" method="GET">
				<table>
					<tr>
						<td><span>Name</span></td>
						<td>:<input type="text" placeholder="Name" value="<?php echo "$Name"?>" name="name" required></td>
						
					</tr>
					
					<tr>
						<td><span>Username</span></td>
						<td>:<input type="text" placeholder="Username" value="<?php echo "$Username"?>" name="username" required></td>
						
					</tr>
					
					<tr>
					    <td><span>Password</span></td>
					    <td>:<input type="password" placeholder="Password" value="<?php echo "$Password"?>" name="password"  required></td>
						
					</tr>
				
					<tr>
						<td><span>Email</span></td>
						<td>:<input type="text" placeholder="Email" value="<?php echo "$Email"?>" name="email" required></td>
						
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
		</fieldset>
		
	</body>
</html>


<?php

if($_GET['submit'])
{
	$Name     = $_GET['name'];
    $Username = $_GET['username'];
    $Password = $_GET['password'];
    $Email    = $_GET['email'];

	
$query ="UPDATE USERS SET Name='$Name', Username='$Username', Password='$Password', 
         Email='$Email' WHERE Name='$Name'";

$data= mysqli_query($conn,$query);

if($data)
{
	echo "Edited";
}
else 
{
	echo "Not Edited";
}
}
?>
