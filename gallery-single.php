<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Single Image View ~ SOG Images </title>
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
          <li class="dropdown"><a href="#"><span>Gallery</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="gallery.php" class="active">Nature</a></li>
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
            <h2>Gallery Single</h2>
           <a class="cta-btn" href="contact.php">Available for hire</a>

          </div>
        </div>
      </div>
    </div><!-- End Page Header -->

    <!-- ======= Gallery Single Section ======= -->
    <section id="gallery-single" class="gallery-single">
      <div class="container">

        <div class="position-relative h-100">
          <div class="slides-1 portfolio-details-slider swiper">
            <div class="swiper-wrapper align-items-center">

              <div class="swiper-slide">
                <?php 
                include'connect.php';
                 if (isset($_GET['id'])) {
                   $id = $_GET['id'];
                   $sql = mysqli_query($conn,"SELECT * FROM photos WHERE ID = $id");
                   if ($sql == TRUE) {
                     while($fata = $sql->fetch_assoc())
                     {
                      $name = $fata['Name'];
                      $image = $fata['Image'];
                      echo"<img src='Photos/".$image."' alt='".$name."' >";
                     }
                   }
                 }
                ?>
              </div>
              
              
            </div>
            <div class="swiper-pagination"></div>
          </div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>

        </div>

        <div class="row justify-content-between gy-4 mt-4">

          <div class="col-lg-8">
            <div class="portfolio-description">
              <h2>Image description</h2>
              <p>
                <?php 
                include'connect.php';
                 if (isset($_GET['id'])) {
                   $id = $_GET['id'];
                   $sql = mysqli_query($conn,"SELECT * FROM photos WHERE ID = $id");
                   if ($sql == TRUE) {
                     while($fata = $sql->fetch_assoc())
                     {
                      $ds = $fata['Description'];
                      echo $ds;
                     }
                   }
                 }
                ?>
              </p>
              

             

            </div>
          </div>

          <div class="col-lg-3">
            <div class="portfolio-info">
              <h3>Image information</h3>
              <?php 
              include'connect.php';
              if (isset($_GET['id'])) {
                   $id = $_GET['id'];
              $sql0 = mysqli_query($conn,"SELECT * FROM photos WHERE ID = $id;");
              if ($sql0 == TRUE) {
                while($fata0 = $sql0->fetch_assoc()){
                  $name = $fata0['Name'];
                  $cap = $fata0['Caption'];
                  $img = $fata0['Image'];
                  $date = $fata0['Date'];
                }
                echo"<ul>
                <li><strong>Name</strong> <span>".$name."</span></li>
                <li><strong>Category</strong> <span>".$cap."</span></li>
                <li><strong>Uploaded date</strong> <span>".$date."</span></li>
                <li><a href='Photos/".$img."' class='btn-visit align-self-start' download>Download Image</a></li>
              </ul>";
              }
            }
              ?>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Gallery Single Section -->

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