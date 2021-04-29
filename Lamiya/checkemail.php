<?php
     
	  require_once 'Controllers/regicontroller.php';
	 
	  $Email = $_GET["Email"];
	  $res = checkEmailValidity($Email);
	  echo $res;
	 
?>