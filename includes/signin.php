<?php
    require_once('connection.php');
    
	
	if(isset($_POST['submit'])){
        $email = isset($_POST['email']) ? trim($_POST['email']) : "";
		$password = isset($_POST['password']) ? trim($_POST['password']) : "";

		if($email == "" || $password == ""){
			$error = urlencode("all fields are required");
			header("location: ../public/admsignin.php?error=".$error);
			return false;
		}
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			$error = urlencode("please enter a proper email");
			header("location: ../public/admsignin.php?error=".$error);
			return false;
		}else{
			$new_pass = md5($password);
			$query = "SELECT * FROM adminsignup_tb WHERE email = '$email' AND password = '$new_pass'";
			$result = mysqli_query($con, $query);
			if(mysqli_num_rows($result) > 0){
				while($row = mysqli_fetch_assoc($result)){
					session_start();
					$_SESSION['id'] = $row['id'];
					$_SESSION['email'] = $row['email'];
					if(isset($_SESSION['id'])){
						setcookie('phpclass', base64_encode(json_encode(['username' => $_SESSION['username'], 'id' => $_SESSION['id']])), time() + (86400 * 120), "/");
					}else{
						$failed = urlencode("email or password is incorrect");
						header('location: ../public/admsignin.php?error='.$failed);
						return false;
					}
					header('location:../admin/veiw/dashboard.php');
					return false;
				}
			}else{
				$notfound = urlencode('user not found');
				header('location: ../public/admsignin.php?error='.$notfound);
				return false;
			}
		}
	}else{
		$error = urlencode("please login first");
		header("location: ../public/admsignin.php?error=".$error);
		return false;
	}	
?>