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
				<a class="btn btn-primary" href="login .php">Settings</a>
				<a class="btn btn-info"    href="login page.php">Log Out</a>
				
			</div>
			
		</div>


<?php/*
		

	 

     		$U_Name="";
			$err_U_Name="";
			$Email="";
			$err_Email="";
			$Code="";
			$err_Code="";
			
			
			
			
			$hasError=false;
			
			
			
			
			
			
			if ($_SERVER["REQUEST_METHOD"] == "POST")
   {

      if (empty($_POST["Username"]))
      {
  		$err_U_Name = "Name required*";
		$hasError=true;
  	}
     else if(strlen($_POST["Username"])<5)
  	 {
  	  $err_U_Name="Enter valid name";
	  $hasError=true;
	  
  	 }
  	 else
     {
  		 $F_Name=htmlspecialchars ($_POST["Username"]);
  	 }
	 
	 
	 if (empty($_POST["Code"]))
      {
  		$err_Code = "Fill this field*";
		$hasError=true;
  	}
     
  	 else
     {
  		 $F_Code=htmlspecialchars ($_POST["Code"]);
  	 }
	  
	  
	  
	  
	 

 
	 if (empty($_POST["Email"]))
      {
  		$err_Email = "Email required*";
		$hasError=true;
  	}
     else if(!strpos($_POST["Email"],'@'))
	 
  	 {
  	  $err_Email="Enter valid email";
	  
	  
  	 }
	 else if(!strpos($_POST["Email"],'.'))
	 {
		 $err_Email="Enter valid email";
	 }
	 else{
		 $a=strpos($_POST["Email"],'@');
		 $b=strpos($_POST["Email"],'.');
		 if($a<$b)
		 {
			 $Email=htmlspecialchars($_POST["Email"]);
		 }
	 
  	 else
     {
  		 $err_Email="dot(.) cannot stay before(@)";
  	 }

	 
	 }

   }	*/	
   ?>

<html>
	   <head>
            
       </head>
	   
	          <body>
	                
<div id="logindiv">
<fieldset>

         <legend align="center"><h1><b>CUSTOMER SEARCH</b></h1></legend>
		  
		 
		 
		 <form action= "" method="post" onsubmit="return validate()">
			<table align="center">
				<tr>
					<td><span>Username </span></td>
					
					<td>:<input type="text" id="Username"  name="Username"><span id="err_U_Name"></span></td>

				</tr>
				
				<tr>
				<td><span>Customer Entry Code</span></td>
					<td>:<input type="text" id="Code" name="Code"><span id="err_Code"></span></td>
				</tr>
				
					
					
				
				
				<tr>
				<td><span>Email</span></td>
					<td>:<input type="text" id="Email" name="Email"><span id="err_Email"></span></td>
				</tr>
				
				
				
				
				
				
				
				
				<br><br><tr>
					<td align="center" colspan="2"><input type="submit" name="search" value="search"></td>
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
					  if(get("Username").value == "")
					  {
						  get("err_U_Name").innerHTML = "Fill this form*";
						   get("err_U_Name").style.color = "red";
						  hasError=true;
						
					  }
					  if(get("Code").value == "")
					  {
						   get("err_Code").innerHTML = "Fill this form*";
						    get("err_Code").style.color = "red";
						    hasError=true;
						  
					  }
					 if(get("Email").value == "")
					  {
						   get("err_Email").innerHTML = "Fill this form*";
						    get("err_Email").style.color = "red";
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
					  get("err_U_Name").innerHTML     = "";
					  get("err_Code").innerHTML     = "";
					  get("err_Email").innerHTML   = "";
					  
					 
				  }
		
		</script>

</html>


