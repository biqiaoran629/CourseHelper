<nav class="navbar navbar-default navbar-inverse" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav navbar-left">
      <li><a href="index.php">Home</a></li>
      <li><a href="courses.php">Courses</a></li>
      <li><a href="people.php">Instructors</a></li>
      <li><a href="about.php">About</a></li>
    </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><p class="navbar-text" id="logged-in"><?php if(!isset($_SESSION))   {  session_start();  }  echo "Welcome, ".$_SESSION['email']."!  <a href='logout.php' style= 'margin-left:15px'>Logout</a> <a href='member.php' style= 'margin-left:15px'>My Page</a>"?> </p></li>
      
        </li>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
