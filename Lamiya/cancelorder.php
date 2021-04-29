<?php
    require_once "models/db_config.php";
    $query  = "select * from customer";
    $result = get($query);
?>


<html>
      <head> <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"></head>
<body>

<p><h2 align="center">Cancel order info</h2></p>
    <div class="container">
   
  <table class="table">
        
   <tr>
   <tr>
            
            <th>Username</th>
            <th>Address</th>
            <th>Email</th>
            
			
        </tr>
		
   
				  
<?php
    foreach($result as $row)
	{
        echo "<tr>";
	
        echo "<td>".$row["username"]."</td>";
        echo "<td>".$row["address"]."</td>";
        echo "<td>".$row["email"]."</td>";
		echo "<td><a  href=delete.php?id=".$row['id'].">Delete</a></td>";
		
		//echo '<td><button type="button" class="btn btn-danger">Delete</button></td>';
		echo '</tr>';
	}  
?>




 </table>
 <br>
</div>
</body>
</html>


