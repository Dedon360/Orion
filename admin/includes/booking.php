<?php
    require_once('./connection.php');
    
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $message = $_POST['message'];
        $id = $_POST['tableid'];

    // echo $message;
    // die();
        
        $query = "insert into booking_tb(tableid, name, email, phone, date, time, message)
        values('$id', '$name', '$email', '$phone', '$date', '$time', '$message')";
        $result = mysqli_query($con, $query);
        if($result){
            echo 'successful';
            return false;
        }else{
            echo 'failed';
            return false;
        }

?>