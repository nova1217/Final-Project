<?php    
	     require_once 'models/db_config.php';
	
	$FirstName="";
	$LastName="";
    $Password="";
	$PresentAddress="";
	$PermanentAddress="";
	$Gender="";
	$Phone="";
	$Email="";
	$NIDNumber="";
	$BusinessName="";
	$Payment="";
	
	if($_SERVER["REQUEST_METHOD"] =="POST")
	{
	$FirstName=$_POST["FirstName"];
	$LastName=$_POST["LastName"];
	$Password=$_POST["Password"];
	$PresentAddress=$_POST["PresentAddress"];
	$PermanentAddress=$_POST["PermanentAddress"];
	$Gender=$_POST["Gender"];
	$Phone=$_POST["Phone"];
	$Email=$_POST["Email"];
	$NIDNumber=$_POST["NIDNumber"];
	$BusinessName=$_POST["BusinessName"];
	$Payment=$_POST["Payment"];
	
	
	$query="UPDATE `employee` SET `first name`='".$FirstName."',`last name`='".$LastName."',`present address`='".$PresentAddress."',`permanent address`='".$PermanentAddress."',
	`gender`='".$Gender."',`phone`='".$Phone."',`business name`='".$BusinessName."',`payment`='".$Payment."',`password`='".$Password."',`email`='".$Email."' WHERE`nid number`=$NIDNumber";
	$result= execute($query);
	
	
	 }
	 
	
	 
?>	 