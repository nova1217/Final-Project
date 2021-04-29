<?php

   require_once 'models/db_config.php';

function search($key)
	{
		$query = "select username from customer where username like '%$key%'";
		$result = get($query);
		return $result;
	}
?>