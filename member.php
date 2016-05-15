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
include("footer.php");
?>


<a class="fa fa-info-circle icon-space" aria-hidden="true" href="#" id="memberLink">Commented Courses</a>
<?php

  if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

if (!$_SESSION['name']){	
	die("You must be logged in!");

}

else{
}

?>



<script src="https://code.jquery.com/jquery-1.12.3.min.js" integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ="   crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>
<script src='https://cdn.firebase.com/js/client/2.2.1/firebase.js'></script>
<script src="js/courses.js"></script>


</body>
</html>