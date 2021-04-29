<?php
     include 'main_header.php'; 
   
	 ?>
<?php
     if($_SERVER["REQUEST_METHOD"]=="POST")
	 {
		 $username=$_POST["username"];
		 $password=$_POST["password"];
		 if($username=="Lamiya" && $password=="123456789")
		 {
			 session_start();
			
			 header("Location:welcomepageSELLER.php");
		 }
		 
	 }


?>
<html>
	   <head>
                
       </head>
	   
	          <body>
			  

		<fieldset>

         <legend align="center"><h1 >Login Form</h1></legend>
		 
		<form action="" method="post">
			<table align="center">
				<tr>
					
					<td>Username:<input type="text" placeholder="Username" name="username" </td>

				</tr>
				<tr>
					<td>Password:<input type="Password" placeholder="Password" name="password" 
					</td>
				</tr>
				
				<tr>
					<td align="center" colspan="2"><input type="submit" value="Submit"></td>
				</tr>

			</table>
			</div>

</fieldset>
		</form>
	</body>
</html>


