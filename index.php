<!DOCTYPE html>
<html>
  <head>
    <link
      rel="shortcut icon"
      type="png"
      href="images/icon/learn logo - Copy.jpg"
    />
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Comaptible" content="IE=edge" />
    <title>Learn with AEC</title>
    <meta name="desciption" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <script type="text/javascript" src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
  </head>
  <body>
    <!-- Navigation Bar -->
    <header id="header">
      <nav>
        <div class="logo">
          <img src="images/icon/learn logo - Copy.jpg" alt="logo" />Learn with
          AEC
        </div>
        <ul>
          <li><a class="active" href="">Home</a></li>
          <li><a href="#about_section">About</a></li>
          <li><a href="#Subject_section">Subjects</a></li>
          <li><a href="#team_section">Team</a></li>
          <li><a href="#contactus_section">Contact</a></li>
        </ul>
        <a class="get-started" href="login.php">Get Started</a>
        <img
          src="images/icon/menu.png"
          class="menu"
          onclick="sideMenu(0)"
          alt="menu"
        />
      </nav>
      <div class="head-container">
        <div class="quote">
          <p>A good education is a foundation for a better future</p>
          <h5>
            Education is the process of facilitating learning, or the
            acquisition of knowledge, skills, values, beliefs, and habits.
            Educational methods include teaching, training, storytelling,
            discussion and directed research!
          </h5>
        </div>
        <div class="svg-image">
          <img src="images/extra/best-apps-for-education.jpg" alt="svg" />
        </div>
        <div class="side-menu" id="side-menu">
          <div class="close" onclick="sideMenu(1)">
            <img src="images/icon/close.png" alt="" />
          </div>
          <ul>
            <li><a href="login.php">Get Started</a></li>
            <li><a href="#about_section">About</a></li>
            <li><a href="#Subject_section">Subjects</a></li>
            <li><a href="#team_section">Team</a></li>
            <li><a href="#contactus_section">Contact</a></li>
            <li><a href="#feedBACK">Feedback</a></li>
          </ul>
        </div>
      </div>
    </header>

    <!-- ABOUT -->
    <div class="diffSection" id="about_section">
      <center><p style="font-size: 50px; padding: 100px">About</p></center>
      <div class="about-content">
        <div class="side-image">
          <img class="sideImage" src="images/extra/about img.jpg" />
        </div>
        <div class="side-text">
          <h2>What you think about us ?</h2>
          <p>
            Education is the process of facilitating learning, or the
            acquisition of knowledge, skills, values, beliefs, and habits.
            Educational methods include teaching, training, storytelling,
            discussion and directed research.<br />
            Educational website can include websites that have games, videos or
            topic related resources that act as tools to enhance learning and
            supplement classroom teaching. These websites help make the process
            of learning entertaining and attractive to the student, especially
            in today's age. <br />Using HTML(HyperText Markup Language),
            CSS(Cascading Style Sheet), JavaScript, we can make learning more
            easier and in a interesting way.
          </p>
        </div>
      </div>
    </div>

    <!-- Some Popular Subjects -->
    <div class="diffSection" id="Subject_section">
      <center>
        <p style="font-size: 50px; padding: 100px">
          Subjects on Learn with AEC
        </p>
      </center>
      <br /><br />
      <div class="course">
        <center>
          <div class="cbox">
            <div class="det">
              <a href="subjects/cse.php">Computer Science</a>
            </div>
            <div class="det">
              <a href="subjects/it.php">Information Technology</a>
            </div>
            <div class="det"><a href="subjects/ece.php">ECE</a></div>
            <div class="det">
              <a href="subjects/ee.php">Electrical Engineering</a>
            </div>
          </div>
        </center>
      </div>
    </div>

    <!-- TEAM -->
    <div class="diffSection" id="team_section">
      <center>
        <p style="font-size: 50px; padding-top: 100px; padding-bottom: 60px">
          We are the Creators
        </p>
      </center>
      <div class="totalcard">
        <div class="card">
          <center>
            <img
              src="images/creator/WhatsApp Image 2023-05-07 at 16.04.16.jpg"
            />
          </center>
          <center>
            <div class="card-title">T. Jaya Lakshmi</div>
            <div id="detail">
              <p>
                "You can teach a student a lesson for a day; but if you can
                teach him to learn by creating curiosity, he will continue the
                learning process as long as he lives."
              </p>
              <div class="duty"></div>
              <a
                href="https://www.linkedin.com/mwlite/in/t-jay-lakshmi"
                target="_blank"
                ><button class="btn-tjaya">Follow</button></a
              >
            </div>
          </center>
        </div>
        <div class="card">
          <center>
            <img
              src="images/creator/WhatsApp Image 2023-05-07 at 16.37.26.jpg"
            />
          </center>
          <center>
            <div class="card-title">Sidhi Raj</div>
            <div id="detail">
              <p>
                "Real education should consist of drawing the goodness and the
                best out of our own students. What better books can there be
                than the book of humanity"
              </p>
              <div class="duty"></div>
              <a
                href="https://www.linkedin.com/in/sidhi-raj-0b04741ba/"
                target="_blank"
                ><button class="btn-sidhi">Follow</button></a
              >
            </div>
          </center>
        </div>
        <div class="card">
          <center>
            <img
              src="images/creator/00100sPORTRAIT_00100_BURST20201114155630930_COVER.jpg"
            />
          </center>
          <center>
            <div class="card-title">Shraddha Kumari</div>
            <div id="detail">
              <p>
                "A plant needs roots in order to grow. With man it is the other
                way around: only when he grows does he have roots and feels at
                home in the world."
              </p>
              <div class="duty"></div>
              <a
                href="https://www.linkedin.com/in/shraddha-kumari-76ba561b7/"
                target="_blank"
                ><button class="btn-shra">Follow</button></a
              >
            </div>
          </center>
        </div>
        <div class="card">
          <center>
            <img src="images/creator/Poonam Image 2023-05-07 at 16.35.16.jpg" />
          </center>
          <center>
            <div class="card-title">Poonam Kumari</div>
            <div id="detail">
              <p>
                "The key to pursuing excellence is to embrace an organic,
                long-term learning process, and not to live in a shell of
                static, safe mediocrity. Usually, growth comes at the expense of
                previous comfort or safety."
              </p>
              <div class="duty"></div>
              <a
                href="https://www.linkedin.com/in/poonam-kumari-5a99341b3/"
                target="_blank"
                ><button class="btn-poo">Follow</button></a
              >
            </div>
          </center>
        </div>
      </div>
    </div>

    <!-- CONTACT US -->
    <div class="diffSection" id="contactus_section">
      <center><p style="font-size: 50px; padding: 100px">Contact Us</p></center>
      <div class="csec"></div>
      <div class="back-contact">
        <div class="cc">
          <form
            action="mailto:tssp.aec23@gmail.com"
            method="post"
            enctype="text/plain"
          >
            <label>First Name <span class="imp">*</span></label
            ><label style="margin-left: 185px"
              >Last Name <span class="imp">*</span></label
            ><br />
            <center>
              <input
                type="text"
                name=""
                style="margin-right: 10px; width: 175px"
                required="required"
              /><input
                type="text"
                name="lname"
                style="width: 175px"
                required="required"
              /><br />
            </center>
            <label>Email <span class="imp">*</span></label
            ><br />
            <input
              type="email"
              name="mail"
              style="width: 100%"
              required="required"
            /><br />
            <label>Message <span class="imp">*</span></label
            ><br />
            <input
              type="text"
              name="message"
              style="width: 100%"
              required="required"
            /><br />
            <label>Additional Details</label><br />
            <textarea name="addtional"></textarea><br />
            <button type="submit" id="csubmit">Send Message</button>
          </form>
        </div>
      </div>
    </div>

    <!-- FEEDBACK -->
    <div class="title2" id="feedBACK">
      <span>Give Feedback</span>
      <div class="shortdesc2">
        <p>Please share your valuable feedback to us</p>
      </div>
    </div>

    <div class="feedbox">
      <div class="feed">
        <form
          action="mailto:tssp.aec23@gmail.com"
          method="post"
          enctype="text/plain"
        >
          <label>Your Name</label><br />
          <input type="text" name="" class="fname" required="required" /><br />
          <label>Email</label><br />
          <input type="email" name="mail" required="required" /><br />
          <label>Additional Details</label><br />
          <textarea name="addtional"></textarea><br />
          <button type="submit" id="csubmit">Send Message</button>
        </form>
      </div>
    </div>

    <!-- Sliding Information -->
    <marquee
      style="
        background: linear-gradient(to right, #fa4b37, #df2771);
        margin-top: 50px;
      "
      direction="left"
      onmouseover="this.stop()"
      onmouseout="this.start()"
      scrollamount="15"
      ><div class="marqu">
        “Education is the passport to the future, for tomorrow belongs to those
        who prepare for it today.” “Your attitude, not your aptitude, will
        determine your altitude.” “If you think education is expensive, try
        ignorance.” “The only person who is educated is the one who has learned
        how to learn …and change.”
      </div></marquee
    >

    <!-- FOOTER -->
    <footer>
      <div class="footer-container">
        <div class="left-col">
          <div class="logo"></div>
          <div class="social-media">
            <a href="#"><img src="images/icon/fb.png" /></a>
            <a href="#"><img src="images/icon/insta.png" /></a>
            <a href="#"><img src="images/icon/tt.png" /></a>
            <a href="#"><img src="images/icon/ytube.png" /></a>
            <a href="#"><img src="images/icon/linkedin.png" /></a>
          </div>
          <br /><br />
          <p class="rights-text">
            Copyright © 2023 Created By Sidhi Raj, T Jaya Lakshmi, Shraddha
            Kumari and Poonam Kumari All Rights Reserved.
          </p>
          <br />
          <p>
            <img src="images/icon/location.png" /> Asansol Engineering
            College<br />Asansol, West Bengal-713305
          </p>
          <br />
          <p>
            <img src="images/icon/phone.png" /> +91 7654510086<br /><img
              src="images/icon/mail.png"
            />&nbsp; tssp.aec23@gmail.com
          </p>
        </div>
        <div class="right-col">
          <h1 style="color: #fff">Our Newsletter</h1>
          <div class="border"></div>
          <br />
          <p>Enter Your Email to get our News and updates.</p>
          <form class="newsletter-form">
            <input class="txtb" type="email" placeholder="Enter Your Email" />
            <input class="btn" type="submit" value="Submit" />
          </form>
        </div>
      </div>
    </footer>
  </body>
</html>
