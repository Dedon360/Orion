<?php
include "../includes/connection.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>OrionSuites</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
    * Template Name: Restaurantly - v3.9.0
    * Template URL: https://bootstrapmade.com/restaurantly-restaurant-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-center justify-content-md-between">

      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-phone d-flex align-items-center"><span>+1 5589 55488 55</span></i>
        <i class="bi bi-clock d-flex align-items-center ms-4"><span> Mon-Sat: 11AM - 23PM</span></i>
      </div>

      <div class="languages d-none d-md-flex align-items-center">
        <ul>
          <li>En</li>
          <li><a href="#">De</a></li>
        </ul>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.html">OrionSuites</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="index.php#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="index.php#about">About</a></li>
          <li><a class="nav-link scrollto active" href="index.php#menu">Menu</a></li>
          <li><a class="nav-link scrollto" href="index.php#specials">Specials</a></li>
          <li><a class="nav-link scrollto" href="index.php#events">Events</a></li>
          <li><a class="nav-link scrollto" href="index.php#chefs">Chefs</a></li>
          <li><a class="nav-link scrollto" href="index.php#gallery">Gallery</a></li>
          <li><a class="nav-link scrollto" href="index.php#contact">Contact</a></li>
          <i class="bi bi-bell"></i>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <a href="table.php" class="book-a-table-btn scrollto d-none d-lg-flex">Book a table</a>


    </div>
  </header><!-- End Header -->

  <section id="galx">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
      <h3 class="lead display-4">
        Order a meal that suites your taste....
      </h3>
      <h6 class="lead">
          We take our time to prepare the most delicious and exquisite meal
          with speclialised ingredients thus making it consumable friendly.
          Health is Wealth.
        </h6>
    </div>
  </section>


  <section>
    <div class="container-fluid">
      <div class="section-title">
        <h2>Order</h2>
        <p>Starters</p>
      </div>
      <div class="row">
        <?php
          $query = "SELECT * FROM  service_tb WHERE product_tags ='Seafood'";
          $result = mysqli_query($con, $query);
          while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            $product_name = $row['product_name'];
            $product_price = $row['product_price'];
            $product_img = $row['product_img'];
            $description = $row['description'];
        ?>
        <div class="col-md-6">
          <div class="card" id="lobster">
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <img src="../admin/includes/uploads/<?=$product_img?>" alt="img" class="img-fluid img-thumbnail rounded-5" data-aos="zoom-in" data-aos-delay='100'>
                </div>
                <div class="col-md-6">
                  <h3 class="lead display-8 mt-0"><?php echo $product_name ?> </h3>
                  <p class="display-10">
                    <?php echo $description ?>
                  </p>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-half"></i>
                  <h6 class="text-light lead display-10 mt-1"><?php echo $product_price ?> </h6>
                  <a href="orderform.php?id=<?=$id?>" class="btn">Order Here</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 stick1">
          <h3 class="display-2 text-center">Enjoy!!</h3>
        </div>
        <?php } ?>
      </div>
      <div class="row">
        <?php
          $query = "SELECT * FROM  service_tb WHERE product_tags ='Cake'";
          $result = mysqli_query($con, $query);
          while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            $product_name = $row['product_name'];
            $product_price = $row['product_price'];
            $product_img = $row['product_img'];
            $description = $row['description'];
          
        ?>
        <div class="col-md-6 stick1">
          <h3 class="display-2 text-center">Enjoy!!</h3>
        </div>
        <div class="col-md-6">
          <div class="card" id="cake">
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <img src="../admin/includes/uploads/<?=$product_img?>" alt="img" class="img-fluid img-thumbnail rounded-5" data-aos="zoom-in" data-aos-delay='100'>
                </div>
                <div class="col-md-6">
                  <h3 class="lead display-8 mt-2"><?php echo $product_name ?> </h3>
                  <p class="display-10">
                    <?php echo $description ?>
                  </p>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-half"></i>
                  <h6 class="text-light lead display-10 mt-1"><?php echo $product_price ?> </h6>
                  <a href="orderform.php?id=<?=$id?>" class="btn">Order Here</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>

      <div class="row">
        <?php
          $query = "SELECT * FROM  service_tb WHERE product_tags ='Starters'";
          $result = mysqli_query($con, $query);
          while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            $product_name = $row['product_name'];
            $product_price = $row['product_price'];
            $product_img = $row['product_img'];
            $description = $row['description'];
          
        ?>
        <div class="col-md-6">
          <div class="card" id="stick">
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <img src="../admin/includes/uploads/<?=$product_img?>" alt="img" class="img-fluid img-thumbnail rounded-5" data-aos="zoom-in" data-aos-delay='100'>
                </div>
                <div class="col-md-6">
                  <h3 class="lead display-8 mt-2"><?php echo $product_name ?> </h3>
                  <p class="display-10">
                    <?php echo $description ?>
                  </p>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-half"></i>
                  <h6 class="text-light lead display-10 mt-1"><?php echo $product_price ?> </h6>
                  <a href="orderform.php?id=<?=$id?>" class="btn mt-3">Order Here</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 stick1">
          <h3 class="display-2 text-center">Enjoy!!</h3>
        </div>
        <?php } ?>
      </div>




    </div>
  </section>

  <section>
    <div class="container-fluid">
      <div class="section-title">
        <h2>Order</h2>
        <p>Salads</p>
      </div>
      <!-- <div class="row">
        <div class="col-md-6">
          <div class="card" id="greek">
            <div class="card-body">
       
                <div class="row">
                  <div class="col-md-6">
                    <img src="..admin/includes/uploads/ <?= $product_img ?>" alt="img" class="img-fluid img-thumbnail rounded-5" data-aos="zoom-in" data-aos-delay='100'>
                  </div>
                  <div class="col-md-6">
                    <h3 class="lead display-8 mt-1"><?php echo $product_name ?> </h3>
                    <p class="display-10"><?php echo $description ?>
                    </p>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i>
                    <h6 class="text-light lead display-10 mt-1"><?php echo $product_price ?> </h6>
                    <a href="#"></a><button class="btn mt-1 btn-light">Order Here<i class="bi bi-cart3 ml-2"></i></button>
                  </div>
                </div>
              </div>
            </div>  
        </div>
       
      </div> -->
 
      <div class="row">
        <?php
          $query = "SELECT * FROM  service_tb WHERE product_tags ='Salad'";
          $result = mysqli_query($con, $query);
          while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            $product_name = $row['product_name'];
            $product_price = $row['product_price'];
            $product_img = $row['product_img'];
            $description = $row['description'];
          
          ?>
          <div class="col-md-6" id="greek">
            <div class="row">
              <div class="col-md-6">
                <img src="../admin/includes/uploads/<?=$product_img?>" alt="img" class="img-fluid img-thumbnail rounded-5" data-aos="zoom-in" data-aos-delay='100'>
              </div>
              <div class="col-md-6">
                <h3 class="lead display-8 mt-2"><?php echo $product_name ?> </h3>
                <p class="display-10"><?php echo $description ?>
                </p>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <h6 class="text-light lead display-10 mt-2"><?php echo $product_price ?> </h6>
                <a href="orderform.php?id=<?=$id?>" class="btn mt-1">Order Here</a>
              </div>
            </div>
          </div>
          <?php } ?>
      </div>
 



      <div class="container">

        <?php
        $query = "SELECT * FROM service_tb WHERE product_tags = 'Spinach'";
        $result = mysqli_query($con, $query);
        while ($row = mysqli_fetch_assoc($result)) {
          $id = $row['id'];
          $product_name = $row['product_name'];
          $product_price = $row['product_price'];
          $product_img = $row['product_img'];
          $description = $row['description'];
        ?>
        <div class="col-md-12 mx-auto mt-4" id="spinach">
            <div class="row">
              <div class="col-md-4">
                <img src="../admin/includes/uploads/<?=$product_img?>" alt="img" class="img-fluid img-thumbnail rounded-5" data-aos="zoom-in" data-aos-delay='100'>
              </div>
              <div class="col-md-6">
                <h3 class="lead text-light mt-3 display-8"><?php echo $product_name ?></h3>
                <p class="display-10 mt-1">
                  <?php echo $description ?>
                </p>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-half"></i>
                <h6 class="text-light lead display-10 mt-1"><?php echo $product_price ?></h6>
                <a href="orderform.php?id=<?=$id?>" class="btn mt-2">Order Here</a>
              </div>
            </div>
        </div>
        <?php } ?>
      </div>
  </section>



  <section>
    <div class="container-fluid">
      <div class="section-title">
        <h2>Order</h2>
        <p>Specialty</p>
      </div>
      <div class="row">
        <div class="col-md-4">
          <?php
            $query = "SELECT * FROM  service_tb WHERE product_tags ='Bread'";
            $result = mysqli_query($con, $query);
            while ($row = mysqli_fetch_assoc($result)) {
              $id = $row['id'];
              $product_name = $row['product_name'];
              $product_price = $row['product_price'];
              $product_img = $row['product_img'];
              $description = $row['description'];
          ?>
          <div class="card" id="bread">
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <img src="../admin/includes/uploads/<?=$product_img?>" alt="img" class="img-fluid img-thumbnail rounded-5" data-aos="zoom-in" data-aos-delay='100'>
                </div>
                <div class=" col-md-6">
                  <h3 class="lead display-8"><?php echo $product_name ?></h3>
                  <p class="display-10 mt-1">
                    <?php echo $description ?>
                  </p>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-half"></i>
                  <h6 class="text-light lead display-10 mt-1"><?php echo $product_price ?></h6>
                  <a href="orderform.php?id=<?=$id?>" class="btn mt-2">Order Here</a>
                </div>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
        <div class="col-md-4">
          <?php
            $query = "SELECT * FROM  service_tb WHERE product_tags ='Chicken'";
            $result = mysqli_query($con, $query);
            while ($row = mysqli_fetch_assoc($result)) {
              $id = $row['id'];
              $product_name = $row['product_name'];
              $product_price = $row['product_price'];
              $product_img = $row['product_img'];
              $description = $row['description'];
          ?>
          <div class="card" id="tuscan">
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <img src="../admin/includes/uploads/<?=$product_img?>" alt="img" class="img-fluid img-thumbnail rounded-5" data-aos="zoom-in" data-aos-delay='100'>
                </div>
                <div class="col-md-6">
                  <h3 class="lead display-8"><?php echo $product_name ?></h3>
                  <p class="display-10 mt-1">
                    <?php echo $description ?>
                  </p>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-half"></i>
                  <h6 class="text-light lead display-10 mt-1"><?php echo $product_price ?></h6>
                  <a href="orderform.php?id=<?=$id?>" class="btn mt-2">Order Here</a>
                </div>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
        <div class="col-md-4">
          <?php
            $query = "SELECT * FROM  service_tb WHERE product_tags ='Meat'";
            $result = mysqli_query($con, $query);
            while ($row = mysqli_fetch_assoc($result)) {
              $id = $row['id'];
              $product_name = $row['product_name'];
              $product_price = $row['product_price'];
              $product_img = $row['product_img'];
              $description = $row['description'];
          ?>
          <div class="card" id="roll">
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <img src="../admin/includes/uploads/<?=$product_img?>" alt="img" class="img-fluid img-thumbnail rounded-5" data-aos="zoom-in" data-aos-delay='100'>
                </div>
                <div class="col-md-6">
                  <h3 class="lead display-8"><?php echo $product_name ?></h3>
                  <p class="display-10 mt-1">
                    <?php echo $description ?>
                  </p>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-half"></i>
                  <h6 class="text-light lead display-10 mt-1"><?php echo $product_price ?></h6>
                  <a href="orderform.php?id=<?=$id?>" class="btn mt-2">Order Here</a>
                </div>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </section>

  <section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="row">
        <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
          <div class="about-img">
            <img src="../assets/img/chefs/chefs-5.jpg" alt="" class="h-250px">
          </div>
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
          <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
          <p class="fst-italic">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua.
          </p>
          <ul>
            <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
            <li><i class="bi bi-check-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
            <li><i class="bi bi-check-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
          </ul>
          <p>
            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
            velit esse cillum dolore eu fugiat nulla pariatur.
          </p>
        </div>
      </div>

    </div>
  </section>


  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>OrionSuites</h3>
              <p>
                A108 Adam Street <br>
                NY 535022, USA<br><br>
                <strong>Phone:</strong> +1 5589 55488 55<br>
                <strong>Email:</strong> info@example.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Table Reserve</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Event Planning</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Eatery Service</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>OrionSuites</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/restaurantly-restaurant-template/ -->
        Designed by <a href="#">Dedoncodes</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <!-- <script src="../assets/vendor/php-email-form/validate.js"></script> -->

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>
  <script src="../assets/js/index.js"></script>

</body>

</html>