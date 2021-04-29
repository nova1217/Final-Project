<?php
    require_once "models/db_config.php";
    $query  = "select * from orderinfo";
    $result = get($query);
?>


<html>
      <head><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"></head>
<body>

<p><h2 align="center">Delivery and order info </h2></p>
     <div class="container">
   
  <table class="table">
        
   <tr>
   <tr>
            <th>Serial No</th>   
            <th>Customer Name</th>
            <th>Address</th>
			<th>Phone</th>
			<th>Restaurent Name</th>
            <th>Food Name</th>
		    <th>Food Price</th>
			<th>Food Code</th>
			<th>Time</th>
			<th>Payment Method</th>
			<th>Deliveryman Code</th>
			
            
			
        </tr>
		
   
				  
<?php
    foreach($result as $row)
	{
        echo "<tr>";
		echo "<td>".$row["serial no"]."</td>";
        echo "<td>".$row["customer name"]."</td>";
        echo "<td>".$row["address"]."</td>";
        echo "<td>".$row["phone"]."</td>";
		echo "<td>".$row["restaurent name"]."</td>";
		echo "<td>".$row["food name"]."</td>";
		echo "<td>".$row["food price"]."</td>";
		echo "<td>".$row["food code"]."</td>";
		echo "<td>".$row["time"]."</td>";
	    echo "<td>".$row["payment"]."</td>";
		echo "<td>".$row["deliveryman code"]."</td>";
		
	}  
?>




 </table>
 <br>
</div>
</body>
</html>