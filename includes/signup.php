<?php
    require_once('./connection.php');


    
    if(isset($_POST['submit'])){
        $firstname = isset($_POST['firstname']) ? trim($_POST['firstname']) : "";
        $lastname = isset($_POST['lastname']) ? trim($_POST['lastname']) : "";
        $email = isset($_POST['email']) ? trim($_POST['email']) : "";
        $password = isset($_POST['password']) ? trim($_POST['password']) : "";


        if($firstname == "" || $lastname == "" || $email == "" || $password == ""){
			$error = urlencode("these fields are required");
			header("location: ../public/adminsignup.php?error=".$error);
			return false;
        }
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			$error = urlencode("please enter a proper email");
			header("location: ../public/adminsignup.php?error=".$error);
			return false;
        }else{
            $password = md5($password);
            $query = "INSERT INTO adminsignup_tb(firstname, lastname, email, password)
            VALUES('$firstname', '$lastname', '$email', '$password')";
            $result = mysqli_query($con, $query);
            if($result){
                $success = urlencode("Registration Successful");
                header("location: ../public/admsignin.php?success=".$success);
                return false;
            }else{
                $error = urlencode("error creating user");
                header("location: ../public/admsignup.php?error=".$error);
                return false;
            }
        }
    }

?>