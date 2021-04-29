<?php
     
	  require_once 'Controllers/discountcontroller.php';
	
	  $FoodName =$_GET["FoodName"];
	  $res = checkFoodNameValidity($FoodName);
	  echo $res;
	 
?>



