	
<?php
    require_once "models/db_config.php";
    $query  = "select * from customer";
    $result = get($query);
	
	function search($key)
	{
		$query = "select username from customer where username like '%$key%'";
		$result = get($query);
		return $result;
	}
?>







<html>
      <head><link rel="stylesheet" href="Styles/mystyle.css">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	 
	  </head>
<body>

<p ><h2 align="center">NEW CUSTOMER INFO</h2></p><br>
    <input type="text" id="search_text" onkeyup="suggest(this)" class="form-control" placeholder="Search...">
	<p id ="suggestion">
	 
	</p>
<div class="container">
   
  <table class="table table-striped">
  <a class="btn">
    <thead>
      <tr>
            
            <th>Username</th>
            <th>Address</th>
            <th>Email</th>
            
			
        </tr>
    </thead>
    <?php
    foreach($result as $row)
	{
   
			  
			  echo "<tr>";
		  
        echo "<td>".$row["username"]."</td>";
        echo "<td>".$row["address"]."</td>";
        echo "<td>".$row["email"]."</td>";
		echo "<td><a  href=delete.php?id=".$row['id'].">Delete</a></td>";
		//echo '<td align="center" colspan="2"><button type="button" class="btn btn-danger">Delete</button></td>';
		
			  echo "</tr>";	
	}  
?>
  </table>
</div>
	<script>

  function suggest(control)
				  {
					  var key = control.value;
					  if(key =="")
					  {
						document.getElementById("suggestion").innerHTML = "";  
						return;
					  }
					  var xhttp = new XMLHttpRequest();
					  xhttp.onreadystatechange = function()
					  {
						  if(this.readyState == 4 && this.status == 200)
						  {
							  //when server respond
							document.getElementById("suggestion").innerHTML = this.responseText;
								   
						  }
					  };
					  xhttp.open("GET","search.php?key="+key,true);
					  xhttp.send();
				  }
				  
				  
		
		</script>


</body>
</html>


