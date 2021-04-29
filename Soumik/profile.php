<?php
    require_once "models/db_config.php";
    $query  = "select * from registrationform";
    $result = get($query);
?>

 


<html>
      
<body>

 

<p><h2 align="center">PROFILE</h2></p><br>
    <div class="container">
   
  <table class="table">
        
   <tr>
   <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Password</th>
            <th>Present Address</th>
            <th>Permanent Address</th>
            <th>Gender</th>
            <th>Phone</th>
            <th>Email</th>
            <th>NID Number</th>
            <th>Payment</th>
            <th>Shift</th>
            <th>Availablity</th>

            
            
            
            
        </tr>
        
   
                  
<?php
    foreach($result as $row)
    {
        echo "<tr>";
        echo "<td>".$row["first name"]."</td>";
        echo "<td>".$row["last name"]."</td>";
        echo "<td>".$row["password"]."</td>";
        echo "<td>".$row["present address"]."</td>";
        echo "<td>".$row["permanent address"]."</td>";
        echo "<td>".$row["gender"]."</td>";
        echo "<td>".$row["phone"]."</td>";
        echo "<td>".$row["email"]."</td>";
        echo "<td>".$row["nid number"]."</td>";
        echo "<td>".$row["payment"]."</td>";
		echo "<td>".$row["shift"]."</td>";
		echo "<td>".$row["availablity"]."</td>";
        echo '<td align="center" colspan="2"><a href="update.php"><button type="button" class="btn btn-warning">Update</button></td>';    
                
        
    }  
?>

 

</table>
</div>
</body>
</html>