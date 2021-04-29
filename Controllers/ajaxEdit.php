<?php
include ("Model/dbConfig.php");
error_reporting(0);

$Name     =$_GET['Name'];
$Username =$_GET['Username'];
$Password =$_GET['Password'];
$Email    =$_GET['Email'];

?>
<html>
	<head></head> 
	<body>
		
	
		<fieldset>
			<legend><h1>EDIT Registration For Admin </h1></legend>
			<form action="" method="post" class="form-horizontal form-material">
				<table>
					<tr>
					<div class="form-group">
				
						<h2 class="text">Name</h2>
						<input type="text" name="name" value="<?php echo $name;?>" class="form-control">
						<span><?php echo $err_name;?></span>
		</div>
					<div class="form-group">
				
						<h3 class="text">Username</h3>
						<input type="text" name="username" value="<?php echo $username;?>" class="form-control">
						<span><?php echo $err_username;?></span>
		</div>
					
					<div class="form-group">
				
						<h4 class="text">Password</h4>
						<input type="password" name="password" value="<?php echo $password;?>" class="form-control">
						<span><?php echo $err_password;?></span>
		</div>
				
					<div class="form-group">
				
						<h5 class="text">Email</h5>
						<input type="text" name=email" value="<?php echo $email;?>" class="form-control">
						<span><?php echo $err_email;?></span>
		</div>
					
					
					
					
					<div class="form-group text-center">
						<input type="submit" class="btn btn-success" name="edit" value="Edit" class="form-control">
		</div>
				</table>
				 
				
			</form>
			
<script>
	
	function checkUsername(control){
		var username = control.value;
		//ajax
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange=function(){
			if(this.readyState == 4 && this.status == 200){
				//when server respond
				var rsp = this.responseText;
				if(rsp == "true"){
					document.getElementById("err_username").innerHTML = "<br>Valid";
				}else{
					document.getElementById("err_username").innerHTML = "<br>Not Valid";
				}
			}
		};
		xhttp.open("GET","checkusername.php?uname="+username,true);
		xhttp.send();
	}
	
</script>
	
		</fieldset>
		
	</body>
</html>

