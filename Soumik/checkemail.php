<?php
    
      require_once 'controllers/registrationcontroller.php';
    
      $Email = $_GET["Email"];
      $res = checkEmailValidity($Email);
      echo $res;
    
?>