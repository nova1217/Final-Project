<?php
      require_once 'Controllers/customercontroller.php';
	  $key = $_GET["key"];
	  $customer = search($key);
	  foreach($customer as $row)
	  {
		  echo $row["username"]."<br>";
		  //echo "<a href=''>".$row["username"]."</a><br>";
	  }
	  

?>