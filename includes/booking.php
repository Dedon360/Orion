<?php
    require_once('./connection.php');
    // print_r($_POST);
    // die();

    if(isset($_POST['submit'])){
        $name = isset($_POST['name']) ? trim($_POST['name']) : "";
        $email = isset($_POST['email']) ? trim($_POST['email']) : "";
        $phone = isset($_POST['phone']) ? trim($_POST['phone']) : "";
        $date = isset($_POST['date']) ? trim($_POST['date']) : "";
        $time = isset($_POST['time']) ? trim($_POST['time']) : "";
        $message = isset($_POST['message']) ? trim($_POST['message']) : "";
        $id = $_POST['tableid'];

        if($id == "" || $name == "" || $email == "" || $phone == "" || $date == "" || $time == ""|| $message == ""){
			$error = urlencode("these fields are required");
			header("location: ../public/bookreg.php?error=".$error);
			return false;
        }
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			$error = urlencode("please enter a proper email");
			header("location: ../public/bookreg.php?error=".$error);
			return false;
        }else{
            $query = "insert into booking_tb(tableid, name, email, phone, date, time, message)
            values('$id', '$name', '$email', '$phone', '$date', '$time', '$message')";
            $result = mysqli_query($con, $query);
            if($result){
                $success = urlencode("booking successful");
                header("location: ../public/table.php?success=".$success);
                return false;
            }else{
                $error = urlencode("error creating user");
                header("location: ../public/bookreg.php?error=".$error);
                return false;
            }
        }


    }


?>