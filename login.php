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
      <form id="login" class="input-group" action="index.php">
        <div class="inp">
          <img src="images/icon/user.png" /><input
            type="text"
            id="email"
            class="input-field"
            placeholder="Username or Phone Number"
            style="width: 88%; border: none"
            required="required"
          />
        </div>
        <div class="inp">
          <img src="images/icon/password.png" /><input
            type="password"
            id="password"
            class="input-field"
            placeholder="Password"
            style="width: 88%; border: none"
            required="required"
          />
        </div>
        <input type="checkbox" class="check-box" />Remember Password
        <button type="submit" class="submit-btn">Log In</button>
      </form>
      <br /><br />

      <div class="other" id="other">
        <div class="instead">
          <h3>or</h3>
        </div>
        <button class="connect" onclick="google()">
          <img src="images/icon/google.png" /><span>Sign in with Google</span>
        </button>
      </div>

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
