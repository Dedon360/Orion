<?php
    require_once('./connection.php');



    
    if(isset($_POST['submit'])){
        $name = isset($_POST['name']) ? trim($_POST['name']) : "";
        $email = isset($_POST['email']) ? trim($_POST['email']) : "";
        $subject = isset($_POST['subject']) ? trim($_POST['subject']) : "";
        $message = isset($_POST['message']) ? trim($_POST['message']) : "";


        if($name == "" || $email == "" || $subject == "" || $message == ""){
			$error = urlencode("these fields are required");
			header("location: ../public/index.php?error=".$error);
			return false;
        }
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			$error = urlencode("please enter a proper email");
			header("location: ../public/index.php?error=".$error);
			return false;
        }else{
            $query = "insert into contact_tb(name, email, subject, message)
            values('$name', '$email', '$subject', '$message')";
            $result = mysqli_query($con, $query);
            if($result){
                $success = urlencode("Your request has been successfully received");
                header("location: ../public/feedback.php?success=".$success);
                return false;
            }else{
                $error = urlencode("error creating user");
                header("location: ../public/index.php?error=".$error);
                return false;
            }
        }
    }

?>