<?php
    require_once "models/db_config.php";
    $query  = "select * from complain";
    $result = get($query);
?>


<html>
      <head><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"></head>
<body>

<p><h2 align="center">ARE YOU SATISFIED?</h2></p>
     <div class="container">
   
  <table class="table">
        
   <tr>
   <tr>
            <th>Customer Name</th>
            <th>Any Query</th>
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
		echo "<td>".$row["food quality"]."</td>";
		echo "<td>".$row["feedback"]."</td>";
		echo "<td>".$row["rate us"]."</td>";
		echo '<td><textarea name="Reply"></textarea></td>';
	    
	}  
?>




 </table>
 <br>
</div>
</body>
</html>