<?php
  require "init.php";
  
  $username = $_POST["username"];
  $password = $_POST["loginpassword"];
  
  $sql_query = "select name from user_info where username like '$username' and password like '$password';";
  
  $result = mysqli_query($con,$sql_query);
  
  if (mysqli_num_rows($result)>0)
  {
	  $row = mysqli_fetch_assoc($result);
	  $name = $row["name"];
	  echo "your login succeeded ".$name;
  }
  else 
  {
	  echo "login failed, username or password not recognized, please try again..!";
  }

?>
