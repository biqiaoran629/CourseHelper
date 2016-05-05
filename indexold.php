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
	
	<title>UBC Computer Science Course Helper</title>

</head>
<body>

  <div class="main-intro">
<!-- 	<h1>UBC Computer Science Course Helper Site</h1> -->
  </div>


  <?php 

  session_start();


  if($_SESSION){
  if($_SESSION['email']){
    include("navbar_loggedin.php");
  }
  }
  else{
    include("navbar.php");
  }

  

  ?>

<!-- 
	<div id="carousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carousel" data-slide-to="0" class="active"></li>
    <li data-target="#carousel" data-slide-to="1"></li>
  </ol>

  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <a href="courses.html"><img src="img/Courses.jpg" alt="See Courses">
      <div class="carousel-caption">
        <h2>See Courses</h2>
        <p>See the list of courses that UBC CS offers! Get your plannings ahead!</p>
      </div>
    </div>
    <div class="item">
      <a href="about.html"><img src="img/About.jpg" alt="About">
      <div class="carousel-caption">
       <h2>About</h2>
       <p>About UBC CS and about me!</p>
      </div>
    </div>
    </div>

  <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
 -->
<?php
include("footer.php");
?>

  <script src="https://code.jquery.com/jquery-1.12.3.min.js" integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ="   crossorigin="anonymous"></script>
  <script src="js/bootstrap.min.js"></script>

</body>
</html>