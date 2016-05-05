<?php
	$user = 'root';
	$pass = '';
	$db = 'coursehelper';
		
	
	$con = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");	
		
   
	$name = $_GET["name"];
	$email = $_GET["email"];
	$password = $_GET["password"];

	$insert = "INSERT INTO user (email, name, password) VALUES('$email', '$name', '$password')";

	if($con->query($insert) === TRUE)
		echo "successful";		
	else
		echo "Failed. Email already existed in the database";

?>