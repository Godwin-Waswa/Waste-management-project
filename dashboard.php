<?php
include("auth_session.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Login page</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="assets/img/logo.jpg" rel="icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<link rel="stylesheet" href="signup.css">
  <link href="assets/css/final_project.css" rel="stylesheet">
</head>
<body>
  <header id="header" class="fixed-top text-dark ">
    <div class="container d-flex align-items-center text-dark">

        <a href="index.html" class="logo me-auto"><img src="assets/img/logo.jpg" alt="" class="img-fluid image-circle rounded responsive"></a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php">Go back</a></li>
          <li><a class="nav-link scrollto" href="#footer">Contact</a></li>
          <li><span id="time" style="margin-left:20px ;font-weight: bold;font-size:large;"></span></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
    </div>
  </header>  
    <section class="vh-70 gradient-custom text-center" style="padding-top: 15%;font-size:xx-large">
      <div class="container py-5 h-100" data-aos="zoom-in" data-aos-delay="500">
      <div class="form">
        <p>Hello, <span class="text-primary"><?php echo $_SESSION['username']; ?>!</span></p>
        <p>You are now user dashboard page.</p>
        <p><a href="home.php">Proceed to user dashboard</a></p>
    </div>
      </div>
    </section>        
  </main>
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-contact">
            <h3>Godwin Waswa</h3>
            <p>
              KIMILILI-BUNGOMA ROAD <br>
              P.O BOX, 330-50200<br>
              BOKOLI
              KENYA <br><br>
              <strong>Phone:</strong> +254792777948<br>
              <strong>Email:</strong> waswagodwin19@gmail.com<br>
            </p>
          </div>
          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Consultation services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Solid waste management system web development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Waste Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Optimization of your your organization</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>My Social Networks</h4>
            <p>Kindly reach me Through the social media networks any time for more discussion</p>
            <div class="social-links mt-3">
                <a href="https://twitter.com/waswa_godwin"><i class="ri-twitter-fill"></i></a>
                <a href="https://www.facebook.com/godwin.goddy.750/"><i class="ri-facebook-fill"></i></a>
                <a href="https://www.instagram.com/waswagodwin/"><i class="ri-instagram-fill"></i></a>
                <a href="https://twitter.com/waswa_godwin"> <i class="ri-linkedin-box-fill"></i> </a>
                <a href="https://github.com/Godwin-Waswa"> <i class="ri-github-fill"></i> </a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Godwin</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Project by <a href="https://bootstrapmade.com/">Godwin Wafula Waswa</a>
      </div>
    </div>
  </footer>

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/js/main.js"></script>
      <script>
    var time = {};
    
    (function () {
      var clock = document.getElementById('time');
      
      (function tick () {
        var minutes, d = new Date();
        time.weekday = d.getDay();
        time.day = d.getDate();
        time.month = d.getMonth() + 1; 
        time.year = d.getFullYear();
        time.minutes = d.getMinutes();
        time.hours = d.getHours() ; 
        time.seconds = d.getSeconds();
        time.ms = d.getMilliseconds();
        
        minutes = (time.minutes < 10 ? '0' + time.minutes : time.minutes);
        
        clock.innerHTML = time.month + '/' + time.day + '/' + time.year + ' '+ ' '+ time.hours + ':' + minutes + ':' + time.seconds ;
        
        window.setTimeout(tick, 1000);
      }());
    }()); 
    
    console.log(time.ms);
   </script>
</body>
</html>