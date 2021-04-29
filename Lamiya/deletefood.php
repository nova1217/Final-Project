<?php
   
     require_once 'models/db_config.php';
	
	
	$query="DELETE FROM `discountadd` WHERE `food code`='$_GET[id]'";
    $result = execute($query);
	
    header("refresh:1;url=food.php");
	
		
	
	
?>