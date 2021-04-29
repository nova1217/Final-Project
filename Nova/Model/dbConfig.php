<?php
    $db_server="localhost";
    $db_user="root";
    $db_pass="";
    $db_name="webtech_project";

   
	 
$conn = mysqli_connect($db_server,$db_user,$db_pass,$db_name);
	
if($conn)
{
	echo "Connected to Server";
}
else
{
	echo "Not Connected".mysqli_connect_error();
}

?>