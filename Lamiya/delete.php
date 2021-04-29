<?php
   
     require_once 'models/db_config.php';
	
	
	$query="DELETE FROM `customer` WHERE `id`='$_GET[id]'";
    $result = execute($query);
	
    header("refresh:1;url=approval customer.php");
	
		
	
	
?>