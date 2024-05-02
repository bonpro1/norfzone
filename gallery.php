<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Gallery ( Collection ) ~ SOG Images </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/MY LOG.png" rel="icon">
  <link href="assets/img/MY LOG.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Cardo:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: SOG Images - v1.2.0
  * Template URL: https://bootstrapmade.com/SOG Images-bootstrap-photography-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center  me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <i class="bi bi-camera"></i>
        <h1>SOG Images</h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li class="dropdown"><a href="#" class="active"><span>Gallery</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="gallery.php">Nature</a></li>
              <li><a href="gallery.php">People</a></li>
              <li><a href="gallery.php">Audio Production</a></li>
              <li><a href="gallery.php">Video Production</a></li>
<li><a href="gallery.php">Graphic Design</a></li>
              <li><a href="gallery.php">Sports</a></li>
              <li><a href="gallery.php">Travel</a></li>
               
            </ul>
          </li>
          <li><a href="services.php">Services</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li><a href="login.php" class="text-success">Log In</a></li>
        </ul>
      </nav><!-- .navbar -->

      <div class="header-social-links">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->

  <main id="main" data-aos="fade" data-aos-delay="1500">

    <!-- ======= End Page Header ======= -->
    <div class="page-header d-flex align-items-center">
      <div class="container position-relative">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-6 text-center">
            <h2>Collection (<?php include 'image-count.php';?> images)</h2>
            <p>This is a collection of daily photos we upload here on our website. Chopped and edited by Me.</p>

            <a class="cta-btn" href="contact.php">Available for hire</a>

          </div>
        </div>
      </div>
    </div><!-- End Page Header -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container-fluid">

        <div class="row gy-4 justify-content-center">
          <?php 
         include'connect.php';
         $sql = mysqli_query($conn,"SELECT * FROM photos ORDER BY ID DESC LIMIT 16;");
         if ($sql == TRUE) {
           while($fata = $sql->fetch_assoc()){
            $id = $fata['ID'];
            $name = $fata['Name'];
            $cap = $fata['Caption'];
            $descrip = $fata['Description'];
            $image = $fata['Image'];

            echo" <div class='col-xl-3 col-lg-4 col-md-6'>
            <div class='gallery-item h-100'>
              <img src='Photos/".$image."' class='img-fluid' alt='".$cap."'>
              <div class='gallery-links d-flex align-items-center justify-content-center'>
                <a href='Photos/".$image."'' title='".$name."' class='glightbox preview-link'><i class='bi bi-arrows-angle-expand'></i></a>
                <a href='gallery-single.php? id=$id' class='details-link'><i class='bi bi-link-45deg'></i></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->";
           }
         }
         ?>

        </div>

      </div>
    </section><!-- End Gallery Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>SOG Images</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/SOG Images-bootstrap-photography-website-template/ -->
        Designed by <a href="https://instagram.com/josephat.systems">JMS</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader">
    <div class="line"></div>
  </div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>