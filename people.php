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
	<title>Instructors</title>
</head>
<body>

  <?php 

  session_start();


  if($_SESSION){
  if($_SESSION['name']){
    include("navbar_loggedin.php");
  }
  }
  else{
    include("navbar.php");
  }

  

  ?>



	<h1>Instructors</h1>




<div class ="dropdown">	
	<p>Use the dropdown button below to see instructors: </p>
	<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    Instructors
    <span class="caret"></span>
  </button>
	<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
		<li class='ilist'><a id='Donald Acton' href="#">Donald Acton</a></li>
		<li class='ilist'><a id='Meghan Allen' href="#">Meghan Allen</a></li>
		<li class='ilist'><a id='Uri Ascher' href="#">Uri Ascher</a></li>
		<li class='ilist'><a id='Patrice Belleville' href="#">Patrice Belleville</a></li>
		<li class='ilist'><a id='Paul Carter' href="#">Paul Carter</a></li>
		<li class='ilist'><a id='Kurt Eiselt' href="#">Kurt Eiselt</a></li>
		<li class='ilist'><a id='Joel Friedman' href="#">Joel Friedman</a></li>		
		<li class='ilist'><a id='Nick Harvey' href="#">Nick Harvey</a></li>
		<li class='ilist'><a id='Gregor Kiczales' href="#">Gregor Kiczales</a></li>
		<li class='ilist'><a id='Ed Knorr' href="#">Ed Knorr</a></li>
		<li class='ilist'><a id='Jim Little' href="#">Jim Little</a></li>
		<li class='ilist'><a id='Raymond Ng' href="#">Raymond Ng</a></li>
		<li class='ilist'><a id='George Tsiknis' href="#">George Tsiknis</a></li>
		<li class='ilist'><a id='Steve Wolfman' href="#">Steve Wolfman</a></li>
	</ul>
	</div>

	<div class = "instructors">
		<img id='img' src="img/acton.jpg">
		<h3 id='name'>Donald Acton</h3>
		<p id='position'>Senior Instructor</p>
		<p id='email'><b>Email:</b> acton@cs.ubc.ca</p>
		<p id='office'><b>Office:</b> ICCS 231</p>
		<p id='phone'><b>Phone:</b>N/A</p>
		<b id='pastC'>Past Courses</b>
		<p id='courses'>		
		CPSC 317  –  Internet Computing
		<br>
		CPSC 415  –  Advanced Operating Systems
		<br>
		CPSC 313  –  Computer Hardware and Operating Systems
		<br>
		CPSC 317  –  Internet Computing
		</p>

	</div>
