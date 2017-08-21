<?php

$host='localhost';
$username='root';
$pwd='';
$db='pakasa';

$con=mysqli_connect($host, $username, $pwd, $db) or die('unable to connect');

if (mysqli_connect_error($con)){
	echo "Failed to connect to database ".mysqli_connect_error;
}
$name=$_POST['Query'];

$sql="SELECT * FROM search_info WHERE job_name LIKE '%$job_name%'";

$query=mysqli_query($con,$sql);

if($query){
	while($row=mysqli_fetch_array($query)){
		$data[]=$row;
	}
	    print(json_encode($data));
}
else {
	echo ('not found');
}

mysqli_close($con);
?>