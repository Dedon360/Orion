<?php
    include_once("../includes/header.php");
    include_once("../includes/orderpic.php")
?>


<div class="embed-reponsive embed-responsive-12by9">
<div class="pagetitle">
  <h1>Order Upload</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item active">Order Upload</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<div class="container">
    <div class="form-group">
        <?php if(isset($_GET['error'])) {?>
        <div class="alert alert-danger">
        <?=urldecode($_GET['error'])?>
        </div>
        <?php } elseif(isset($_GET['success'])) { ?>
        <div class="alert alert-success">
        <?=urldecode($_GET['success'])?>
        </div>
        <?php } ?>
    </div>   
  <form enctype="multipart/form-data" action="../includes/orderpic.php" method="POST">
    <div class="form-group">
      <label>product_name</label>
      <input type="text" name="product_name" class="form-control mt-2">
    </div>
    <div class="form-group">
      <label>product_price</label>                    
      <input type="text" name="product_price" class="form-control mt-2"/>
    </div>
    <div class="form-group">
      <label>product_tags</label>                    
      <input type="text" name="product_tags" class="form-control mt-2"/>
    </div>
    <div class="form-group">
      <label>product_image</label>                    
      <input type="file" name="product_img" class="form-control mt-2"/>
    </div>
    <div class="form-group">
      <button class="btn btn-primary mt-3"  type="submit" name="submit">submit</button>
    </div>      
  </form>
</div>
</div>
<?php 
include_once("../includes/footer.php");

?>