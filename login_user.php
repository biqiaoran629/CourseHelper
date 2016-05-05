<?php

	session_start();

	$user = 'root';
	$pass = '';
	$db = 'coursehelper';
		
	
	$con = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");	
		
   
	$email = $_GET["email"];
	$password = $_GET["password"];

	$query =" SELECT * FROM user where email = '$email' and password = '$password'";

	$result = $con->query($query);

	 if($result->num_rows != 1)
	 	echo "Wrong combination of username and password";
	 else{	 	
	 	$_SESSION['email']= $email;
	 }