<?php
  include_once("../admin/includes/connection.php");
  if(isset($_GET['id'])){
    $id = $_GET['id'];

    $query = "SELECT * FROM service_tb WHERE id = '$id'";
    $result = mysqli_query($con,$query);
    while ($row = mysqli_fetch_assoc($result)) {
      $product_name = $row['product_name'];
      $product_price = $row['product_price'];
      $product_tags = $row['product_tags'];
      $product_img = $row['product_img'];
      $description = $row['description'];
    }

  }
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
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="index.php#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="index.php#about">About</a></li>
          <li><a class="nav-link scrollto active" href="#menu">Menu</a></li>
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


    <section id="contact" class="contact mt-5">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Order Details</h2>
          <p>Order Your Meal Here</p>
        </div>
        <div class="row">
          <div class="col-md-3">
            <img src="../admin/includes/uploads/<?=$product_img?>" class="img-fluid img-thumbnail" alt="table" width="250" height="150">
          </div>
          <div class="col-md-6">
            <p><?=$product_name?></p>
            <p><?=$product_price?></p>
            <p><?=$description?></p>
          </div>
        </div>
        <div class="php-email-form mt-5" role="form" data-aos="fade-up" data-aos-delay="100">
          <div class="row">
            <div class="col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              <input type="hidden" name="foodid" id="foodid" value="<?=$id?>">
              <input type="hidden" name="price" id="price" value="<?=$product_price?>">
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              <div class="validate"></div>
            </div>
          </div>
          <div class="form-group mt-3">
            <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone Number" required>
            <div class="validate"></div>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="address" rows="8" id="address" placeholder="Address" required></textarea>
            <div class="validate"></div>
          </div>
          <div class="text-center"><button onclick="saveorder()" value="index" class="btn" name="submit">Send Message</button></div>
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
              <li><i class="bx bx-chevron-right"></i> <a href="#">Eatry Service</a></li>
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
  <script src="../assets/js/jquery-3.2.1.min.js"></script>
  <script src="../assets/js/main.js"></script>
  <script src="../assets/js/index.js"></script>
  <script src="https://js.paystack.co/v1/inline.js"></script>
   
<script>
	function paywithpaystack(name, email, phone, amount){
		const api = '#';
        
		var handler = PaystackPop.setup({
			key: api,
			email: email,
			amount: amount*100,
			currency: "NGN",
			ref: ''+Math.floor((Math.random() * 1000000000) + 1),
			firstname: name,
			metadata: {
				custom_fields: [
					{
						display_name: name,
						variable_name: name,
						value: phone,
					}
				]
			},
			callback: function(response){
				const referenced = response.reference;
                console.log(response);
				window.location.href='feedback.php?successfullypaid='+referenced;


			},
			onClose: function(){
				alert('window closed');
        window.location.href='orderd.php'
			}
		});
		handler.openIframe();
	}
</script>
<script>
function saveorder(){
      let name = document.getElementById('name').value;
      let foodid = document.getElementById('foodid').value;
      let email = document.getElementById('email').value;
      let phone = document.getElementById('phone').value;
      let address = document.getElementById('address').value;
      let price = document.getElementById('price').value;
      
      newprice = price.split('$')
      newprice = Number(newprice[1])

      var formdata = new FormData();
      formdata.append('name', name);
      formdata.append('foodid', foodid);
      formdata.append('email', email);
      formdata.append('phone', phone);
      formdata.append('address', address);
      
      $.ajax({
        url:'../admin/includes/foodpro.php',
        type: 'POST',
        cache: false, 
        contentType: false,
        processData: false,
        data: formdata,
        success: function(response){
          // document.getElementById('msg').innerHTML = response;
          // document.getElementById('msg').style.color = 'green';
          paywithpaystack(name, email, phone, newprice)
        }

    })
    }
  </script>
</body>

</html>