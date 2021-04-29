<?php
     if($_SERVER["REQUEST_METHOD"]=="POST")
     {
         $username=$_POST["username"];
         $password=$_POST["password"];
         if($username=="Nahid" && $password=="12345678")
         {
             session_start();
            
             header("Location:welcomepage.php");
         }
         
     }

 


?>
<html>
       <head>
            <title> </title>
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
                    <td align="center" colspan="2"><input type="submit" value="Log in"></td>
                </tr>

 

            </table>

 

</fieldset>
        </form>
    </body>
</html>