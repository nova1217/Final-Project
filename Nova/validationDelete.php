<?php
include ("Model/dbConfig.php");
error_reporting(0);

$name=$_GET['Name'];
$query= "DELETE FROM USERS WHERE Name= '$name'";

$data=mysqli_query($conn,$query);

if($data)
{
	echo "Deleted";
}
else
{
	echo "Failed to Delete";
}

?>