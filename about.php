
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
	<title>
		
	</title>
</head>
<body>

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
  

<h1>About Me</h1>

	

<div class = "skills">
<h2>Technical Skills</h2>
	<div class="progress">
	  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
	    Java
	  </div>
	</div>
	<div class="progress">
	  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
	    JavaScript
	  </div>
	</div>
	<div class="progress">
	  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
	    PHP
	  </div>
	</div>
	<div class="progress">
	  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
	    Python
	  </div>
	</div>

	<div class="progress">
	  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
	    SQL
	  </div>
	</div>

	<div class="progress">
	  <div class="progress-bar progress-bar-success"  role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
	    HTML
	  </div>
	</div>

	<div class="progress">
	  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
	    CSS
	  </div>
	</div>

	<div class="progress">
	  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
	    C/C++
	  </div>
	</div>
</div>

<hr class="divider">

<div class="interests">
	<h2>Personal Info</h2>
	<p><b>Name:</b> Qiaoran(Randy) Bi</p>
	<p><b>School:</b> University of British Columbia</p>
	<p><b>Degree:</b> Bachelor's of Science, Major in Computer Science, Graduated May 2015</p>
	<p><b>Interests:</b> Basketball, Video Games, Travelling</p>
	<p><b>Languages:</b> English, Mandarin</p>
</div>

<hr class="divider">

<form class="contact-form">
	<h1>Contact Me</h1>
	<div id = 'namediv'>
	<input class="form-control" name="username" type="text" placeholder="Name" required=""></input>
	</div>
	<br>
	<input class="form-control" name="email" type="email" placeholder="Email" required=""></input>
	<br>
	<select class="form-control"  name="type">
		<option value="inquiry">General Inquiry</option>
	</select>
	<br>
	<textarea class="form-control" name="message" cols="30" rows="10" placeholder="Message"></textarea>
	<br>
	<button id = "btn-contact-submit" type="button" class = "btn-blue">Submit</button>
</form>


<?php
include("footer.php");
?>



  <script src="https://code.jquery.com/jquery-1.12.3.min.js" integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ="   crossorigin="anonymous"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/contact.js"></script>
  <script src='https://cdn.firebase.com/js/client/2.2.1/firebase.js'></script>

</body>
</html>