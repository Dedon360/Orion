<?php
    include_once("../includes/header.php");
    require_once('../includes/connection.php');
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
  <h1>Contact</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item active">Contact</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<!-- <h1 class="lead display-5 text-center mt-4 neon2">Contact Dashboard</h1> -->
<div class="container mt-4 mb-5 shadow p-4">
<h5 class="card-title">Contact Records</h5>
    <table class="table bg-light">
        <thead>
            <tr>
                <th scope="col" class="text-dark">S/NO</th>
                <th scope="col"  class="text-dark">Name</th>
                <th scope="col"  class="text-dark">Email</th>
                <th scope="col"  class="text-dark">Subject</th>
                <th scope="col"  class="text-dark">Message</th>
                <th scope="col"  class="text-dark">Action</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $query = 'select * from contact_tb';
            $result = mysqli_query($con,$query);

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
                $subject = $row['subject'];
                $message = $row['message'];
              

                echo '
                    <tr>
                        <th scope="row">'.$id.'</th>
                        <td>'.$name.'</td>
                        <td>'.$email.'</td>
                        <td>'.$subject.'</td>
                        <td>'.$message.'</td>
                        <td>
                            <button class="btn btn-danger ml-3">
                            <a href="../includes/contactdel.php?deleteid='.$id.'" class="text-light  text-decoration-none">Delete</a></button>
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