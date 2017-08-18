<?php
  require "init.php";
  
  $name = $_POST["name"];
  $username = $_POST["username"];
  $gender = $_POST["gender"];
  $phone = $_POST["phone"];
  $age = $_POST["age"];
  $password = $_POST["password"];
  
  $sql_query = "insert into user_info values ('$name','$username','$gender', '$phone', '$age', '$password');";
  
  if (mysqli_query($con,$sql_query))
  {
	//echo "Data inserted";
  }
  else {
	//echo "Data rejected".mysqli_error($con);
  }

?>
