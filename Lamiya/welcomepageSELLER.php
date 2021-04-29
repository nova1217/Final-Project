<html>

	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		
		<style>

</style>
	</head>
	<body>
	
		<div class="header-index">
			<a class="btn"><b class="text-black">PANDA DELIVERY</b></a>
			<div class="pull-right">
				<a class="btn btn-success" href="index.php">Home</a>
				<a class="btn btn-danger"  href="complainsubmit.php">Check Queries and Complain Box</a>
				
				<a class="btn btn-secondary" href="login .php">Inbox</a>
				<a class="btn btn-warning" href="employeesee.php">MY Profile</a>
				
				<a class="btn btn-info"    href="login page.php">Log Out</a>
				
			</div>
			
		</div>

<?php
		      session_start();
			  if(isset($_SESSION["username"]))
			  {
				  header("Location:login page.php");
			  }
		
		?>
		
<html>
<body>

    

<div class="leftheader">
     
     <h1>Welcome EMPLOYEE To Panda Delivery</h1>
    
     <li><a href="CRUD search.php">CRUD Customer with search</a></li>
	 <li><a href="Register.php">Added by Admin</a></li>
	 <li><a href="approval customer.php">New Customer Request</a></li>
	 
   
     <li><a href="checkoutorders.php">Checkout Orders  </a></li>
      
	 <li><a href="cancelorder.php">Cancel order </a></li>
	 <li><a href="add.php">Discount Voucher</a></li>
	 <li><a href="food.php">Update Food Menu</a></li>
	 
	 <li><a href="deliveryorderinfo.php">Delivery and order info </a></li>
	 <li><a href="deliveryman information.php">Delivery man Information</a></li>

     
</div>

  








</form>

</div>
</tr>

</div>
</body>
</html>