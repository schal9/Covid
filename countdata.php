
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Covid-19 Web Portal</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medilab - v4.2.0
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope"></i> <a href="mailto:contact@gmail.com">contact@gmail.com</a>
        <i class="bi bi-phone"></i> +1 5589 55488 55
      </div>
      <div class="d-none d-lg-flex social-links align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">Covid-19 Valsad City</a></h1>
     

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#departments">Departments</a></li>
       
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="Availability.php" target="_blank" class="appointment-btn scrollto"><span class="d-none d-md-inline">Availability</span> Status</a>

    </div>
  </header><!-- End Header -->

  
    <!-- ======= Counts Section ======= -->


    <section id="counts" class="counts">
      <div class="container">
           <div class="section-title">
          <h2>Covid-19 Status</h2>
          <p>Valsad District</p>
        </div>

<?php
  //$data = file_get_contents('https://api.covid19india.org/data.json');
  $data = file_get_contents('https://api.covid19india.org/state_district_wise.json');
  $coronalive = json_decode($data,true);?>

     <div class="row">
 <div class="col-lg-3 col-md-6 mt-5 mt-md-0">

            <div class="count-box">
              <i class="fas fa-viruses" style="size: 20px;"></i>
             <span data-purecounter-start="0" data-purecounter-end="<?php echo $coronalive['Gujarat']['districtData']['Valsad']['confirmed']?>" data-purecounter-duration="1" class="purecounter"></span>
               

              <p>Confirmed</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="fa fa-virus"></i>
              <span data-purecounter-start="0" data-purecounter-end="<?php echo $coronalive['Gujarat']['districtData']['Valsad']['active']?>"  data-purecounter-duration="1" class="purecounter"></span>
              <p>Active</p>
            </div>
          </div>     

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="fas fa-heartbeat"></i>
              <span data-purecounter-start="0" data-purecounter-end="<?php echo $coronalive['Gujarat']['districtData']['Valsad']['recovered']?>"  data-purecounter-duration="1" class="purecounter"></span>

              <p>Recovered</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="fas fa-virus-slash"></i>
              <span data-purecounter-start="0" data-purecounter-end="<?php echo $coronalive['Gujarat']['districtData']['Valsad']['deceased']?>"  data-purecounter-duration="1" class="purecounter"></span>
              <p>Deceased</p>
            </div>
          </div>

        </div>

      </div>
      
    </section><!-- End Counts Section -->
<!-- ========= Bed Details ======== -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <table class="table table-bordered table-primary table-responsive">
          <thead>
          <tr>
            <th rowspan="2" scope="col" class="text-center name" style="padding-bottom: 25px;">ID</th>
            <th rowspan="2" scope="col" class="text-center name" style="padding-bottom: 25px;" >Hospitals</th>
            <th rowspan="2" scope="col" class="text-center name"  style="padding-bottom: 25px;">Address</th>
            <th rowspan="2" scope="col" class="text-center name"  style="padding-bottom: 25px;">Contact</th>
            <th rowspan="2" scope="col" class="text-center col-md-2"  style="padding-bottom: 25px;">Total Available Beds</th>
            <th colspan="2" scope="col" class="text-center col-md-2"> Oxygen Bed</th>
            <th colspan="2" scope="col" class="text-center col-md-2" >Ventilator Bed</th>
             <th rowspan="2" scope="col" class="text-center name" style="padding-bottom: 25px;">Incharge/Doctors</th>
            </tr>
          <tr>
            
           <th  scope="col" class="text-center" style="width: 10px;">Total</th>
             <th  scope="col" class="text-center" style="width: 10px;">Vacant</th>
               <th  scope="col" class="text-center" style="width: 10px;">Total</th>
                 <th  scope="col" class="text-center" style="width: 10px;">Vacant</th>

          </tr>
         
           
          </thead>
        </table>      
      </div>
    </div>
  </div>
  <!-- =========== End Bed Availability Details ============= -->
   

   
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
        </div>
      </div>

    <iframe  src="" frameborder="0" allowfullscreen></iframe>
     
<div style="margin-top: -10%;" class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=Valsad&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://www.fridaynightfunkin.net/">Friday Night Funkin PC</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:400px;}.gmap_iframe {height:400px!important;}</style></div>
      <div class="container">
        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Gujarat, Valsad</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+1 5589 55488 55</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Covid-19</h3>
            <p>
              Gujarat,Valsad <br>
            
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Ambulance</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Checkups</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Availability</a></li>
              
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Subscribe and stay connected for latest news and updates </p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Medilab</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>