<!-- 
	<div class= "instructors">
		<img src="img/allen.jpg">
		<h3>Meghan Allen</h3>
		<p>Instructor I</p>
		<p><b>Email:</b> meghana@cs.ubc.ca</p>
		<p><b>Office:</b> ICCS 244</p>
		<p><b>Phone:</b> 604-822-4912</p>
		<p> <b>Past Courses</b>
		<br>
		2016 Winter
		<br>
		CPSC 101  –  Connecting with Computer Science
		<br>
		CPSC 101  –  Connecting with Computer Science
	</div>


	<div class= "instructors">
		<img src="img/ascher.jpg">
		<h3>Uri Ascher</h3>
		<p>Professor</p>
		<p><b>Email:</b> ascher@cs.ubc.ca</p>
		<p><b>Office:</b> ICCS 223</p>
		<p><b>Phone:</b> 604-822-4907</p>
		<p> <b>Past Courses</b>
		<br>
		2015 Winter
		<br>
		CPSC 302  –  Numerical Computation for Algebraic Problems
	</div>

	<div class= "instructors">
		<img src="img/patrice.jpg">
		<h3>Patrice Belleviller</h3>
		<p>Senior Instructor</p>
		<p><b>Email:</b> patrice@cs.ubc.ca</p>
		<p><b>Office:</b> ICCS 343</p>
		<p><b>Phone:</b> 604-822-9870</p>
		<p> <b>Past Courses</b>
		<br>
		2015 Winter
		<br>
		CPSC 313  –  Computer Hardware and Operating Systems
		<br>
		CPSC 121  –  Models of Computation
		<br>
		CPSC 121  –  Models of Computation
		<br>
		CPSC 261  –  Basics of Computer Systems
		<br>
		CPSC 121  –  Models of Computation
	</div>

	<div class= "instructors">
		<img src="img/carter.jpg">
		<h3>Paul Carter</h3>
		<p>Professor of Teaching</p>
		<p><b>Email:</b> pcarter@cs.ubc.ca</p>
		<p><b>Office:</b> ICCS 391</p>
		<p><b>Phone:</b> 604-822-4034</p>
		<p> <b>Past Courses</b>
		<br>
		2015 Winter
		<br>
		CPSC 210  –  Software Construction
		<br>
		CPSC 210  –  Software Construction
		<br>
		CPSC 210  –  Software Construction
		<br>
		CPSC 210  –  Software Construction
	</div>

	<div class= "instructors">
		<img src="img/eiselt.jpg">
		<h3>Kurt Eiselt</h3>
		<p>Senior Instructor</p>
		<p><b>Email:</b> eiselt@cs.ubc.ca</p>
		<p><b>Office:</b> ICCS 233</p>
		<p><b>Phone:</b> 604-822-9880</p>
		<p> <b>Past Courses</b>
		<br>
		2015 Summer
		<br>
		CPSC 221  –  Basic Algorithms and Data Structures
	</div>


	<div class= "instructors">
		<img src="img/friedman.jpg">
		<h3>Joel Friedman</h3>
		<p>Professor / Professor, Mathematics</p>
		<p><b>Email:</b> jf@cs.ubc.ca</p>
		<p><b>Office:</b> ICCS X561</p>
		<p><b>Phone:</b> 604-822-0674</p>
		<p> <b>Past Courses</b>
		<br>
		2015 Winter
		<br>
		CPSC 421  –  Introduction to Theory of Computing
		<br>
		CPSC 501  –  Theory of Automata, Formal Languages and Computability
	</div>

	<div class= "instructors">
		<img src="img/harvey.jpg">
		<h3>Nick Harvey</h3>
		<p>Associate Professor</p>
		<p><b>Email:</b> nickhar@cs.ubc.ca</p>
		<p><b>Office:</b> ICCS X851</p>
		<p><b>Phone:</b> 604-827-5941</p>
		<p> <b>Past Courses</b>		
		<br>
		2015 Summer
		<br>
		CPSC 320  –  Intermediate Algorithm Design and Analysis
	</div>

	<div class= "instructors">
		<img src="img/kiczales.jpg">
		<h3>Gregor Kiczales</h3>
		<p>Professor</p>
		<p><b>Email:</b> gregor@cs.ubc.ca</p>
		<p><b>Office:</b> ICCS 311</p>
		<p><b>Phone:</b> 604-822-4806</p>
		<p> <b>Past Courses</b>
		<br>
		2015 Winter
		<br>
		CPSC 110  –  Computation, Programs, and Programming
	</div>

	<div class= "instructors">
		<img src="img/knorr.jpg">
		<h3>Ed Knorr</h3>
		<p>Senior Instructor</p>
		<p><b>Email:</b> knorr@cs.ubc.ca</p>
		<p><b>Office:</b> ICCS 229</p>
		<p><b>Phone:</b> 604-822-4336</p>
		<p> <b>Past Courses</b>
		<br>
		2014 Winter
		<br>
		CPSC 404  –  Advanced Relational Databases
	</div>

	<div class= "instructors">
		<img src="img/little.jpg">
		<h3>Jim Little</h3>
		<p>Professor</p>
		<p><b>Email:</b> little@cs.ubc.ca</p>
		<p><b>Office:</b> ICCS 117</p>
		<p><b>Phone:</b> 604-822-4830</p>
		<p> <b>Past Courses</b>
		<br>
		2016 Winter
		<br>
		CPSC 310  –  Introduction to Software Engineering
	</div>


	<div class= "instructors">
		<img src="img/ng.jpg">
		<h3>Raymond Ng</h3>
		<p>Professor</p>
		<p><b>Email:</b> rng@cs.ubc.ca</p>
		<p><b>Office:</b> ICCS 303</p>
		<p><b>Phone:</b> 604-822-2394</p>
		<p> <b>Past Courses</b>
		<br>
		2015 Winter
		<br>
		CPSC 304  –  Introduction to Relational Databases
	</div>

	<div class= "instructors">
		<img src="img/tsiknis.jpg">
		<h3>George Tsiknis</h3>
		<p>Professor of Teaching</p>
		<p><b>Email:</b> tsiknis@cs.ubc.ca</p>
		<p><b>Office:</b> ICCS 307</p>
		<p><b>Phone:</b> 604-822-2930</p>
		<p> <b>Past Courses</b>
		<br>
		2015 Winter
		<br>
		CPSC 404  –  Advanced Relational Databases
		<br>
		CPSC 301  –  Computing in the Life Sciences
		<br>CPSC 121  –  Models of Computation
	</div>

	<div class= "instructors">
		<img src="img/wolfman.jpg">
		<h3>Steve Wolfman</h3>
		<p>Professor of Teaching</p>
		<p><b>Email:</b> wolf@cs.ubc.ca</p>
		<p><b>Office:</b> ICCS 239</p>
		<p><b>Phone:</b> 604-822-0407</p>
		<p> <b>Past Courses</b>
		<br>
		22015 Winter
		<br>
		CPSC 110  –  Computation, Programs, and Programming
		<br>
		2015 Summer
		<br>
		CPSC 110  –  Computation Programs and Programming
	</div>
 -->

</div>

<?php
include("footer.php");
?>

<script src="https://code.jquery.com/jquery-1.12.3.min.js" integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ="   crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>
<script src='https://cdn.firebase.com/js/client/2.2.1/firebase.js'></script>
<script src="js/people.js"></script>


</body>
</html>