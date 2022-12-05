<?php
    include_once ("../includes/header.php");
    include_once ("../includes/connection.php");
?>




<body>

        
<?php 
    if(isset($_GET['success'])){
        ?>
            <div class="alert alert-success container text-center">
        <?= $_GET['success'] ?>
    </div>
    <?php
    }
?>
<div class="pagetitle">
  <h1>Product View</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item active">Prodcut View</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<!-- <h1 class="lead display-5 text-center mt-4 neon2">Contact Dashboard</h1> -->
<div class="container mt-4 mb-5 shadow p-4">
<h5 class="card-title">Product View</h5>
    <table class="table bg-light">
        <thead>
            <tr>
                <th scope="col" class="text-dark">S/NO</th>
                <th scope="col"  class="text-dark">Product_name</th>
                <th scope="col"  class="text-dark">Product_price</th>
                <th scope="col"  class="text-dark">Product_tags</th>
                <th scope="col"  class="text-dark">product_img</th>
                <th scope="col"  class="text-dark">Description</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $query = 'select * from service_tb';
            $result = mysqli_query($con,$query);

            // if($row = mysqli_fetch_assoc($result)){
            //     echo $row['name'];
            // }
            // if($row = mysqli_fetch_assoc($result)){
            //     echo $row['email'];
            // }

            while($row = mysqli_fetch_assoc($result)){
                $id = $row['id'];
                $product_name = $row['product_name'];
                $product_price = $row['product_price'];
                $product_tags = $row['product_tags'];
                $product_img = $row['product_img'];
                $description = $row['description'];
              

                echo '
                    <tr>
                        <th scope="row">'.$id.'</th>
                        <td>'.$product_name.'</td>
                        <td>'.$product_price.'</td>
                        <td>'.$product_tags.'</td>
                        <td>'.$product_img.'</td>
                        <td>'.$description.'</td>
                        <td>
                            <button class="btn btn-danger ml-3">
                            <a href="../includes/productdel.php?deleteid='.$id.'" class="text-light  text-decoration-none">Delete</a></button>
                        </td>
                    </tr>
                ';
            }
        ?>
            
        </tbody>
    </table>
</div>

</body>

<?php 
    include_once("../includes/footer.php");
?>