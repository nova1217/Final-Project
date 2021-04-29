<?php
    require_once "models/db_config.php";
    $query  = "select * from checkoutorders";
    $result = get($query);
?>


<html>
      <head> <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	 </head>
<body>

<p><h2 align="center">CHECK OUT ORDERS</h2></p>
    <div class="container">
   
  <table class="table">
        
   <tr>
   <tr>
            <th>Serial No</th>
            <th>Customer Name</th>
            <th>Address</th>
            <th>Phone</th>
			<th>Restaurent name</th>
			<th>Food name</th>
			<th>Food code</th>
			<th>Amount of food</th>
			<th>Payment</th>
			
			
			
			
            
			
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
		echo "<td>".$row["food code"]."</td>";
		echo "<td>".$row["amount of food"]."</td>";
		echo "<td>".$row["payment"]."</td>";
		
		echo '<td><button type="button" class="btn btn-success">Confirm</button></td>';
	    
	}  
?>




 </table>
 <br>
</div>
</body>
</html>