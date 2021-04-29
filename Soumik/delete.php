<?php
    
    $server = "localhost";
    $user   = "root";
    $password   = "";
    $db   = "panda_deli";

 

    $conn = mysqli_connect ($server,$user,$password,$db);
    
    $query="DELETE FROM `delivery` WHERE `customer code`='$_GET[id]'";
	   // $query="DELETE FROM `customer` WHERE `id`='$_GET[customer code]'";

 

    
    
    if (mysqli_query($conn,$query))
        header("refresh:1;url=cancel.php");
    else
        echo "Not Deleted";
    
    
?>