<?php

          require_once'models/db_config.php';
		 

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
	
		$query="UPDATE `discountadd` SET `food name`='".$FoodName."',`current price`='".$CurrentPrice."',
	`discount price`='".$DiscountPrice."',
	`update discount price`='".$UpdateDiscountPrice."' WHERE `food code`=$FoodCode";
	$result= execute($query);
	
	

}

?>
