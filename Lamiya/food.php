<?php
    require_once "models/db_config.php";
    $query  = "select * from discountadd";
    $result = get($query);
?>


<html>
      <head><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"></head>
<body>

<p><h2 align="center">Food Menu</h2></p><br>
    <div class="container">
   
  <table class="table">
        
   <tr>
   <tr>
            <th>Food Name</th>
            <th>Food Code</th>
            <th>Current Price</th>
			<th>Discount Price</th>
			<th>Update Discount Price</th>
			
			
            
			
        </tr>
		
   
				  
<?php
    foreach($result as $row)
	{
        echo "<tr>";
        echo "<td>".$row["food name"]."</td>";
        echo "<td>".$row["food code"]."</td>";
        echo "<td>".$row["current price"]."</td>";
		echo "<td>".$row["discount price"]."</td>";
		echo "<td>".$row["update discount price"]."</td>";
		
		echo '<td align="center" colspan="2"><a href="updatefood.php"><button type="button" class="btn btn-warning">Update</button></td>';	
		echo "<td><a  href=deletefood.php?id=".$row['food code'].">Delete</a></td>";		
	    
	}  
?>

</table>
</div>
</body>
</html>