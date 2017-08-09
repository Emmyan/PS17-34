<?php
  require "init.php";
  
  $name = $_POST["name"];
  $username = $_POST["username"];
  $contact = $_POST["contact"];
  $address = $_POST["address"];
  $age = $_POST["age"];
  $sex = $_POST["sex"];
  $password = $_POST["password"];
  
  $sql_query = "insert into user_info values ('$name','$username', '$contact','$address', '$age', '$sex','$password');";
  
  if (mysqli_query($con,$sql_query))
  {
	//echo "Data inserted";
  }
  else {
	//echo "Data rejected".mysqli_error($con);
  }

?>