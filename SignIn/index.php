<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Sign-Up/Login Form</title>
  <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1>Sign Up for Free</h1>
          
          <form action="registration.php" method="post">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                <span class="req">First Name *</span>
              </label>
              <input type="text" required autocomplete="off" name="FirstName" />
            </div>
        
            <div class="field-wrap">
              <label>
                <span class="req">Last Name *</span>
              </label>
              <input type="text" required autocomplete="off" name="LastName"/>
            </div>
          </div>

          <div class="field-wrap">
            <label>
              <span class="req">Email Address *</span>
            </label>
            <input type="email" required autocomplete="off" name="Email"/>
          </div>
          
          <div class="field-wrap">
            <label>
              <span class="req">Set A Password *</span>
            </label>
            <input type="text" required autocomplete="off" name="Password"/>
          </div>
          
          <button type="submit" class="button button-block" />Get Started</button>
          
          </form>

        </div>
        
        <div id="login">   
          <h1>Welcome Back!</h1>
          
          <form action="login.php" method="post">
          
            <div class="field-wrap">
            <label>
              <span class="req">Email Address *</span>
            </label>
            <input type="email" required autocomplete="off" name="Email"/>
          </div>
          
          <div class="field-wrap">
            <label>
              <span class="req">Password *</span>
            </label>
            <input type="password" required autocomplete="off" name="Password"/>
          </div>
          
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          
          <button type="submit" class="button button-block"/>Log In</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>