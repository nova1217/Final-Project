<?php require_once 'Controllers/complaincontroller.php';?>



<html>
	   <head>
            
       </head>
	   
	          <body>
	                
<div id="logindiv">
<fieldset>

         <legend align="center"><h1><b>ARE YOU SATISFIED?</b></h1></legend>
		  
		 
		 
		 <form action= "" method="post" onsubmit="return validate()">
			<table align="center">
				<tr>
					<td><span>Customer Name</span></td>
					
					<td>:<input type="text" id="CustomerName" name="CustomerName"><span id="err_C_Name"></span></td>

				</tr>
				<tr>
					<td><span>Any Query </span></td>
					
					<td>:<textarea  id="AnyQuery" name ="AnyQuery"></textarea ><span id="err_Query"><span></td>

				</tr>
				<tr>
					<td><span>Complain box</span></td>
					
					<td>:<textarea id="Complainbox" name ="Complainbox"></textarea ><span id="err_C_Box"><span></td>

				</tr>
				<tr>
					<td><span>Review for service</span></td>
					
					<td>:<textarea id="Reviewforservice" name ="Reviewforservice"></textarea><span id="err_Review"></span></td>

				</tr>
				
				<tr>
					<td><span>Food quality</span></td>
					
					<td>:<textarea id="Foodquality" name ="Foodquality"></textarea><span id="err_F_Quality"></span></td>

				</tr>
				<tr>
					<td><span>Feedback</span></td>
					
					<td>:<textarea id="Feedback" name ="Feedback"></textarea><span id="err_Feed"></span></td>

				</tr>
				<tr>
					<td><span>Rate us</span></td>
					
					<td>:<input type="text" id="Rateus" name="Rateus" ><span id="err_Rate"></span></td>

				</tr>
				
				<td align="center" colspan="2"><input type="submit" name="Submit"></td>
				
				
				
				
				
				
				
					

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
					  if(get("CustomerName").value == "")
					  {
						  get("err_C_Name").innerHTML = "Fill this required*";
						   get("err_C_Name").style.color = "red";
					
						  hasError=true;
						
					  }
					  if(get("AnyQuery").value == "")
					  {
						   get("err_Query").innerHTML = "Fill this required*";
						    get("err_Query").style.color = "red";
						    hasError=true;
						  
					  }
					 if(get("Complainbox").value == "")
					  {
						   get("err_C_Box").innerHTML = "Fill this required*";
						    get("err_C_Box").style.color = "red";
						    hasError=true;
						
					  }
					  if(get("Reviewforservice").value == "")
					  {
						   get("err_Review").innerHTML = "Fill this required*";
						    get("err_Review").style.color = "red";
						    hasError=true;
						
					  }
					 if(get("Foodquality").value == "")
					  {
						   get("err_F_Quality").innerHTML = "Fill this required*";
						    get("err_F_Quality").style.color = "red";
						    hasError=true;
						
					  }
					  if(get("Feedback").value == "")
					  {
						   get("err_Feed").innerHTML = "Fill this required*";
						    get("err_Feed").style.color = "red";
						    hasError=true;
						
					  }
					  if(get("Rateus").value == "")
					  {
						   get("err_Rate").innerHTML = "Fill this required*";
						    get("err_Rate").style.color = "red";
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
					  get("err_C_Name").innerHTML     = "";
					  get("err_Query").innerHTML     = "";
					  get("err_C_Box").innerHTML    = "";
					  get("err_Review").innerHTML     = "";
					  get("err_F_Quality").innerHTML     = "";
					  get("err_Feed").innerHTML    = "";
					  get("err_Rate").innerHTML    = "";
					  
					 
				  }
		
		</script>

</html>