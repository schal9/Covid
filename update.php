<?php
//connection
$conn = mysqli_connect("localhost","root","","covid_db");


?>

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
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=number], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.divv {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  
}

</style>
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
          <li><a class="nav-link scrollto active" href="#">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
      
       
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="Availability.php"  class="appointment-btn scrollto"><span class="d-none d-md-inline">Availability</span> Status</a>

    </div>
  </header><!-- End Header -->
 <br><br><br><br><section id="counts" class="counts">
      <div class="container">
           <div class="section-title">
          <h2>Data Entry</h2>
         
        </div>
  <!-- Form Section -->

 <div class="divv" >
  <form action="updateFunc.php" method="POST">
    <center>
          <table cellpadding="10" cellspacing="10">
<?php

$idg = $_GET['id'];
$showquery = "SELECT * FROM data_table where id = {$idg}";
$showdata = mysqli_query($conn,$showquery);
$arrdata = mysqli_fetch_assoc($showdata);

?>
  
      <tr>
        <th>Id</th>
        <td><input type="number" name="ID" value ="<?php echo $idg; ?>" readonly  ></td>
      </tr>
	   <tr>
        <th>Enter Contact</th>
        <td><input type="text" name="Contact" value ="<?php echo $arrdata['Contact']; ?>"  placeholder="Enter 10-digit number" required></td>
      </tr>

      <tr>
        <th>Total Available Beds</th>
        <td><input type="number" name="beds" value ="<?php echo $arrdata['TotalAvailableBeds']; ?>" required></td>
      </tr>

      <tr>
        <th>Total Oxygen Bed</th>
        <td><input type="number" name="totalO2" value ="<?php echo $arrdata['TotalO2']; ?>" required></td>
      </tr>

      <tr>
        <th>Vacant Oxygen Bed</th>
        <td><input type="number" name="vacantO2" value ="<?php echo $arrdata['VacantO2']; ?>" required></td>
      </tr>

      <tr>
        <th>Total Ventilator Bed</th>
        <td><input type="number" name="total" value ="<?php echo $arrdata['Total']; ?>" required></td>
      </tr>

      <tr>
        <th>Vacant Ventilator Bed</th>
        <td><input type="number" name="vacant" value ="<?php echo $arrdata['Vacant']; ?>" required></td>
      </tr>

      <tr>
        <th>Doctors/Incharge</th>
        <td><input type="text" name="doctors" value ="<?php echo $arrdata['Doctors']; ?>" required></td>
      </tr>

          
      <tr>
        <td></td>
		 
        <td><input type="submit" name="submit" value="Update"></td>
      
      </tr>
  
  </form>


</div></table>
<!-- End Form Section -->
</center></form></div></div></section>
  
  <!-- ======= Footer ======= -->


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



