<!DOCTYPE html>
<html>
<head>
	<meta charset="URF-8">

	<!-- imports -->

	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
  <script src="js/user.js"></script>

	<!--  -->
	
	<title>Member Page</title>

</head>
<body>



<?php
include("navbar_loggedin.php");
  if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

if ($_SESSION['email']){
	echo "Welcome, ".$_SESSION['email']." !<br><a href='logout.php'>Logout</a>";
}

else{
	die("You must be logged in!");
}

?>

<?php
include("footer.php");
?>



</body>
</html>