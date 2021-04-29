<?php
    require_once "models/db_config.php";
    $query  = "select * from deliveryman";
    $result = get($query);
?>


<html>
      <head><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"></head>
<body>

<p><h2 align="center">Delivery man information</h2></p>
     <div class="container">
   
  <table class="table">
        
   <tr>
   <tr>
            <th>Serial No</th>
            <th>Name</th>
            <th>Address</th>
            <th>Email</th>
			<th>Phone</th>
			<th>Shift</th>
			<th>Salary</th>
			<th>Age</th>
			<th>Birth Date</th>
			
            
			
        </tr>
		
   
				  
<?php
    foreach($result as $row)
	{
        echo "<tr>";
		echo "<td>".$row["serial no"]."</td>";
        echo "<td>".$row["name"]."</td>";
        echo "<td>".$row["address"]."</td>";
        echo "<td>".$row["email"]."</td>";
		echo "<td>".$row["phone"]."</td>";
		echo "<td>".$row["shift"]."</td>";
		echo "<td>".$row["salary"]."</td>";
		echo "<td>".$row["age"]."</td>";
	    echo "<td>".$row["birth date"]."</td>";
		
		echo '<td><button type="button" class="btn btn-success">Confirm</button></td>';
		echo '</tr>';
	}  
?>




 </table>
 <br>
</div>
</body>
</html>