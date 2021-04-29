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
                    <td><span>Customer name </span></td>
                    
                    <td>:<input type="text" id="customername"  name="customername"><span id="err_C_Name"></span></td>

 

                </tr>
                
                <tr>
                <td><span>Customer Code</span></td>
                    <td>:<input type="text" id="Code" name="Code"><span id="err_Code"></span></td>
                </tr>
                
                    
                    
                
                
                <tr>
                <td><span>Phone</span></td>
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
                      if(get("customername").value == "")
                      {
                          get("err_C_Name").innerHTML = "Fill this form*";
                           get("err_C_Name").style.color = "red";
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
                      get("err_C_Name").innerHTML     = "";
                      get("err_Code").innerHTML     = "";
                      get("err_Email").innerHTML   = "";
                      
                     
                  }
        
        </script>

 

</html>