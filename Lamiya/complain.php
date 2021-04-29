<?php
    require_once "models/db_config.php";
    $query  = "select * from orderinfo";
    $result = get($query);
?>


<html>
      <head></head>
<body>

<p><h2>Customer queries and complains box </h2></p>
    <table border="1" style="border-collapse:collapse">
        
   <tr>
   <tr>
            <th>Customer Name</th>
            <th>Any Query </th>
			<th>Complain box</th>
			<th>Review for service</th>
			<th>Food quality</th>
            <th>Feedback</th>
		    <th>Rate us</th>
			
            
			
        </tr>
		
   
				  
<?php
    foreach($result as $row)
	{
        echo "<tr>";
        echo "<td>".$row["customer name"]."</td>";
        echo "<td>".$row["any query"]."</td>";
        echo "<td>".$row["complain box"]."</td>";
		echo "<td>".$row["review for service"]."</td>";
		echo "<td>".$row["food quality"]."</td>"
		echo "<td>".$row["feedback"]."</td>";
		echo "<td>".$row["rate us"]."</td>";
		
	}  
?>




 </table>
 <br>

</body>
</html>