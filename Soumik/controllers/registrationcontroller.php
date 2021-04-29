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
   
    $query="insert into registrationform values('$FirstName',
    '$LastName','$Password','$PresentAddress','$PermanentAddress','$Gender','$Phone','$Email','$NIDNumber','$Payment','$Shift','$Availablity')";
    $result=execute($query);
	}
	function checkEmailValidity($Email)
    {
        $query  = "select * from registrationform where Email='$Email'";
        $result = get($query);
        if(count($result) > 0)
        {
            return false;
        }
        return true;
    }
   ?>