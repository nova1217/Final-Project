<?php

     $server="localhost";
     $user="root";
     $password="";
     $db="my_project";
	 $conn = mysqli_connect($server,$user,$password,$db);
     if($conn)
	 {
		 echo "Connected";
	 }
	 else
	 {
		echo mysqli_connect_error();
	 }
	 
	 $query="insert into discountadd values('Chicken','0099','390','270')";
	 if(mysqli_query($conn,$query))
	 {
	   echo "Inserted";	 
	 }
	 else
	 {
		 echo "Problem";
	 }
?>