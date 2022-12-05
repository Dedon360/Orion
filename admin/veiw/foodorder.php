<?php 
include_once("../includes/header.php");
include_once("../includes/connection.php");
?>
<div class="pagetitle">
  <h1>Food Request</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item active">Food Request</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

    
    <section class="section dashboard">
    <div class="card">
            <div class="card-body">
              <h5 class="card-title">Order Records</h5>

              <!-- Table with stripped rows -->
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">S/N</th>
                    <th scope="col">Food Name</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Address</th>
                    <th scope="col">Delete</th>
                    <th scope="col">Approve</th>
                  </tr>
                </thead>
                <tbody>
                 
                <?php
                $query = 'select * from foodform_tb';
                $result = mysqli_query($con,$query);
                $num = 1;

                // if($row = mysqli_fetch_assoc($result)){
                //     echo $row['name'];
                // }
                // if($row = mysqli_fetch_assoc($result)){
                //     echo $row['email'];
                // }

                while($row = mysqli_fetch_assoc($result)){
                    $id = $row['id'];
                    $name = $row['name'];
                    $email = $row['email'];
                    $phone = $row['phone'];
                    $address = $row['address'];
                    $foodid = $row['foodid'];
                    $approved = $row['approved'];

                    $t = "SELECT * FROM service_tb WHERE id = '$foodid'";
                    $r = mysqli_query($con, $t);
                    $rs = mysqli_fetch_assoc($r);
                    $fname = $rs['product_name'];
                    $fprice = $rs['product_price'];
                    $fdescription = $rs['description'];

            ?>
                <tr>
                  <td><?=$num++?></td>
                  <td><?=$fname?></td>
                  <td><?=$name?></td>
                  <td><?=$email?></td>
                  <td><?=$phone?></td>
                  <td><?=$address?></td>
                  <td>
                      <button class="btn btn-danger ml-3">
                        <a href="../includes/fooddel.php?deleteid=<?=$id?>" class="text-light  text-decoration-none">Delete</a>
                      </button>
                  </td>
                    <?php if($approved == 1){ ?>
                  <td>
                      <button class="btn btn-success" ><a href="../includes/foodmail.php?email=<?=$email?>&tn=<?=$fname?>&tp=<?=$fprice?>&id=<?=$foodid?>" style="color: white;">approve</a></button>
                  </td>
                  <?php } ?>
                </tr>
              <?php } ?>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

    </section>

   
<!-- ======= Footer ======= -->
<footer id="footer" class="footer">
  <div class="copyright">
    &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
  </div>
  <div class="credits">
    <!-- All the links in the footer should remain intact. -->
    <!-- You can delete the links only if you purchased the pro version. -->
    <!-- Licensing information: https://bootstrapmade.com/license/ -->
    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
  </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="../../assets/js/jquery-3.2.1.min.js"></script>
<script src="../assets/vendor/apexcharts/apexcharts.min.js"></script>
<script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../assets/vendor/chart.js/chart.min.js"></script>
<script src="../assets/vendor/echarts/echarts.min.js"></script>
<script src="../assets/vendor/quill/quill.min.js"></script>
<script src="../assets/vendor/simple-datatables/simple-datatables.js"></script>
<script src="../assets/vendor/tinymce/tinymce.min.js"></script>
<script src="../assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="../assets/js/main.js"></script>
</body>

</html>