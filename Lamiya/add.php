
<?php require_once 'Controllers/discountcontroller.php';?>


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
				
				<a class="btn btn-info"    href="login.php">Log Out</a>
				
			</div>
			
		</div>
		

<html>
	   <head>
            
       </head>
	   
	          <body>
	                
<div id="logindiv">
<fieldset>

         <legend align="center"><h1><b>DISCOUNT VOUCHER</b></h1></legend>
		  
		 
		 
		 <form action= "" method="post" onsubmit="return validate()">
			<table align="center">
				<tr>
					<td><span>Food Name </span></td>
					
					<td>:<input type="text" id="FoodName" name="FoodName" onfocusout="checkFoodName(this)"><span id="err_F_Name"></span></td>

				</tr>
				
				<tr>
					<td><span>Food Code </span></td>
					
					<td>:<input type="text" id="FoodCode" name="FoodCode"><span id="err_F_Code"></span></td>

				</tr>
				<tr>
					<td><span>Current Price </span></td>
					
					<td>:<input type="text" id="CurrentPrice" name="CurrentPrice"><span id="err_C_Price"></span></td>

				</tr>
				<tr>
					<td><span>Discount Price </span></td>
					
					<td>:<input type="text"  name="DiscountPrice" <span>
					
					</span><td align="center" colspan="2"><input type="submit" name="Add" ></td>

				</tr>
				
				<tr>
					<td><span> Update Discount Price </span></td>
					
					<td>:<input type="text"  name="UpdateDiscountPrice" <span>
					
					</span><td align="center" colspan="2"><input type="submit" name="Update"></td>

				</tr>
				
				</table>

</div>
		</form>



</body>
        
			<script>
		          function get(id)
				  {
					  return document.getElementById(id);
				  }
				  
				  function validate()
				  {
					  cleanUp();
					  var err_msg = "";
					  if(get("FoodName").value == "")
					  {
						  get("err_F_Name").innerHTML = "Fill this required*";
						  get("err_F_Name").style.color = "red";
						  hasError=true;
						
					  }
					  if(get("FoodCode").value == "")
					  {
						   get("err_F_Code").innerHTML = "Fill this required*";
						   get("err_F_Code").style.color = "red";
						    hasError=true;
						  
					  }
					 if(get("CurrentPrice").value == "")
					  {
						   get("err_C_Price").innerHTML = "Fill this required*";
						   get("err_C_Price").style.color = "red";
						    hasError=true;
						
					  }

					 if(!hasError)
					 {
						 
					 }
					//alert (err_msg);
					  return false;
				  }
				  
				  function cleanUp()
				  {
					  get("err_F_Name").innerHTML     = "";
					  get("err_F_Code").innerHTML     = "";
					  get("err_C_Price").innerHTML   = "";
					  
					 
				  }
				  
				    function checkFoodName(control)
				  {
					  var FoodName = control.value;
					  var xhttp = new XMLHttpRequest();
					  xhttp.onreadystatechange = function()
					  {
						  if(this.readyState == 4 && this.status == 200)
						  {
							  //when server respond
							  var rsp = this.responseText;
							
							  if(rsp == true)
							  {
						
								  document.getElementById("err_F_Name").innerHTML = "Valid*";
								   get("err_F_Name").style.color = "red";
							  }
							  else{
								  
								  document.getElementById("err_F_Name").innerHTML = "Not Valid*";
								  get("err_F_Name").style.color = "green";
							  }
						  }
					  };
					  xhttp.open("GET","checkfoodname.php?FoodName="+FoodName,true);
					  xhttp.send();
				  }
				  
		</script>

</html>