<!-- HTML  Begin- 283Lines -->

<!DOCTYPE html>
<html lang="en">
  <!-- HEAD start -->
  <head>
    <!-- meta tags Required -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Title -->
    <title>Academic Hub</title>

    <!-- CSS -->
    <link href="css/style1.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
   

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"
    />
    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <!-- JQERY Owl Carousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    />
  
    <script src="js/snackbar.js"></script>
    <script src="js/scroll-to-top.js"></script>
    <script src="js/scroll-transition.js"></script>

    <!-- =====BOX ICONS===== -->
    <link
      href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css"
      rel="stylesheet"
    />

  </head>
  <!-- HEAD End -->

  <!-- BODY start -->
  <body>
    <!-- NAVBAR start -->
    <div class="header drop-in">
    <nav class="navbar">
      <div class="max-width">
        <!-- Navbar Heading -->
        <div class="logo">
          <img src="images/Logo3.png" alt="Academic Logo" />
        </div>

        <!-- Navbar Sub-Content -->
        <ul class="menu">
          <li><a href="#home" class="menu-btn">Home</a></li>
          <li><a href="#about" class="menu-btn">About</a></li>
          <li><a onclick="showToast()" class="menu-btn">Category</a></li>
          <li><a onclick="showToast()" class="menu-btn">Events</a></li>
        </ul>
      </div>
    </nav>
</div>
    <!-- Toast message element -->
    <div id="snackbar">First Login/Register</div>

    <!-- NAVBAR End -->

    <!-- Scroll to top -->
    <a href="#" id="scroll" style="display: none;"><span></span></a>

    <!-- HOME section start -->
    <section class="home" id="home">
      <div class="max-width">
        <!-- Home Section Content -->
        <div class="home-content left" style="flex-direction: row">
          <div class="header drop-in"> <div class="text-1">Academia Hub</div>
          <div class="text-2">Your Academic <section class="animation"> <div class="first"><div>Bridge</div></div>
            <div class="second"><div>Partner</div></div>
            <div class="third"><div>Support</div></div></section></div>
          
          <div class="text-3">
            Find information about all the academic events organised under the affiliation of major institutions, and organizations,
            events organised in your college, other colleges at your fingertips.
            <br />
          </div>
          </div>

          <!-- Contact me Button -->
          <div class="drop-in-2">  
          <a href="login-signup.php" style="margin-left: 80px;">Register<i class="bx bx-send reg"></i></a>
          <a href="loginn.php">Login<i class="bx bx-send reg"></i></a></div>
          <div
            class="home-content right"
            style="
              flex: content;
              position: absolute;
              text-align: right;
              right: 0%;
              top: 25%;
              padding-right: 80px;
            "
          >

          <div class="drop-in-2"> <img src="images/Heropage.png" alt="" width="50%" /></div>
          </div>
        </div>
      </div>
    </section>
    <!-- HOME section End -->

    <!-- Project section start -->
    <section class="project" id="project">
      <div class="max-width">
        <!-- Project Heading -->
        <h2 class="title reveal">Get updates about upcoming..</h2>

        <!-- Project Section Content -->
        <div class="carousel owl-carousel reveal">
          <!-- Project Section Content-1 -->
          <div class="card">
            <div class="box">
              <div class="text">Clubs</div>
            </div>
          </div>

          <!-- Project Section Content-2 -->
          <div class="card">
            <div class="box">
              <div class="text">Webinars</div>
            </div>
          </div>

          <!-- Project Section Content-3 -->
          <div class="card">
            <div class="box">
              <div class="text">Seminars</div>
            </div>
          </div>

          <!-- Project Section Content-4 -->
          <div class="card">
            <div class="box">
              <div class="text">Fests</div>
            </div>
          </div>

          <!-- Project Section Content-5 -->
          <div class="card">
            <div class="box">
              <div class="text">Sports</div>
            </div>
          </div>

          <!-- Project Section Content-6 -->
          <div class="card">
            <div class="box">
              <div class="text">Hackathons</div>
            </div>
          </div>

          <!-- Project Section Content-7 -->
          <div class="card">
            <div class="box">
              <div class="text">Dept events</div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Project section End -->

    <!-- ABOUT section start -->
    <section class="about" id="about">
      <div class="max-width">
        <!-- About Heading -->
        <h2 class="title reveal">About Us</h2>

        <!-- About Section Content -->
        <div class="about-content reveal">
          <!-- About Section Content Left -->
          <div class="column left">
            <img src="images/Herodown.png" alt="Academic Hub" />
          </div>

          <!-- About Section Content Right -->
          <div class="column right">
            <div class="text">What is Academia Hub?</div>
            <p>
              Academia Hub is a portal where information about all academic
              activities across the country, universities and international
              arena is present in chronological order and in subject areas so as
              to enable the students, faculty, and researchers to access
              information and prepare well in advance and participate
              effectively and successfully.
            </p>

          </div>
        </div>
      </div>
    </section>
    <!-- ABOUT section End -->

    <!-- Services section start -->
    <section class="services" id="services">
      <div class="max-width">
        <!-- Services Heading -->
        <h2 class="title reveal">Key Benefits</h2>

        <!-- Services Section Content -->
        <div class="serv-content reveal">
          <!-- Services Section Content-1 -->
          <div class="card">
            <div class="box">
              <i class="bx bxs-calendar"></i>
              <div class="text">Chronological order</div>
              <p>All the events are organised in chronological order.</p>
            </div>
          </div>

          <!-- Services Section Content-2 -->
          <div class="card">
            <div class="box">
              <i class="bx bxs-layer"></i>
              <div class="text">Categorization</div>
              <p>
                Categorization of events according to clubs, committees and
                other colleges or universities.
              </p>
            </div>
          </div>

          <!-- Services Section Content-3 -->
          <div class="card">
            <div class="box">
              <i class="bx bxs-book-content"></i>
              <div class="text">Information</div>
              <p>
                Get information about webinars, hackathons, seminars, fests,
                sports, etc.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer section start -->
    <section id="footer">
      <div class="footer">
        <div class="col">
          <h1>About</h1>
          <ul>
            <li><a href="#">How it works</a></li>
            <li><a href="#">Terms and Services</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Contact Us</a></li>
          </ul>
        </div>
        <div class="col">
          <h1>Follow us on</h1>
          <ul>
            <li style="font-size: 30px">
              <a href="#" class="fa fa-facebook"></a>
              <a href="#" class="fa fa-twitter"></a>
              <a href="#" class="fa fa-instagram"></a>
            </li>            
          </ul>
        </div>
        <div class="col">
          <h1>Get in touch</h1>
          <ul>
            <li>
              <a href="#"
                ><i style="font-size: 30px" class="fa fa-phone"></i>+91
                8584200354</a
              >
            </li>
            <li>
              <a href="#"
                ><i style="font-size: 25px" class="fa fa-envelope"></i
                >academiahub@gmail.com</a
              >
            </li>
          </ul>
        </div>
      </div>
      <p id="copy">Copyright &copy 2023 Academia Hub Team</p>
    </section>
    <!-- Footer section End -->
   
    <!-- JavaScript -->
    <script src="script.js"></script>
  </body>
</html>