<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>UBC Computer Course Helper</title>
    
    
    
    
        <link rel="stylesheet" href="css/index.css">

    
    
    
  </head>

  <body>

  <h1>UBC Computer Science Course Helper Site</h1>

    <div class="login-page">
  <div class="form">
    <form name="register" class="register-form" onsubmit="return registerUser()">
      <input type="text" name="name" placeholder="Name"/>      
      <input type="text" name="email" placeholder="Email Address"/>
      <input type="password" name="password" placeholder="Password"/>
      <input type="password" name="passwordverify" placeholder="Verify Password"/>

      <button>create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>
    <form class="login-form" name="login" onsubmit="return loginUser()">
      <input type="text" name="email"placeholder="email"/>
      <input type="password" name="password"placeholder="password"/>
      <button>login</button>
      <p class="message">Not registered? <a href="#">Create an account</a></p>
      <p class="message">Skip registration for now... Direct me to <a href="courses.php">Main Page</a></p>

    </form>
  </div>
</div>
      <script src="https://code.jquery.com/jquery-1.12.3.min.js" integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ="   crossorigin="anonymous"></script>

        <script src="js/index.js"></script>
      <script src="js/user.js"></script>
    
    
    
  </body>
</html>
