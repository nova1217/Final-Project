<?php
    
    require_once 'controllers/registrationcontroller.php';
	 ?>

 
		
<html>
	   <head>
            
       </head>
	   
	          <body>
			  
			    <p align="left"><a href="login.php">Sign Up</a></p>
	                
<div id="logindiv">
<fieldset>

         <legend align="center"><h1><b>Deliveryman Registration Form</b></h1></legend>
		  
		 
		 
		 <form action= "" method="post" onsubmit="return validate()">
			<table align="center">
				<tr>
					<td><span>First Name </span></td>
					
					<td>:<input type="text" id="FirstName" name="FirstName" ><span id="err_F_Name"></span></td>

				</tr>
				<tr>
					<td><span>Last Name </span></td>
					
					<td>:<input type="text" id="LastName" name="LastName"><span id="err_L_Name"></span></td>

				</tr>
				<tr>
				<td><span>Password</span></td>
					<td>:<input type="text" id="Password" name="Password"><span id="err_Password"></span></td>
				</tr>
				
				<tr>
				<td><span>Present Address</span></td>
					<td colspan="3">:<input type ="text" id="PresentAddress" name="PresentAddress"><span id="err_Pr_Address"></span></td>
					
					</tr>
						<tr>
				<td><span>Permanent Address</span></td>
					<td colspan="3">:<input type ="text" id="PermanentAddress" name="PermanentAddress"><span id="err_Pe_Address"></span></td>
					
					</tr>
					<tr>
					<td><span>Gender</span></td>
					<td>:<input type="radio" value="Male" name="Gender" >Male<br><input type="radio" value="Female" name="Gender" >Female<span id="err_Gender"></span></td>
				</tr>
				
				<tr>
				<td><span>Phone</span></td>
					<td>:<input type="text" id="Phone"name="Phone"><span id="err_Phone"></span></td>
				</tr>
				<tr>
				<td><span>Email</span></td>
					<td>:<input type="text" id="Email" name="Email" onfocusout="checkEmail(this)"><span id="err_Email"></span></td>
				</tr>
				
					<tr>
				<td><span>NID Number</span></td>
				
				
				<td>:<input type ="text" id="NIDNumber" name="NIDNumber"><span id="err_NID_Number"></span></td>
				
				<tr>
                    <td><span>Shift</span></td>
                    <td>:<input type="radio" value="Day" name="Shift" >Day<input type="radio" value="Night" name="Shift" >Night  <br><span id="err_Shift"</span></td>
                </tr>
                <tr>
                    <td><span>Whats your Availablity?</span></td>
                    
                    <td>:<input type="checkbox" value="Saturday" name="Availablity">Saturday<br>
                         <input type="checkbox" value="Sunday" name="Availablity">Sunday<br>
                         <input type="checkbox" value="Monday" name="Availablity">Monday<br>
                         <input type="checkbox" value="Tuesday" name="Availablity">Tuesday<br>
                         <input type="checkbox" value="Wednesday" name="Availablity">Wednesday<br>
                         <input type="checkbox" value="Thursday" name="Availablity">Thursday<br>
                         <input type="checkbox" value="Friday" name="Availablity">Friday<br>

 

                        
                    </td>
                    
                </tr>
				
				
				<tr>
					<td><span>Payment</span></td>
					<td>:
						<select name="Payment">
							<option>Cash </option>
							<option>Check</option>
							<option>Credit Card</option>
						</select>
					</td>
				</tr>
					<td align="center" colspan="2"><input type="submit" name="register"></td>
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
					  if(get("FirstName").value == "")
					  {
						  get("err_F_Name").innerHTML = "Name Required*";
						  get("err_F_Name").style.color = "red";
						  hasError=true;
						
					  }
					  if(get("LastName").value == "")
					  {
						   get("err_L_Name").innerHTML = "Name Required*";
						   get("err_L_Name").style.color = "red";
						  
						    hasError=true;
						  
					  }
					 if(get("Password").value == "")
					  {
						   get("err_Password").innerHTML = "Password Required*";
						   get("err_Password").style.color = "red";
						    hasError=true;
						
					  }
					  if(get("PresentAddress").value == "")
					  {
						   get("err_Pr_Address").innerHTML = "Fill this field*";
						   get("err_Pr_Address").style.color = "red";
						   
						    hasError=true;
						
					  }
					  if(get("PermanentAddress").value == "")
					  {
						   get("err_Pe_Address").innerHTML = "Fill this field*";
						    get("err_Pe_Address").style.color = "red";
						   
						    hasError=true;
						
					  }
					//  if(get("Gender").value == "")
					 // {
					//	   get("err_Gender").innerHTML = "Gender Required*";
						
					//  }
					  if(get("Phone").value == "")
					  {
						   get("err_Phone").innerHTML = "Phone Number Required*";
						    get("err_Phone").style.color = "red";
						    hasError=true;
						
					  }
					  if(get("Email").value == "")
					  {
						   get("err_Email").innerHTML = "Email Required*";
						    get("err_Email").style.color = "red";
						    hasError=true;
						
					  }
					  if(get("NIDNumber").value == "")
					  {
						   get("err_NID_Number").innerHTML = "Fill this field*";
						    get("err_NID_Number").style.color = "red";
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
					  get("err_L_Name").innerHTML     = "";
					  get("err_Password").innerHTML   = "";
					  get("err_Pr_Address").innerHTML = "";
					  get("err_Pe_Address").innerHTML = "";
					 // get("err_Gender").innerHTML = "";					  
					  get("err_Phone").innerHTML = "";
					  get("err_Email").innerHTML = ""; 
					  get("err_NID_Number").innerHTML = ""; 
					 
				  }
				  function checkEmail(control)
                  {
                      var Email = control.value;
                      var xhttp = new XMLHttpRequest();
                      xhttp.onreadystatechange = function()
                      {
                          if(this.readyState == 4 && this.status == 200)
                          {
                              //when server respond
                              var rsp = this.responseText;
                           
                              if(rsp == true)
                              {
                       
                                  document.getElementById("err_Email").innerHTML = "Valid*";
                                   get("err_Email").style.color = "red";
                              }
                              else{
                                 
                                  document.getElementById("err_Email").innerHTML = "Not Valid*";
                                  get("err_Email").style.color = "green";
                              }
                          }
                      };
                      xhttp.open("GET","checkemail.php?Email="+Email,true);
                      xhttp.send();
                  }
		
		</script>
</html>
