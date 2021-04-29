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
    $Payment="";
	$Shift="";
	$Availablity="";
   
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
    $Payment=$_POST["Payment"];
    $Shift=$_POST["Shift"];
	$Availablity=$_POST["Availablity"];
   
    $query="UPDATE `registrationform` SET `first name`='".$FirstName."',`last name`='".$LastName."',`password`='".$Password."',
	`present address`='".$PresentAddress."',`permanent address`='".$PermanentAddress."',
    `gender`='".$Gender."',`phone`='".$Phone."',`email`='".$Email."',`payment`='".$Payment."',
	`shift`='".$Shift."',`availablity`='".$Availablity."' WHERE`nid number`=$NIDNumber";
    $result=execute($query);
	}
   ?>