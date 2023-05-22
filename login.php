<!DOCTYPE html>
<html>
  <head>
    <link
      rel="shortcut icon"
      type="png"
      href="images/icon/learn logo - Copy.jpg"
    />
    <title>Login SignUp</title>
    <link rel="stylesheet" type="text/css" href="loginStyle.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- It will redirect to the Home Page after submitting the form -->
    
  </head>
  <body>
    <div class="form-box">
      <div class="button-box">
        <div id="btn"></div>
        <button
          type="button"
          class="toggle-btn"
          id="log"
          onclick="login()"
          style="color: #fff"
        >
          Log In
        </button>
        <button type="button" class="toggle-btn" id="reg" onclick="register()">
          Register
        </button>
      </div>

      <!-- Login Form -->
      <form id="login" class="input-group" action="login_verification.php" method="post">
        <input
          type="text"
          class="input-field"
          placeholder="email address"
          required="required"
          name="email_address"
          />
        
        <input
        type="password"
          class="input-field"
          placeholder="Password"
          name="pass"
          required="required"
          />
        
        <input type="checkbox" class="check-box" />Remember Password
        <input type="submit" value="Login" id="btnSubmit" class="submit-btn"/>
      </form>

      <!-- Registration Form -->
      <form action="registration.php" method="post" id="register" class="input-group">
        <input
          type="text"
          class="input-field"
          placeholder="Full Name"
          required="required"
          name="full_name"
        />
        <input
          type="email"
          class="input-field"
          placeholder="Email Address"
          required="required"
          name="email_address"
        />
        <input
          type="password"
          class="input-field"
          placeholder="Create Password"
          name="pass"
          required="required"
        />
        <input
          type="password"
          class="input-field"
          placeholder="Confirm Password"
          name="pass"
          required="required"
        />
        <input
          type="checkbox"
          class="check-box"
          id="chkAgree"
          onclick="goFurther()"
        />I agree to the Terms & Conditions
        <input type="submit" value="Register" id="btnSubmit" class="submit-btn"/>

      </form>
    </div>
    <script type="text/javascript" src="script.js"></script>
  </body>
</html>
