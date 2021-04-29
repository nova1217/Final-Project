<?php

          require_once'models/db_config.php';
		  
       /*     $F_Name="";
			$err_F_Name="";
			
			$F_Code="";
			$err_F_Code="";
			
     		$C_Price="";
			$err_C_Price="";
			
					
			if ($_SERVER["REQUEST_METHOD"] == "POST")
   {

      if (empty($_POST["FoodName"]))
      {
  		$err_F_Name = "Please fill this form*";
		$hasError=true;
  	}
     
  	 else
     {
  		 $F_Name=htmlspecialchars ($_POST["FoodName"]);
  	 }
	 
	 
      if (empty($_POST["CurrentPrice"]))
      {
  		$err_C_Price = "Please fill this form*";
		$hasError=true;
  	}
     
  	 else
     {
  		 $C_Price=htmlspecialchars ($_POST["CurrentPrice"]);
  	 }
	 
	 
     
	 
	 if (empty($_POST["FoodCode"]))
      {
  		$err_F_Code = "Please fill this form*";
		$hasError=true;
  	}
	 
     
  	 else
     {
  		 $F_Code=htmlspecialchars ($_POST["FoodCode"]);
  		 
  	 }
			
			
   }*/


    $FoodName="";
	$FoodCode="";
	$CurrentPrice="";
	$DiscountPrice="";
	$UpdateDiscountPrice="";
	
	if($_SERVER["REQUEST_METHOD"] =="POST")
	{
	$FoodName=$_POST["FoodName"];
	$FoodCode=$_POST["FoodCode"];
	$CurrentPrice=$_POST["CurrentPrice"];
	$DiscountPrice=$_POST["DiscountPrice"];
	$UpdateDiscountPrice=$_POST["UpdateDiscountPrice"];
	
		
		 $query="insert into discountadd values('$FoodName',
	     '$FoodCode','$CurrentPrice','$DiscountPrice','$UpdateDiscountPrice')";
		 $result= execute($query);
		 header("Location:add.php");
	

}


function checkFoodNameValidity($FoodName)
	{
		$query  = "select * from discountadd where food name='$FoodName'";
		$result = get($query);
		if(count($result) > 0)
		{
			return false;
		}
		return true;
	}
?>
