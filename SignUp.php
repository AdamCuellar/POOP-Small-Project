<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") 
   {
      //Most of this is depracated junk, needs to be redone -soon TM(C)R
      
      $username = mysqli_real_escape_string($dataBase,$_POST['username']);
      $password = mysqli_real_escape_string($dataBase,$_POST['password']); 
      $authpassword = mysqli_real_escape_string($dataBase,$_POST['password_confirm']);
	  
	  if($password != $authpassword)
	  {
		  echo "Passwords do not match";
	  }
	  
      $sql = "INSERT INTO Users (Username,Password) VALUES (" . $username . ",'" . $password . "')";
	  
      if($result = mysqli_query($dataBase,$sql) == TRUE)
	  {
		  echo "New user registered";
	  }
   }
?>
