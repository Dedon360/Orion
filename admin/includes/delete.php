<?php
    require_once('./connection.php');
    if(isset($_GET['deleteid'])){
        $id = $_GET['deleteid'];

        $query = "delete from booking_tb where id= $id ";
        $result = mysqli_query($con, $query);

        if($result){
            header("location: ../veiw/reservation.php?success=data deleted successfully");
        }else{
            die(mysqli_error(($con)));
        }
    }
?>