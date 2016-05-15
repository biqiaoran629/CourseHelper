<!DOCTYPE html>
<html>
<head>

	<meta charset="URF-8">

	<!-- imports -->

	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/hover.css">
	<script src="js/user.js"></script>
	<!--  -->
	<title>
		
	</title>
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


	<div class="helper-info">
		<h2><i class="fa fa-info-circle icon-space" aria-hidden="true"></i>How to use?</h2>
		<h3 id="returnmsg"></h3>
		<ul>
			<li> Each student has to take all of the mandatory courses, and take three 300-level courses and three 400-level courses as electives</li>
			<li> If you are registered, you can comment on the courses, and view other people's comment on courses </li>
		</ul>

	</div>

	<div class="container-fluid">
		<table class = "table table-hover" id = "courseTable">
			<tr id="tableHeader">
				<th>Course ID</th>
				<th>Course Name</th>
				<th>Year</th>
				<th>Is Mandatory</th>

			</tr>

	<!-- 	<tr>
			<td>CPSC 110</td>
			<td>Computation, Programs, and Programming</td>
			<td>1</td>
			<td>Yes</td>

		<tr>
			<td>CPSC 121</td>
			<td>Models of Computation</td>
			<td>1</td>
			<td>Yes</td>
		</tr>

		<tr>
			<td>CPSC 210</td>
			<td>Software Construction</td>
			<td>2</td>
			<td>Yes</td>
		</tr>
		
		<tr>
			<td>CPSC 213</td>
			<td>Introduction to Computer Systems</td>
			<td>2</td>
			<td>Yes</td>
		</tr>

		<tr>
			<td>CPSC 221</td>
			<td>Basic Algorithms and Data Structures</td>
			<td>2</td>
			<td>Yes</td>
		</tr>
		<tr>
			<td>CPSC 259</td>
			<td>Data Structures and Algorithms for Electrical Engineers</td>
			<td>2</td>
			<td>No</td>
		</tr>
		<tr>
			<td>CPSC 261</td>
			<td>Basics of Computer Systems</td>
			<td>2</td>
			<td>No</td>
		</tr>
		<tr>
			<td>CPSC 301</td>
			<td>Computing in the Life Sciences</td>
			<td>3</td>
			<td>No</td>
		</tr>
		<tr>
			<td>CPSC 302</td>
			<td>Numerical Computation for Algebraic Problems</td>
			<td>3</td>
			<td>No</td>
		</tr>
		<tr>
			<td>CPSC 303</td>
			<td>Numerical Approximation and Discretization</td>
			<td>3</td>
			<td>No</td>
		</tr>
		<tr>
			<td>CPSC 304</td>
			<td>Introduction to Relational Databases</td>
			<td>3</td>
			<td>No</td>
		</tr>
		<tr>
			<td>CPSC 310</td>
			<td>Introduction to Software Engineering</td>
			<td>3</td>
			<td>Yes</td>
		</tr>
			<td>CPSC 311</td>
			<td>Definition of Programming Languages</td>
			<td>3</td>
			<td>No</td>
		</tr>
		<tr>
			<td>CPSC 312</td>
			<td>Functional and Logic Programming</td>
			<td>3</td>
			<td>No</td>
		</tr>
		<tr>
			<td>CPSC 313</td>
			<td>Computer Hardware and Operating Systems</td>
			<td>3</td>
			<td>Yes</td>
		</tr>
		<tr>
			<td>CPSC 314</td>
			<td>Computer Graphics</td>
			<td>3</td>
			<td>No</td>
		</tr>
		<tr>
			<td>CPSC 317</td>
			<td>Internet Computing</td>
			<td>3</td>
			<td>No</td>
		</tr>
		<tr>
			<td>CPSC 319</td>
			<td>Software Engineering Project</td>
			<td>3</td>
			<td>No</td>
		</tr>
		<tr>
			<td>CPSC 320</td>
			<td>Intermediate Algorithm Design and Analysis</td>
			<td>3</td>
			<td>No</td>
		</tr>
		<tr>
			<td>CPSC 322</td>
			<td>Introduction to Artificial Intelligence</td>
			<td>3</td>
			<td>No</td>
		</tr>
		<tr>
			<td>CPSC 340</td>
			<td>Machine Learning and Data Mining</td>
			<td>3</td>
			<td>No</td>
		</tr>
		<tr>
			<td>CPSC 344</td>
			<td>Introduction to Human Computer Interaction Methods</td>
			<td>3</td>
			<td>No</td>
		</tr>
		<tr>
			<td>CPSC 349</td>
			<td>Honours Research Seminar</td>
			<td>3</td>
			<td>No</td>
		</tr>
		<tr>
			<td>CPSC 404</td>
			<td>Advanced Relational Databases</td>
			<td>4</td>
			<td>No</td>
		</tr>
		<tr>
			<td>CPSC 410</td>
			<td>Advanced Software Engineering</td>
			<td>4</td>
			<td>No</td>
		</tr>
		<tr>
			<td>CPSC 411</td>
			<td>Introduction to Compiler Construction</td>
			<td>4</td>
			<td>No</td>
		</tr>
		<tr>
			<td>CPSC 415</td>
			<td>Advanced Operating Systems</td>
			<td>4</td>
			<td>No</td>
		</tr>
		<tr>
			<td>CPSC 420</td>
			<td>Advanced Algorithms Design and Analysis</td>
			<td>4</td>
			<td>No</td>
		</tr>
		<tr>
			<td>CPSC 421</td>
			<td>Introduction to Theory of Computing</td>
			<td>4</td>
			<td>No</td>
		</tr>
		<tr>
			<td>CPSC 422</td>
			<td>Intelligent Systems</td>
			<td>4</td>
			<td>No</td>
		</tr>
		<tr>
			<td>CPSC 425</td>
			<td>Computer Vision</td>
			<td>4</td>
			<td>No</td>
		</tr>
		<tr>
			<td>CPSC 430</td>
			<td>Computers and Society</td>
			<td>4</td>
			<td>No</td>
		</tr>
		<tr>
			<td>CPSC 444</td>
			<td>Advanced Methods for Human Computer Interaction</td>
			<td>4</td>
			<td>No</td>
		</tr>
		<tr>
			<td>CPSC 445</td>
			<td>Algorithms in Bioinformatics</td>
			<td>4</td>
			<td>No</td>
		</tr>						 -->
	</table>
</div>


<div class="modal fade" id="comment-modal" tabindex="-1" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title"></h4>
			</div>
			<div class="modal-body">
				<form id="comment-form">
					<h4>Please enter your comments in the space below: </h4>
					<br>
					<!-- <input class="form-control box-shadow" name="name" type="name" placeholder="Name" required=""></input>
					<br> -->
					<textarea class="form-control box-shadow" cols="30" rows="10" type="tel" name="message" placeholder="Message"></textarea>
					<input type="hidden" name ="courseName">
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn hvr-shutter-in-horizontal" data-dismiss="modal">Close</button>
				<button id="submit-button" type="button" class="btn hvr-shutter-in-horizontal">Submit</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="view-comment-modal" tabindex="-1" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title"></h4>
			</div>
			<div class="modal-body box-shadow">
				<form id="view-comment">
				<div class="comment-div"></div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn hvr-shutter-in-horizontal" data-dismiss="modal">Close</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script src="https://code.jquery.com/jquery-1.12.3.min.js" integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ="   crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>
<script src='https://cdn.firebase.com/js/client/2.2.1/firebase.js'></script>
<script src="js/courses.js"></script>

<?php
include("footer.php");
?>


</body>

<html>