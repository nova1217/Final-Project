<?php

    require_once 'models/db_config.php';
     		
			
     /*		$C_Name="";
			$err_C_Name="";
			
			$Query="";
			$err_Query="";
			
     		$C_Box="";
			$err_C_Box="";
			
     		$Review="";
			$err_Review="";
			
			$F_Quality="";
			$err_F_Quality="";
			
			$Feed="";
			$err_Feed="";
			
			$Rate="";
			$err_Rate="";
			
					
			if ($_SERVER["REQUEST_METHOD"] == "POST")
   {

      if (empty($_POST["CustomerName"]))
      {
  		$err_C_Name = "Please fill this form*";
		$hasError=true;
  	}
     
  	 else
     {
  		 $C_Name=htmlspecialchars ($_POST["CustomerName"]);
  	 }
	 
	 
      if (empty($_POST["AnyQuery"]))
      {
  		$err_Query = "Please fill this form*";
		$hasError=true;
  	}
     
  	 else
     {
  		 $Query=htmlspecialchars ($_POST["AnyQuery"]);
  	 }
	 
	 
      if (empty($_POST["Complainbox"]))
      {
  		$err_C_Box = "Please fill this form*";
		$hasError=true;
  	}
     
  	 else
     {
  		 $C_Box=htmlspecialchars ($_POST["Complainbox"]);
  		 
  	 }
	 
	 if (empty($_POST["Reviewforservice"]))
      {
  		$err_Review = "Please fill this form*";
		$hasError=true;
  	}
	 
     
  	 else
     {
  		 $Review=htmlspecialchars ($_POST["Reviewforservice"]);
  		
  	 }
	 if (empty($_POST["Foodquality"]))
      {
  		$err_F_Quality = "Please fill this form*";
		$hasError=true;
  	}
	 
     
  	 else
     {
  		 $F_Quality=htmlspecialchars ($_POST["Foodquality"]);
  		 
  	 }
	 
	 if (empty($_POST["Feed"]))
      {
  		$err_Feed = "Please fill this form*";
		$hasError=true;
  	}
	 
     
  	 else
     {
  		 $Feed=htmlspecialchars ($_POST["Feed"]);
  		 
  	 }
	 
	 if (empty($_POST["Rateus"]))
      {
  		$err_Rate = "Please fill this form*";
		$hasError=true;
  	}
	 
     
  	 else
     {
  		 $Rate=htmlspecialchars ($_POST["Rateus"]);
  		 
  	 }*/
	 
	 
	 
    $CustomerName="";
	$AnyQuery="";
	$Complainbox="";
	$Reviewforservice="";
	$Foodquality="";
	$Feedback="";
	$Rateus="";
	
	if($_SERVER["REQUEST_METHOD"] =="POST")
	{
	$CustomerName=$_POST["CustomerName"];
	$AnyQuery=$_POST["AnyQuery"];
	$Complainbox=$_POST["Complainbox"];
	$Reviewforservice=$_POST["Reviewforservice"];
	$Foodquality=$_POST["Foodquality"];
    $Feedback=$_POST["Feedback"];
	$Rateus=$_POST["Rateus"];
   
      
		  $query="insert into complain values('$CustomerName',
	     '$AnyQuery','$Complainbox','$Reviewforservice','$Foodquality','$Feedback','$Rateus')";
	      $result = execute($query);
	    }	
			

?>

 
