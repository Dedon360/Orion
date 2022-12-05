<?php
    require_once('./connection.php');
    
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $id = $_POST['foodid'];

    // echo $name;
    // die();
        
        $query = "insert into foodform_tb(foodid, name, email, phone, address)
        values('$id', '$name', '$email', '$phone', '$address')";
        $result = mysqli_query($con, $query);
        if($result){
            echo 'successful';
            return false;
        }else{
            echo 'failed';
            return false;
        }

?>