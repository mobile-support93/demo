<?php


  $userId = $_POST['userId'];
  $password = $_POST['password'];
    
  if( ($userId == 'admin') && ($password == 'admin')){
        echo "Login Successful";
  }
  else{
  	echo "Login failed";
  }

?>