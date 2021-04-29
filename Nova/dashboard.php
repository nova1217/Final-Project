<html>
<head>
<title>Online food Delivery System</title>
</head?

<body>
<table border="2" cellspacing="10">

<tr>
<th>Name</th>
<th>Username</th>
<th>Password</th>
<th>Email</th>
<th colspan="4" align="center">Operations</th>
</tr>

<?php 
include("Model/dbConfig.php");
error_reporting(0);
$query = "select* from users";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);

if($total!=0)
{
	while($result=mysqli_fetch_assoc($data))
	{
		echo "
	<tr>
	<td>".$result['Name']."</td>
	<td>".$result['Username']."</td>
	<td>".$result['Password']."</td>
	<td>".$result['Email']."</td>
	<td><a href = 'validationEdit.php?Name=$result[Name]&Username=$result[Username]&Password=$result[Password]
	               &Email=$result[Email]'><input type='submit' value='Edit/Update' id='submit'</td>
	
	<td><a href = 'validationDelete.php?Name=$result[Name]' onclick='return checkdelete()'>Delete</td>
	</tr>
	";
}
}
else
{
	echo "wrong input";
}
?>

</table>
</body>
</html>