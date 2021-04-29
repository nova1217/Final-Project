<?php
		
 require_once 'models/db_config.php';
	 

     		$F_Name="";
			$err_F_Name="";
			$L_Name="";
			$err_L_Name="";
			$Password="";
			$err_Password="";
			
			
			$Pr_Address="";
			$err_Pr_Address="";
			
			$Pe_Address="";
			$err_Pe_Address="";
			$Phone="";
			$err_Phone="";
			
			$Gender="";
			$err_Gender="";
			
			$Payment="";
			$err_Payment="";
			$Email="";
			$err_Email="";
			
			
			
			
			$hasError=false;
			
			
			
			
			
			
			if ($_SERVER["REQUEST_METHOD"] == "POST")
   {

      if (empty($_POST["First_Name"]))
      {
  		$err_F_Name = "Name required*";
		$hasError=true;
  	}
     else if(strlen($_POST["First_Name"])<5)
  	 {
  	  $err_F_Name="Enter valid name";
	  $hasError=true;
	  
  	 }
  	 else
     {
  		 $F_Name=htmlspecialchars ($_POST["First_Name"]);
  	 }
	  if (empty($_POST["Last_Name"]))
      {
  		$err_L_Name = "Field Required*";
		$hasError=true;
  	}
     else if(strlen($_POST["Last_Name"])<5)
  	 {
  	  $err_L_Name="Complete this field";
	  $hasError=true;
	  
  	 }
  	 else
     {
  		 $L_Name=htmlspecialchars ($_POST["Last_Name"]);
  	 }
  	     if (empty($_POST["Password"]))
      {
  		$err_Password = "Password required*";
		$hasError=true;
  	   }
     else if(strlen($_POST["Password"])<8)
  	 {
  	  $err_Password="Password must contain at least 8 character*";
	  $hasError=true;
  	 }
  	 else
     {
  		 $Password=$_POST["Password"];
  	 }
	  
	 
	  
	 

  	  if (empty($_POST["This field is required"]))
      {
  		$err_Address = "Correct Address please*";
		$hasError=true;
  	   }
     else if(strlen($_POST["Address Required"]))
  	 {
  	  $err_Address=" Full Address Required";
	  $hasError=true;
  	 }
  	 else
     {
  		 $Address=$_POST[" Address Required"];
  	 }
	 
	 
	  if (empty($_POST["Phone"]))
      {
  		$err_Phone = "Number required*";
		$hasError=true;
  	   }
     else if(strlen($_POST["Phone"])<11)
  	 {
  	  $err_Phone="Number must contain at least 11 Number*";
	  $hasError=true;
  	 }
  	 else
     {
  		 $Phone=htmlspecialchars($_POST["Phone"]);
  	 }


 
	 
	 
	  if (empty($_POST["Gender"]))
      {
      $err_Gender = "Gender is required";
      } else
       {
       $Gender =$_POST["Gender"];
      }
	  if (empty($_POST["Present_Address"]))
      {
  		$err_Pr_Address= "Fill this field*";
		$hasError=true;
  	}
     
  	 else
     {
  		 $Pr_Address=htmlspecialchars ($_POST["Present_Address"]);
  	 }
	 if (empty($_POST["Permanent_Address"]))
      {
  		$err_Pe_Address = "Fill this field*";
		$hasError=true;
  	}
     
  	 else
     {
  		 $Pe_Address=htmlspecialchars ($_POST["Present_Address"]);
  	 }
	 
	 if (empty($_POST["Email"]))
      {
  		$err_Email = "Email required*";
		$hasError=true;
  	}
     else if(!strpos($_POST["Email"],'@'))
	 
  	 {
  	  $err_Email="Enter valid email";
	  
	  
  	 }
	 else if(!strpos($_POST["Email"],'.'))
	 {
		 $err_Email="Enter valid email";
	 }
	 else{
		 $a=strpos($_POST["Email"],'@');
		 $b=strpos($_POST["Email"],'.');
		 if($a<$b)
		 {
			 $Email=htmlspecialchars($_POST["Email"]);
		 }
	 
  	 else
     {
  		 $err_Email="dot(.) cannot stay before(@)";
  	 }

	 
	 }

   }		
   ?>

