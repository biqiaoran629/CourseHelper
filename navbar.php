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
      <li><a href="index.html">Home</a></li>
      <li><a href="courses.php">Courses</a></li>
      <li><a href="people.php">Instructors</a></li>
      <li><a href="about.php">About</a></li>
    </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><p class="navbar-text" id="not-logged-in">Already have an account?</p></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
      <ul id="login-dp" class="dropdown-menu">
        <li>
           <div class="row">
              <div class="col-md-12">
                 <form name="login" class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav" onsubmit="return loginUser()">
                    <div class="form-group">
                       <label class="sr-only" for="exampleInputEmail2">Email address</label>
                       <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" name="email" required>
                    </div>
                    <div class="form-group">
                       <label class="sr-only" for="exampleInputPassword2">Password</label>
                       <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" name="password" required>
                    </div>
                    <div class="form-group">
                       <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                    </div>
                 </form>
              </div>
           </div>
        </li>
      </ul>
        </li>
        <li><p class="navbar-text">If not, register here!</p></li>
        <li class="dropdown">
         <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Register</b> <span class="caret"></span></a>
      <ul id="login-dp" class="dropdown-menu">
        <li>
        <div class="row">
              <div class="col-md-12">
                 <form name="register" class="form" role="form" method="post" action="register" accept-charset="UTF-8" id="register-nav" onsubmit="return registerUser()" >
                  <div class="form-group">
                       <label class="sr-only" for="exampleInputName">Name</label>
                       <input type="text" class="form-control" id="exampleInputName" placeholder="Name" name="name" required>
                    </div>
                 <div class="form-group">
                       <label class="sr-only" for="exampleInputEmail2">Email address</label>
                       <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" name="email" required>
                    </div>  
                    <div class="form-group">
                       <label class="sr-only" for="exampleInputPassword2">Password</label>
                       <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" name="password" required>
                    </div>
                    <div class="form-group">
                       <label class="sr-only" for="exampleVerifyPassword2">Verify Password</label>
                       <input type="password" class="form-control" id="exampleVerifyPassword2" placeholder="Verify Password" name="passwordverify" required>
                    </div>
                    <div class="form-group">
                       <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>
                 </form>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
